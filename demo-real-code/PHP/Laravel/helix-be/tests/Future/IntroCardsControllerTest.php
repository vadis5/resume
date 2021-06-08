<?php

namespace Tests\Functional\API\V1;

use App\Models\IntroCard;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

/**
 * IntroCardsControllerTest for Tests of Intro Cards
 *
 * PHP version 7.4
 *
 * @category Seeder
 * @package  Tests\Functional\API\v1
 * @author   Pasholka Artem <artem.pasholka@intellicagroup.com>
 * @license  BSD License
 * @link     Tests\Functional\API\v1
 */
class IntroCardsControllerTest extends TestCase
{
    use DatabaseMigrations;

    private const TABLE_NAME_INTRO_CARDS = 'intro_cards';
    private const SUPER_ADMIN = ['super-admin@admin.com', 'Super Admin'];
    private const HELIX_ADMIN = ['helix-admin@admin.com', 'Helix Admin'];
    private const TENANT_ADMIN_1 = ['tenant-admin-1@admin.com', 'Tenant Admin 1'];
    private const TENANT_ADMIN_2 = ['tenant-admin-2@admin.com', 'Tenant Admin 2'];
    private const TENANT_USER_1 = ['tenant-user-1@admin.com', 'Tenant User 1'];

    public function setUp(): void
    {
        parent::setUp(); // TODO: Change the autogenerated stub

        $this->artisan('db:seed --class=TestsIntroCardsSeeder');
    }

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample(): void
    {
        $this->assertTrue(true);
    }

    /**
     * Check seeder.
     *
     * @return void
     */
    public function testSeeder(): void
    {
        $introCards = DB::table(self::TABLE_NAME_INTRO_CARDS)->get();

        $this->assertEquals(3, $introCards->count());

        $introCard = DB::table(self::TABLE_NAME_INTRO_CARDS)->first();

        $this->assertEquals(1, $introCard->tenant_id);
        $this->assertEquals('introCards/test1.jpg', $introCard->intro_card);
        $this->assertEquals(true, $introCard->active);
    }

    /**
     * Full index for super-admin.
     *
     * @return void
     */
    public function testIndexForSuperAdmin(): void
    {
        // Login via super-admin
        $token = $this->loginByEmail(self::SUPER_ADMIN[0], self::SUPER_ADMIN[1]);

        // Request
        $response = $this->get('api/v1/introCards?token=' . $token);

        // Check response status
        $response->assertStatus(200);

        // Check response structure
        $response->assertJsonStructure(
            [
                'success',
                'code',
                'data' =>
                    [
                        [
                            "id",
                            "tenant_id",
                            "intro_card",
                            "active",
                            "updated_at",
                            "created_at",

                        ]
                    ],
                'message'
            ]
        );
        $responseJSON = json_decode($response->getContent(), true);
        $success      = $responseJSON['success'];  // array
        $code         = $responseJSON['code'];     // array
        $message      = $responseJSON['message'];  // array
        $data         = $responseJSON['data'];     // array

        $this->assertEquals(true, $success);
        $this->assertEquals(200, $code);
        $this->assertCount(3, $data);
        $this->assertEquals('Into Cards Index.', $message);
    }

    /**
     * Full index for tenant-admin. Forbidden
     *
     * @return void
     */
    public function testIndexForTenantAdmin(): void
    {
        $token = $this->loginByEmail(self::TENANT_ADMIN_1[0], self::TENANT_ADMIN_1[1]);

        // Request
        $response = $this->get('api/v1/introCards?token=' . $token);

        // Check response status
        $response->assertStatus(403);

        $responseJSON = json_decode($response->getContent(), true);
        $success      = $responseJSON['success'];  // array
        $code         = $responseJSON['code'];     // array
        $message      = $responseJSON['message'];  // array

        $this->assertEquals(false, $success);
        $this->assertEquals(403, $code);
        $this->assertEquals("Permission is absent", $message);
    }

    /**
     * Empty index for super-admin.
     *
     * @return void
     */
    public function testIndexEmptyForSuperAdmin(): void
    {
        // Login via tenant-admin
        $token = $this->loginByEmail(self::SUPER_ADMIN[0], self::SUPER_ADMIN[1]);

        DB::table(self::TABLE_NAME_INTRO_CARDS)->delete();

        // Request
        $response = $this->get('api/v1/introCards?token=' . $token);

        // Check response status
        $response->assertStatus(204);
    }

    /**
     * Check Index for Guest
     *
     * @return void
     */
    public function testIndexForGuest()
    {
        // Request
        $response = $this->get('api/v1/introCards');

        // Check response status
        $response->assertStatus(401);
    }

    /**
     * Check Store a new Intro Card via Super Admin
     *
     * @return void
     */
    public function testStoreNewIntroCardViaSuperAdmin(): void
    {
        $token = $this->loginByEmail(self::SUPER_ADMIN[0], self::SUPER_ADMIN[1]);
        DB::table('intro_cards')->where('tenant_id', 1)->delete();
        $file = UploadedFile::fake()->image('vblmkb.jpg', 1920, 1080)->size(5120);
        // Create data
        $data = [
            "tenant_id" => 1,
            "intro_card" => $file
        ];

        // Request
        $response = $this->post('api/v1/introCards?token=' . $token, $data);

        // Check response status
        $response->assertStatus(200);

        // Check response structure
        $response->assertJsonStructure(
            [
                'success',
                'code',
                'data' =>
                    [
                        "id",
                        "tenant_id",
                        "intro_card",
                        "active",
                        "updated_at",
                        "created_at"
                    ],
                'message'
            ]
        );
        $responseJSON = json_decode($response->getContent(), true);
        $success      = $responseJSON['success'];  // array
        $code         = $responseJSON['code'];     // array
        $message      = $responseJSON['message'];  // array
        $data         = $responseJSON['data'];     // array

        $this->assertEquals(true, $success);
        $this->assertEquals(200, $code);
        $this->assertCount(6, $data);
        $this->assertEquals(1, $data['tenant_id']);
        $this->assertEquals('/introCards/1.jpg', $data['intro_card']);
        $this->assertEquals(true, $data['active']);
        $this->assertEquals("Created new Intro Card.", $message);
    }

    /**
     * Check Store a new Intro Card via Tenant Admin
     *
     * @return void
     */
    public function testStoreNewIntroCardViaTenantAdmin(): void
    {
        $token = $this->loginByEmail(self::TENANT_ADMIN_1[0], self::TENANT_ADMIN_1[1]);
        DB::table('intro_cards')->where('tenant_id', 2)->delete();
        $file = UploadedFile::fake()->image('vblmkb.jpg', 1920, 1080)->size(5120);
        // Create data
        $data = [
            "tenant_id" => 2,
            "intro_card" => $file
        ];

        // Request
        $response = $this->post('api/v1/introCards?token=' . $token, $data);

        // Check response status
        $response->assertStatus(200);

        // Check response structure
        $response->assertJsonStructure(
            [
                'success',
                'code',
                'data' =>
                    [
                        "id",
                        "tenant_id",
                        "intro_card",
                        "active",
                        "updated_at",
                        "created_at"
                    ],
                'message'
            ]
        );
        $responseJSON = json_decode($response->getContent(), true);
        $success      = $responseJSON['success'];  // array
        $code         = $responseJSON['code'];     // array
        $message      = $responseJSON['message'];  // array
        $data         = $responseJSON['data'];     // array

        $this->assertEquals(true, $success);
        $this->assertEquals(200, $code);
        $this->assertCount(6, $data);
        $this->assertEquals(2, $data['tenant_id']);
        $this->assertEquals('/introCards/2.jpg', $data['intro_card']);
        $this->assertEquals(true, $data['active']);
        $this->assertEquals("Created new Intro Card.", $message);
    }

    /**
     * Check Store A Wrong Data By Tenant Admin
     *
     * @return void
     */
    public function testStoreWrongDataByTenantAdmin(): void
    {
        $token = $this->loginByEmail(self::TENANT_ADMIN_1[0], self::TENANT_ADMIN_1[1]);
        DB::table('intro_cards')->where('tenant_id', 2)->delete();
        $file = UploadedFile::fake()->image('vblmkb.jpg', 1900, 1000)->size(6000);

        // Create data
        $data = [
            "tenant_id" => 2,
            "intro_card" => $file
        ];

        // Request
        $response = $this->withHeader('Accept', 'application/json')
            ->post('api/v1/introCards?token=' . $token, $data);
        // Check response status
        $response->assertStatus(422);

        // Check response structure
        $response->assertJsonStructure(
            [
                'message',
                'errors'
            ]
        );

        $responseJSON = json_decode($response->getContent(), true);
        $message      = $responseJSON['message'];    // array
        $errors       = $responseJSON['errors'];     // array

        $this->assertCount(1, $errors);
        $this->assertEquals("The given data was invalid.", $message);
    }

    /**
     * Check Store Intro Card by Authenticated User Without Permissions
     *
     * @return void
     */
    public function testStoreNewIntroCardByAuthenticatedUserWithoutPermissions(): void
    {
        $token = $this->loginByEmail(self::TENANT_USER_1[0], self::TENANT_USER_1[1]);
        DB::table('intro_cards')->where('tenant_id', 2)->delete();
        $file = UploadedFile::fake()->image('vblmkb.jpg', 1920, 1080)->size(5120);

        // Create data
        $data = [
            "tenant_id" => 2,
            "intro_card" => $file
        ];

        // Request
        $response = $this->post('api/v1/introCards?token=' . $token, $data);

        // Check response status
        $response->assertStatus(403);

        $responseJSON = json_decode($response->getContent(), true);
        $success      = $responseJSON['success'];  // array
        $code         = $responseJSON['code'];     // array
        $message      = $responseJSON['message'];  // array

        $this->assertEquals(false, $success);
        $this->assertEquals(403, $code);
        $this->assertEquals('Permission is absent.', $message);
    }

    /**
     * Check Store New New Intro Card by Guest
     *
     * @return void
     */
    public function testStoreNewIntroCardByGuest(): void
    {
        DB::table('intro_cards')->where('tenant_id', 2)->delete();
        $file = UploadedFile::fake()->image('vblmkb.jpg', 1920, 1080)->size(5120);

        // Create data
        $data = [
            "tenant_id" => 2,
            "intro_card" => $file
        ];

        // Request
        $response = $this->post('api/v1/introCards?token=', $data);

        // Check response status
        $response->assertStatus(401);
    }

    /**
     * Check Update Intro Card By Tenant Admin
     *
     * @return void
     */
    public function testUpdateIntroCardByTenantAdmin(): void
    {
        $token = $this->loginByEmail(self::TENANT_ADMIN_1[0], self::TENANT_ADMIN_1[1]);

        $file = UploadedFile::fake()->image('vblmkb.jpg', 1920, 1080)->size(5120);

        // Create data
        $data = [
            'intro_card' => $file,
        ];

        // Request
        $response = $this->put('api/v1/introCards/tenants/2?token=' . $token, $data);

        // Check response status
        $response->assertStatus(200);

        // Check response structure
        $response->assertJsonStructure(
            [
                'success',
                'code',
                'data' =>
                    [
                        "id",
                        "tenant_id",
                        "intro_card",
                        "active",
                        "updated_at",
                        "created_at",
                    ],
                'message'
            ]
        );
        $responseJSON = json_decode($response->getContent(), true);
        $success      = $responseJSON['success'];  // array
        $code         = $responseJSON['code'];     // array
        $message      = $responseJSON['message'];  // array
        $data         = $responseJSON['data'];     // array

        $this->assertEquals(true, $success);
        $this->assertEquals(200, $code);
        $this->assertCount(6, $data);
        $this->assertEquals(2, $data['tenant_id']);
        $this->assertEquals('/introCards/2.jpg', $data['intro_card']);
        $this->assertEquals(true, $data['active']);
        $this->assertEquals("Updated The Intro Card.", $message);
    }

    /**
     * Check Update Intro Card By Super Admin
     *
     * @return void
     */
    public function testUpdateIntroCardBySuperAdmin(): void
    {
        $token = $this->loginByEmail(self::SUPER_ADMIN[0], self::SUPER_ADMIN[1]);

        $file = UploadedFile::fake()->image('vblmkb.jpg', 1920, 1080)->size(5120);

        // Create data
        $data = [
            'intro_card' => $file,
        ];

        // Request
        $response = $this->put('api/v1/introCards/tenants/2?token=' . $token, $data);

        // Check response status
        $response->assertStatus(200);

        // Check response structure
        $response->assertJsonStructure(
            [
                'success',
                'code',
                'data' =>
                    [
                        "id",
                        "tenant_id",
                        "intro_card",
                        "active",
                        "updated_at",
                        "created_at",
                    ],
                'message'
            ]
        );
        $responseJSON = json_decode($response->getContent(), true);
        $success      = $responseJSON['success'];  // array
        $code         = $responseJSON['code'];     // array
        $message      = $responseJSON['message'];  // array
        $data         = $responseJSON['data'];     // array

        $this->assertEquals(true, $success);
        $this->assertEquals(200, $code);
        $this->assertCount(6, $data);
        $this->assertEquals(2, $data['tenant_id']);
        $this->assertEquals('/introCards/2.jpg', $data['intro_card']);
        $this->assertEquals(true, $data['active']);
        $this->assertEquals("Updated The Intro Card.", $message);
    }

    /**
     * Check Update Intro Card With Wrong ID For The Super Admin.
     *
     * @return void
     */
    public function testUpdateIntroCardWithWrongIdForTheSuperAdmin(): void
    {
        $token = $this->loginByEmail(self::SUPER_ADMIN[0], self::SUPER_ADMIN[1]);

        $file = UploadedFile::fake()->image('vblmkb.jpg', 1920, 1080)->size(5120);

        // Create data
        $data = [
            'intro_card' => $file,
        ];
        // Request
        $response = $this->put('api/v1/introCards/tenants/888888?token=' . $token, $data);

        // Check response status
        $response->assertStatus(460);

        $responseJSON = json_decode($response->getContent(), true);
        $success      = $responseJSON['success'];  // array
        $code         = $responseJSON['code'];     // array
        $message      = $responseJSON['message'];  // array

        $this->assertEquals(false, $success);
        $this->assertEquals(460, $code);
        $this->assertEquals('Wrong ID.', $message);
    }

    /**
     * Check Update Intro Card With Wrong Data For The Tenant Admin.
     *
     * @return void
     */
    public function testUpdateWrongDataForTheTenantAdmin(): void
    {
        $token = $this->loginByEmail(self::SUPER_ADMIN[0], self::SUPER_ADMIN[1]);

        $file = UploadedFile::fake()->image('vblmkb.jpg', 1900, 100)->size(6000);

        // Create data
        $data = [
            'intro_card' => $file,
        ];

        // Request
        $response = $this->withHeader('Accept', 'application/json')
            ->put('api/v1/introCards/tenants/2?token=' . $token, $data);

        // Check response status
        $response->assertStatus(422);

        // Check response structure
        $response->assertJsonStructure(
            [
                'message',
                'errors'
            ]
        );

        $responseJSON = json_decode($response->getContent(), true);
        $message      = $responseJSON['message'];    // array
        $errors       = $responseJSON['errors'];     // array

        $this->assertCount(1, $errors);
        $this->assertEquals("The given data was invalid.", $message);
    }


    /**
     * Check Update Intro Card By Authenticated User Without Required Role Tenant User
     *
     * @return void
     */
    public function testUpdateIntroCardByAuthenticatedUserWithoutRequiredRoleTenantUser(): void
    {
        $token = $this->loginByEmail(self::TENANT_USER_1[0], self::TENANT_USER_1[1]);

        $file = UploadedFile::fake()->image('vblmkb.jpg', 1920, 1080)->size(5120);

        // Create data
        $data = [
            'intro_card' => $file,
        ];

        // Request
        $response = $this->put('api/v1/introCards/tenants/1?token=' . $token, $data);

        // Check response status
        $response->assertStatus(403);

        $responseJSON = json_decode($response->getContent(), true);
        $success      = $responseJSON['success'];  // array
        $code         = $responseJSON['code'];     // array
        $message      = $responseJSON['message'];  // array

        $this->assertEquals(false, $success);
        $this->assertEquals(403, $code);
        $this->assertEquals('Permission is absent.', $message);
    }

    /**
     * Check Update Intro Card By Authenticated User Without Required Role Tenant Admin 2
     *
     * @return void
     */
    public function testUpdateIntroCardByAuthenticatedUserWithoutRequiredRoleTenantAdmin2(): void
    {
        $token = $this->loginByEmail(self::TENANT_ADMIN_1[0], self::TENANT_ADMIN_1[1]);

        $file = UploadedFile::fake()->image('vblmkb.jpg', 1920, 1080)->size(5120);

        // Create data
        $data = [
            'intro_card' => $file,
        ];

        // Request
        $response = $this->put('api/v1/introCards/tenants/1?token=' . $token, $data);

        // Check response status
        $response->assertStatus(403);

        $responseJSON = json_decode($response->getContent(), true);
        $success      = $responseJSON['success'];  // array
        $code         = $responseJSON['code'];     // array
        $message      = $responseJSON['message'];  // array

        $this->assertEquals(false, $success);
        $this->assertEquals(403, $code);
        $this->assertEquals('Permission is absent.', $message);
    }

    /**
     * Check Update Intro Card For Guest
     *
     * @return void
     */
    public function testUpdateIntroCardForGuest(): void
    {
         $file = UploadedFile::fake()->image('vblmkb.jpg', 1920, 1080)->size(5120);

        // Create data
        $data = [
            'intro_card' => $file,
        ];

        // Request
        $response = $this->put('api/v1/introCards/tenants/1', $data);

        // Check response status
        $response->assertStatus(401);
    }

    /**
     * Check Delete Intro Card For Super Admin
     *
     * @return void
     */
    public function testDeleteIntroCardForSuperAdmin(): void
    {
        $token = $this->loginByEmail(self::SUPER_ADMIN[0], self::SUPER_ADMIN[1]);

        $file = UploadedFile::fake()->image('vblmkb.jpg', 1920, 1080)->size(5120);

        // Create data
        $data = [
            'intro_card' => $file,
        ];

        $this->put('api/v1/introCards/tenants/2?token=' . $token, $data);

        // Request
        $response = $this->delete('api/v1/introCards/tenants/2?token=' . $token);

        // Check response status
        $response->assertStatus(200);

        // Check response structure
        $response->assertJsonStructure(
            [
                'success',
                'code',
                'data',
                'message'
            ]
        );
        $responseJSON = json_decode($response->getContent(), true);
        $success      = $responseJSON['success'];  // array
        $code         = $responseJSON['code'];     // array
        $message      = $responseJSON['message'];  // array
        $data         = $responseJSON['data'];     // array

        $this->assertEquals(true, $success);
        $this->assertEquals(200, $code);
        $this->assertEquals(null, $data);
        $this->assertEquals("Deleted The Intro Card.", $message);

        $removedIntroCard = IntroCard::where('tenant_id', 2)->first();
        $this->assertEquals(null, $removedIntroCard->intro_card);
    }

    /**
     * Check Delete Intro Card For Tenant Admin
     *
     * @return void
     */
    public function testDeleteIntroCardForTenantAdmin(): void
    {
        $token = $this->loginByEmail(self::TENANT_ADMIN_1[0], self::TENANT_ADMIN_1[1]);

        // Request
        $response = $this->delete('api/v1/introCards/tenants/2?token=' . $token);

        // Check response status
        $response->assertStatus(200);

        // Check response structure
        $response->assertJsonStructure(
            [
                'success',
                'code',
                'data',
                'message'
            ]
        );
        $responseJSON = json_decode($response->getContent(), true);
        $success      = $responseJSON['success'];  // array
        $code         = $responseJSON['code'];     // array
        $message      = $responseJSON['message'];  // array
        $data         = $responseJSON['data'];     // array

        $this->assertEquals(true, $success);
        $this->assertEquals(200, $code);
        $this->assertEquals(null, $data);
        $this->assertEquals("Deleted The Intro Card.", $message);

        $removedIntroCard = IntroCard::where('tenant_id', 2)->first();
        $this->assertEquals(null, $removedIntroCard->intro_card);
    }

    /**
     *  Alien Tenant Admin tries to delete
     *
     * @return void
     */
    public function testDeleteAlienTenantAdminTriesToDeleteIntroCard(): void
    {
        $token = $this->loginByEmail(self::TENANT_ADMIN_2[0], self::TENANT_ADMIN_2[1]);

        // Request
        $response = $this->delete('api/v1/introCards/tenants/1?token=' . $token);

        // Check response status
        $response->assertStatus(403);

        $responseJSON = json_decode($response->getContent(), true);
        $success      = $responseJSON['success'];  // array
        $code         = $responseJSON['code'];     // array
        $message      = $responseJSON['message'];  // array

        $this->assertEquals(false, $success);
        $this->assertEquals(403, $code);
        $this->assertEquals("Permission is absent.", $message);
    }

    /**
     * Check Delete Intro Card With Wrong ID For Super Admin
     *
     * @return void
     */
    public function testDeleteIntroCardWithWrongIdForSuperAdmin(): void
    {
        $token = $this->loginByEmail(self::SUPER_ADMIN[0], self::SUPER_ADMIN[1]);

        // Request
        $response = $this->delete('api/v1/introCards/tenants/555555?token=' . $token);

        // Check response status
        $response->assertStatus(460);

        $responseJSON = json_decode($response->getContent(), true);
        $success      = $responseJSON['success'];  // array
        $code         = $responseJSON['code'];     // array
        $message      = $responseJSON['message'];  // array
        $data         = $responseJSON['data'];     // array

        $this->assertEquals(false, $success);
        $this->assertEquals(460, $code);
        $this->assertEquals(null, $data);
        $this->assertEquals("Wrong ID.", $message);
    }

    /**
     * Check Delete Intro Card By Guest
     *
     * @return void
     */
    public function testDeleteIntroCardByGuest(): void
    {
        // Request
        $response = $this->delete('api/v1/introCards/tenants/3');

        // Check response status
        $response->assertStatus(401);
    }

    /**
     * Check Specific Intro Card for Super Admin
     *
     * @return void
     */
    public function testShowSpecificIntroCardForSuperAdmin(): void
    {
        // Login via tenant-admin
        $token = $this->loginByEmail(self::SUPER_ADMIN[0], self::SUPER_ADMIN[1]);

        // Request
        $response = $this->get('api/v1/introCards/tenants/3?token=' . $token);

        // Check response status
        $response->assertStatus(200);

        // Check response structure
        $response->assertJsonStructure(
            [
                'success',
                'code',
                'data' =>
                    [
                        "tenant_id",
                        "intro_card",
                        "active",
                        "updated_at",
                        "created_at",
                        "id",
                    ],
                'message'
            ]
        );
        $responseJSON = json_decode($response->getContent(), true);
        $success      = $responseJSON['success'];  // array
        $code         = $responseJSON['code'];     // array
        $message      = $responseJSON['message'];  // array
        $data         = $responseJSON['data'];     // array

        $this->assertEquals(true, $success);
        $this->assertEquals(200, $code);
        $this->assertCount(6, $data);
        $this->assertEquals(3, $data['id']);
        $this->assertEquals(3, $data['tenant_id']);
        $this->assertEquals('/introCards/test3.mp4', $data['intro_card']);
        $this->assertEquals(true, $data['active']);
        $this->assertEquals("Got specific Intro Card.", $message);
    }

    /**
     * Check Specific Intro Card for Tenant Admin
     *
     * @return void
     */
    public function testShowSpecificIntroCardForTenantAdmin(): void
    {
        // Login via tenant-admin
        $token = $this->loginByEmail(self::TENANT_ADMIN_2[0], self::TENANT_ADMIN_2[1]);

        // Request
        $response = $this->get('api/v1/introCards/tenants/3?token=' . $token);

        // Check response status
        $response->assertStatus(200);

        // Check response structure
        $response->assertJsonStructure(
            [
                'success',
                'code',
                'data' =>
                    [
                        "tenant_id",
                        "intro_card",
                        "active",
                        "updated_at",
                        "created_at",
                        "id",
                    ],
                'message'
            ]
        );
        $responseJSON = json_decode($response->getContent(), true);
        $success      = $responseJSON['success'];  // array
        $code         = $responseJSON['code'];     // array
        $message      = $responseJSON['message'];  // array
        $data         = $responseJSON['data'];     // array

        $this->assertEquals(true, $success);
        $this->assertEquals(200, $code);
        $this->assertCount(6, $data);
        $this->assertEquals(3, $data['id']);
        $this->assertEquals(3, $data['tenant_id']);
        $this->assertEquals('/introCards/test3.mp4', $data['intro_card']);
        $this->assertEquals(true, $data['active']);
        $this->assertEquals("Got specific Intro Card.", $message);
    }

    /**
     * Check Intro Cards for Guest
     *
     * @return void
     */
    public function testShowSpecificIntroCardsForGuest(): void
    {
        // Request
        $response = $this->get('api/v1/introCards/tenants/1');

        // Check response status
        $response->assertStatus(401);
    }

    /**
     * Check Specific Intro Cards With Wrong ID
     *
     * @return void
     */
    public function testShowSpecificIntroCardsWithWrongIdForSuperAdmin(): void
    {
        // Login via tenant-admin
        $token = $this->loginByEmail(self::SUPER_ADMIN[0], self::SUPER_ADMIN[1]);

        // Request
        $response = $this->get('api/v1/introCards/tenants/1111111?token=' . $token);

        // Check response status
        $response->assertStatus(460);

        $responseJSON = json_decode($response->getContent(), true);
        $success      = $responseJSON['success'];  // array
        $code         = $responseJSON['code'];     // array
        $message      = $responseJSON['message'];  // array

        $this->assertEquals(false, $success);
        $this->assertEquals(460, $code);
        $this->assertEquals('Wrong ID.', $message);
    }

    /**
     * Check activate method by super admin
     *
     * @return void
     */
    public function testActivateBySuperAdmin(): void
    {
        // Login via super-admin
        $token = $this->loginByEmail(self::SUPER_ADMIN[0], self::SUPER_ADMIN[1]);

        // Request
        $response = $this->put('api/v1/introCards/activate/3?token=' . $token);

        // Check response status
        $response->assertStatus(200);

        // Check response structure
        $response->assertJsonStructure(
            [
                'success',
                'code',
                'data' =>
                    [
                        "tenant_id",
                        "intro_card",
                        "active",
                        "updated_at",
                        "created_at",
                        "id",
                    ],
                'message'
            ]
        );
        $responseJSON = json_decode($response->getContent(), true);
        $success      = $responseJSON['success'];  // array
        $code         = $responseJSON['code'];     // array
        $message      = $responseJSON['message'];  // array
        $data         = $responseJSON['data'];     // array

        $this->assertEquals(true, $success);
        $this->assertEquals(200, $code);
        $this->assertCount(6, $data);
        $this->assertEquals(3, $data['id']);
        $this->assertEquals(3, $data['tenant_id']);
        $this->assertEquals('introCards/test3.mp4', $data['intro_card']);
        $this->assertEquals(false, $data['active']);
        $this->assertEquals('Status "active" was changed.', $message);
    }

    /**
     * Check activate method by super admin With Wrong ID
     *
     * @return void
     */
    public function testActivateBySuperAdminWithWrongId(): void
    {
        // Login via tenant-admin
        $token = $this->loginByEmail(self::SUPER_ADMIN[0], self::SUPER_ADMIN[1]);

        // Request
        $response = $this->put('api/v1/introCards/activate/1111111?token=' . $token);

        // Check response status
        $response->assertStatus(460);

        $responseJSON = json_decode($response->getContent(), true);
        $success      = $responseJSON['success'];  // array
        $code         = $responseJSON['code'];     // array
        $message      = $responseJSON['message'];  // array

        $this->assertEquals(false, $success);
        $this->assertEquals(460, $code);
        $this->assertEquals('Wrong ID.', $message);
    }

    /**
     * Check activate method by Tenant Admin
     *
     * @return void
     */
    public function testActivateByTenantAdmin(): void
    {
        // Login via tenant-admin
        $token = $this->loginByEmail(self::TENANT_ADMIN_2[0], self::TENANT_ADMIN_2[1]);

        // Request
        $response = $this->put('api/v1/introCards/activate/3?token=' . $token);

        // Check response status
        $response->assertStatus(403);

        $responseJSON = json_decode($response->getContent(), true);
        $success      = $responseJSON['success'];  // array
        $code         = $responseJSON['code'];     // array
        $message      = $responseJSON['message'];  // array

        $this->assertEquals(false, $success);
        $this->assertEquals(403, $code);
        $this->assertEquals('Permission is absent', $message);
    }

    /**
     * Check activate method for guest
     *
     * @return void
     */
    public function testActivateForGuest(): void
    {
        // Request
        $response = $this->put('api/v1/introCards/activate/1');

        // Check response status
        $response->assertStatus(401);
    }
}
