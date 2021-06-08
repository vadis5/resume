<?php
/**
 * Widget Simple Question Test Coverage
 */

namespace Tests\Functional\API\V1\Cms;

use Database\Seeders;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;
use App\Traits\TestResponseJsonTrait;

class WidgetSimpleQuestionControllerTest extends TestCase
{
    use DatabaseMigrations;
    use TestResponseJsonTrait;

    /**
     * @const array
     */
    private const SUPER_ADMIN = ['super-admin@admin.com', 'Super Admin'];

    /**
     * @const array
     */
    private const TENANT_ADMIN = ['tenant-1-admin@admin.com', 'Tenant Admin'];


    /**
     * @const array
     */
    private const STRUCTURE = [
        'success',
        'code',
        'data' =>
            [
                [
                    "id",
                    "questions",
                    "multi_answer",
                    "button_text",
                    "created_at",
                    "updated_at"
                ]
            ],
        'message'
    ];

    /**
     * @const array
     */
    private const STRUCTURE_SINGLE = [
        'success',
        'code',
        'data' =>
            [
                "id",
                "questions",
                "multi_answer",
                "button_text",
                "created_at",
                "updated_at"
            ],
        'message'
    ];

    /**
     * @const array
     */
    private const STRUCTURE_SIMPLE = [
        'success',
        'code',
        'data',
        'message'
    ];

    /**
     * @const array
     */
    private const STORE_DATA = [
        'questions'    => '{
                "sets":
                    [
                        {
                            "order": 1,
                            "question": "Question 1. Text.",
                            "answers":
                                [
                                    {"order": 1, "answer": "Answer 1. Text."},
                                    {"order": 2, "answer": "Answer 2. Text."},
                                    {"order": 3, "answer": "Answer 3. Text."}
                                ]
                         }
                    ]
            }',
        'multi_answer' => 1,
        'button_text'  => 'Next'
    ];

    /**
     * @const array
     */
    private const STORE_DATA_INVALID = [
        'questions'    => 'foo',
        'multi_answer' => 'bar',
        'button_text'  => 'Next'
    ];

    /**
     * @const array
     */
    private const UPDATE_DATA = [
        'questions'    => '{
                "sets":
                    [
                        {
                            "order": 1,
                            "question": "Question 1. Nwe Text.",
                            "answers":
                                [
                                    {"order": 1, "answer": "New Answer 1. Text."}
                                ]
                         }
                    ]
            }',
        'multi_answer' => 0,
        'button_text'  => 'New Button Text'
    ];

    /**
     * @const array
     */
    private const UPDATE_DATA_INVALID = [
        'questions'    => null,
        'multi_answer' => 100500,
        'button_text'  => false
    ];

    /**
     * @const array
     */
    public function setUp(): void
    {
        parent::setUp();
        $this->seed(Seeders\TestWidgetSimpleQuestionSeeder::class);
    }

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    /**
     * Check seeder.
     *
     * @return void
     */
    public function testSeeder()
    {
        $users = DB::table('users')->get();
        $user = DB::table('users')->where('id', 1)->first();
        $this->assertEquals('super-admin@admin.com', $user->email);
    }

    /**
     * ******************************************************************
     * BEGIN testing index
     * ******************************************************************
     */

    /**
     * Test index for role 'super-admin'
     * @return void
     */
    public function testIndexForSuperAdmin(): void
    {
        // Get token
        $token = $this->loginByEmail(self::SUPER_ADMIN[0], self::SUPER_ADMIN[1]);

        // Request
        $response = $this->get('api/cms/v1/widgetSimpleQuestion?token=' . $token);

        // Check response status
        $response->assertStatus(200);

        // Check response structure
        $response->assertJsonStructure(self::STRUCTURE);
        $resp = $this->responseParsed($response);

        $this->assertEquals(true, $resp['success']);
        $this->assertEquals(200, $resp['code']);

        // Check response structure
        $response->assertJsonStructure(self::STRUCTURE);
        $responseJSON = json_decode($response->getContent(), true);
        $success = $responseJSON['success'];
        $code = $responseJSON['code'];
        $message = $responseJSON['message'];
        $data = $responseJSON['data'];

        $this->assertEquals(true, $success);
        $this->assertEquals(200, $code);
        $this->assertEquals(1, $data[0]['id']);
    }


    /**
     * Test index-empty for role 'super-admin'
     *
     * @return void
     */
    public function testIndexEmptyResultForSuperAdmin()
    {
        // Get token
        $token = $this->loginByEmail(self::SUPER_ADMIN[0], self::SUPER_ADMIN[1]);

        $this->delete('api/cms/v1/widgetSimpleQuestion/4?token=' . $token);
        $this->delete('api/cms/v1/widgetSimpleQuestion/3?token=' . $token);
        $this->delete('api/cms/v1/widgetSimpleQuestion/2?token=' . $token);
        $this->delete('api/cms/v1/widgetSimpleQuestion/1?token=' . $token);

        // Request
        $response = $this->get('api/cms/v1/widgetSimpleQuestion?token=' . $token);

        // Check response status
        $response->assertStatus(204);
    }

    /**
     * Check Index for Tenant Admin
     *
     * @return void
     */
    public function testIndexForTenantAdmin()
    {

        // Get token
        $token = $this->loginByEmail(
            self::TENANT_ADMIN[0],
            self::TENANT_ADMIN[1]
        );

        // Request
        $response = $this->get('api/cms/v1/widgetSimpleQuestion?token=' . $token);

        // Check response status
        $response->assertStatus(403);

        $resp = $this->responseParsed($response);

        $this->assertEquals(false, $resp['success']);
        $this->assertEquals(403, $resp['code']);
        $this->assertEquals("Permission is absent", $resp['message']);
    }

    /**
     * Check Index for Guest
     *
     * @return void
     */
    public function testIndexForGuest()
    {
        // Request
        $response = $this->get('api/cms/v1/widgetSimpleQuestion');

        // Check response status
        $response->assertStatus(401);
    }

    /**
     * ******************************************************************
     * BEGIN testing create
     * ******************************************************************
     */

    /**
     * Test create for role 'super-admin'
     *
     * @return void
     */
    public function testCreateForSuperAdmin()
    {
        // Get token
        $token = $this->loginByEmail(
            self::SUPER_ADMIN[0],
            self::SUPER_ADMIN[1]
        );

        $data = self::STORE_DATA;

        $response = $this->post('api/cms/v1/widgetSimpleQuestion?token=' . $token, $data);

        // Check response status
        $response->assertStatus(200);

        // Check response structure
        $response->assertJsonStructure(self::STRUCTURE_SINGLE);
        $responseJSON = json_decode($response->getContent(), true);
        $success = $responseJSON['success'];
        $code = $responseJSON['code'];
        $message = $responseJSON['message'];
        $data = $responseJSON['data'];

        $this->assertEquals(true, $success);
        $this->assertEquals(200, $code);
        $this->assertEquals('Created new Question', $message);
        $this->assertEquals(1, $data['multi_answer']);
    }

    /**
     * Test create for role 'super-admin' with wrong data
     * @return void
     */
    public function testCreateWrongDataForSuperAdmin()
    {
        // Get token
        $token = $this->loginByEmail(
            self::SUPER_ADMIN[0],
            self::SUPER_ADMIN[1]
        );

        $data = self::STORE_DATA_INVALID;

        $response = $this->post('api/cms/v1/widgetSimpleQuestion?token=' . $token, $data);

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
        $message = $responseJSON['message'];
        $errors = $responseJSON['errors'];

        $this->assertCount(2, $errors);
        $this->assertEquals("The given data was invalid.", $message);
    }

    /**
     * Test create for role 'tenant-admin'
     * @return void
     */
    public function testCreateForTenantAdmin()
    {
        // Get token
        $token = $this->loginByEmail(
            self::TENANT_ADMIN[0],
            self::TENANT_ADMIN[1]
        );

        $data = self::STORE_DATA;

        $response = $this->post('api/cms/v1/widgetSimpleQuestion?token=' . $token, $data);

        // Check response status
        $response->assertStatus(403);

        $responseJSON = json_decode($response->getContent(), true);
        $success = $responseJSON['success'];
        $code = $responseJSON['code'];
        $message = $responseJSON['message'];

        $this->assertEquals(false, $success);
        $this->assertEquals(403, $code);
        $this->assertEquals('Permission is absent', $message);
    }

    /**
     * Test create for guest
     *
     * @return void
     */
    public function testCreateForGuest()
    {

        $data = self::STORE_DATA;

        $response = $this->post('api/cms/v1/widgetSimpleQuestion', $data);

        // Check response status
        $response->assertStatus(401);
    }

    /**
     * ******************************************************************
     * BEGIN testing Edit
     * ******************************************************************
     */

    /**
     * Test update for role 'super-admin'
     *
     * @return void
     */
    public function testUpdateForSuperAdmin(): void
    {
        // Get token
        $token = $this->loginByEmail(
            self::SUPER_ADMIN[0],
            self::SUPER_ADMIN[1]
        );

        $response = $this->put('api/cms/v1/widgetSimpleQuestion/1?token=' . $token, self::UPDATE_DATA);

        // Check response status
        $response->assertStatus(200);

        // Check response structure
        $response->assertJsonStructure(self::STRUCTURE_SINGLE);
        $resp = $this->responseParsed($response);

        $this->assertEquals(true, $resp['success']);
        $this->assertEquals(200, $resp['code']);
        $this->assertEquals("Updated The Question.", $resp['message']);
        $this->assertEquals('New Button Text', $resp['data']['button_text']);
    }

    /**
     * Test update for role 'super-admin' with wrong data
     *
     * @return void
     */
    public function testUpdateWrongDataForSuperAdmin(): void
    {
        // Get token
        $token = $this->loginByEmail(
            self::SUPER_ADMIN[0],
            self::SUPER_ADMIN[1]
        );

        $response = $this->put('api/cms/v1/widgetSimpleQuestion/1?token=' . $token, self::UPDATE_DATA_INVALID);

        // Check response structure
        $response->assertJsonStructure(
            [
                'message',
                'errors'
            ]
        );

        $responseJSON = json_decode($response->getContent(), true);
        $message = $responseJSON['message'];
        $errors = $responseJSON['errors'];

        $this->assertCount(3, $errors);
        $this->assertEquals("The given data was invalid.", $message);
    }

    /**
     * Test update with wrong id for role 'super-admin'
     * @return void
     */
    public function testUpdateWithWrongIdForSuperAdmin(): void
    {
        // Get token
        $token = $this->loginByEmail(
            self::SUPER_ADMIN[0],
            self::SUPER_ADMIN[1]
        );


        $response = $this->put('api/cms/v1/widgetSimpleQuestion/99999999?token=' . $token, self::UPDATE_DATA);

        // Check response status
        $response->assertStatus(404);

        $responseJSON = json_decode($response->getContent(), true);
        $success = $responseJSON['success'];
        $code = $responseJSON['code'];
        $message = $responseJSON['message'];

        $this->assertEquals(false, $success);
        $this->assertEquals(404, $code);
        $this->assertEquals('Not found', $message);
    }

    /**
     * Test update for role 'tenant-admin'
     *
     * @return void
     */
    public function testUpdateForTenantAdmin(): void
    {
        // Get token
        $token = $this->loginByEmail(
            self::TENANT_ADMIN[0],
            self::TENANT_ADMIN[1]
        );

        $response = $this->put('api/cms/v1/widgetSimpleQuestion/1token=' . $token, self::UPDATE_DATA);

        // Check response status
        $response->assertStatus(403);

        $responseJSON = json_decode($response->getContent(), true);
        $success = $responseJSON['success'];
        $code = $responseJSON['code'];
        $message = $responseJSON['message'];

        $this->assertEquals(false, $success);
        $this->assertEquals(403, $code);
        $this->assertEquals('Permission is absent', $message);

    }

    /**
     * Test update for guest
     *
     * @return void
     */
    public function testUpdateForGuest(): void
    {
        $response = $this->put('api/cms/v1/widgetSimpleQuestion/1?token', self::UPDATE_DATA);

        // Check response status
        $response->assertStatus(401);
    }


    /**
     * ******************************************************************
     * BEGIN testing read
     * ******************************************************************
     */

    /**
     * Test read item for role 'super-admin'
     * @return void
     */
    public function testReadForSuperAdmin()
    {
        // Get token
        $token = $this->loginByEmail(
            self::SUPER_ADMIN[0],
            self::SUPER_ADMIN[1]
        );

        $response = $this->get('api/cms/v1/widgetSimpleQuestion/1?token=' . $token);

        // Check response status
        $response->assertStatus(200);

        // Check response structure
        $response->assertJsonStructure(self::STRUCTURE_SINGLE);
        $responseJSON = json_decode($response->getContent(), true);
        $success = $responseJSON['success'];
        $code = $responseJSON['code'];
        $message = $responseJSON['message'];
        $data = $responseJSON['data'];

        $this->assertEquals(true, $success);
        $this->assertEquals(200, $code);
        $this->assertCount(8, $data);
        $this->assertEquals('Next', $data['button_text']);
        $this->assertEquals("Got Specific Question", $message);
    }

    /**
     * Test read item for role 'super-admin' with wrong id
     *
     * @return void
     */
    public function testReadWithWrongIdForSuperAdmin()
    {
        // Get token
        $token = $this->loginByEmail(
            self::SUPER_ADMIN[0],
            self::SUPER_ADMIN[1]
        );

        $response = $this->get('api/cms/v1/widgetSimpleQuestion/999999?token=' . $token);

        // Check response status
        $response->assertStatus(404);


        $responseJSON = json_decode($response->getContent(), true);
        $success = $responseJSON['success'];
        $code = $responseJSON['code'];
        $message = $responseJSON['message'];

        $this->assertEquals(false, $success);
        $this->assertEquals(404, $code);
        $this->assertEquals('Not found', $message);
    }


    /**
     * Test read item for Tenant Admin
     *
     * @return void
     */
    public function testReadForTenantAdmin()
    {
        // Get token
        $token = $this->loginByEmail(
            self::TENANT_ADMIN[0],
            self::TENANT_ADMIN[1]
        );

        $response = $this->get('api/cms/v1/widgetSimpleQuestion/1?token=' . $token);

        // Check response status
        $response->assertStatus(403);

        $resp = $this->responseParsed($response);
        $this->assertEquals(false, $resp['success']);
        $this->assertEquals(403, $resp['code']);
        $this->assertEquals("Permission is absent", $resp['message']);

    }

    /**
     * Test read item for guest
     * @return void
     */
    public function testReadForGuest()
    {
        // Response
        $response = $this->get('api/cms/v1/widgetSimpleQuestion/1');

        // Check response status
        $response->assertStatus(401);
    }


    /**
     * ******************************************************************
     * BEGIN testing delete
     * ******************************************************************
     */


    /**
     * Test delete item for role 'super-admin'
     *
     * @return void
     */
    public function testDeleteForSuperAdmin()
    {
        // Get token
        $token = $this->loginByEmail(self::SUPER_ADMIN[0], self::SUPER_ADMIN[1]);

        // Request
        $response = $this->delete('api/cms/v1/widgetSimpleQuestion/1?token=' . $token);

        // Check response status
        $response->assertStatus(200);

        // Check response structure
        $response->assertJsonStructure(self::STRUCTURE_SIMPLE);

        $resp = $this->responseParsed($response);
        $this->assertEquals(true, $resp['success']);
        $this->assertEquals(200, $resp['code']);
        $this->assertEquals("Deleted The Question.", $resp['message']);
        $this->assertEquals(null, $resp['data']);
    }

    /**
     * Test delete item for role 'tenant-admin'
     *
     * @return void
     */
    public function testDeleteForTenantAdmin()
    {
        // Get token
        $token = $this->loginByEmail(self::TENANT_ADMIN[0], self::TENANT_ADMIN[1]);

        // Request
        $response = $this->delete('api/cms/v1/widgetSimpleQuestion/1?token=' . $token);

        // Check response status
        $response->assertStatus(403);

        $responseJSON = json_decode($response->getContent(), true);
        $success = $responseJSON['success'];
        $code = $responseJSON['code'];
        $message = $responseJSON['message'];

        $this->assertEquals(false, $success);
        $this->assertEquals(403, $code);
        $this->assertEquals("Permission is absent", $message);
    }

    /**
     * Test delete item for role 'super-admin' with wrong id
     *
     * @return void
     */
    public function testDeleteWithWrongIdForSuperAdmin()
    {
        // Get token
        $token = $this->loginByEmail(self::SUPER_ADMIN[0], self::SUPER_ADMIN[1]);

        // Request
        $response = $this->delete('api/cms/v1/widgetSimpleQuestion/99999?token=' . $token);

        // Check response status
        $response->assertStatus(404);

        $responseJSON = json_decode($response->getContent(), true);
        $success = $responseJSON['success'];
        $code = $responseJSON['code'];
        $message = $responseJSON['message'];

        $this->assertEquals(false, $success);
        $this->assertEquals(404, $code);
        $this->assertEquals("Not found", $message);
    }

    /**
     * Test delete item for role 'tenant-admin'
     *
     * @return void
     */
    public function testDeleteForGuest()
    {
        // Request
        $response = $this->delete('api/cms/v1/widgetSimpleQuestion/2?token=');

        // Check response status
        $response->assertStatus(401);
    }

}
