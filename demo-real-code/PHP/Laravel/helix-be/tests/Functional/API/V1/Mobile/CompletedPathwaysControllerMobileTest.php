<?php

namespace Tests\Functional\API\V1\Mobile;

use App\Traits\TestResponseJsonTrait;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class CompletedPathwaysControllerMobileTest extends TestCase
{
    use DatabaseMigrations;
    use TestResponseJsonTrait;

    private const PAGING = 10;
    private const DEVELOPER = ['developer@admin.com', 'Developer'];
    private const SUPER_ADMIN = [
        'happence-super-admin@admin.com',
        'Happence Super Admin'
    ];
    private const TENANT_ADMIN_1 = [
        'tenant-1-admin@admin.com',
        'Tenant Admin'
    ];

    // User ID = 7
    private const TENANT_USER = [
        'tenant-2-root-dep-1-user-1@admin.com',
        'Tenant-2 Root-Dep-1 User-1'
    ];

    // User ID = 6
    private const TENANT_USER_6 = [
        'tenant-1-dep-2-child-2-user-1@admin.com',
        'Tenant-1 Dep-2 Child-2 User-1'
    ];
    private const STRUCTURE_SINGLE = [
        'success',
        'code',
        'data' =>
            [
                "id",
                "type_id",
                "modules" => [
                    [
                        "id",
                        "name",
                        "order",
                        "widget_type_id",
                        "specific_id",
                        "previous_id",
                        "created_at",
                        "updated_at"
                    ]
                ],
                "created_at",
                "updated_at"
            ],
        'message'
    ];

    private const STRUCTURE_MODULE = [
        'success',
        'code',
        'data' =>
            [
                "id",
                "name",
                "order",
                "widget_type_id",
                "specific_id",
                "previous_id",
                "widget_included" =>
                    [
                        "id",
                        "widget_type_id",
                        "button_text",
                        "settings_id",
                        "created_at",
                        "updated_at"
                    ],
                "widget_settings" => [],
                "created_at",
                "updated_at"
            ],
        'message'
    ];

    private const STRUCTURE_SIMPLE = [
        'success',
        'code',
        'data',
        'message'
    ];

    private const STRUCTURE_SIMPLEST = [
        'success',
        'code',
        'message'
    ];

    private const STRUCTURE_PAGING = [
        'success',
        'code',
        'data' =>
            [
                'current_page',
                'data' =>
                    [
                        [
                            'status',
                            'id',
                            'name',
                            'department_id',
                            'sequence_id',
                            'author',
                            'thumb',
                            'description',
                            'likes',
                            'length_unit',
                            'length',
                            'offline',
                            'mood_tracker',
                            'feedback',
                            'created_at',
                            'updated_at'
                        ]
                    ],
                'first_page_url',
                'from',
                'last_page',
                'last_page',
                'last_page_url',
                'links',
                'next_page_url',
                'path',
                'per_page',
                'prev_page_url',
                'to',
                'total'
            ],
        'message'
    ];

    public function setUp(): void
    {
        parent::setUp(); // TODO: Change the autogenerated stub

        $this->artisan('db:seed --class=TestsCompletedSeeder');
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
        $types = DB::table('sequence_types')->where('id', 1)->first();
        $this->assertEquals('course', $types->name);

        $modules = DB::table('widget_simple_questions')->get();
        $answers = json_decode($modules[0]->questions)->sets[0]->answers;
        $this->assertEquals('Answer 2. Text.', $answers[1]->answer);

        $modules  = DB::table('widget_free_text_questions')->get();
        $question = json_decode($modules[0]->questions)->sets[0]->question;
        $this->assertEquals('Question Free Text 1. Text.', $question);

        $modules  = DB::table('widget_slider_questions')->get();
        $question = json_decode($modules[0]->questions)->sets[0]->question;
        $this->assertEquals('Question Slider 1. Text.', $question);

        $modules = DB::table('widget_media_questions')->get();
        $media   = json_decode($modules[3]->questions)->sets[1]->media;
        $this->assertEquals('modules/media_question/19-343x219.png', $media);

        $modules = DB::table('widget_media_answer_questions')->get();
        $media   = json_decode($modules[1]->questions)->sets[1]->answers[1]->media;
        $this->assertEquals('modules/media_question/837-343x219.png', $media);

        $modules = DB::table('widget_articles')->get();
        $body    = $modules[0]->body;
        $this->assertEquals('Simple row text.', $body);

        $modules = DB::table('widget_link_externals')->get();
        $body    = $modules[0]->body;
        $this->assertEquals('Link body text', $body);

        $modules = DB::table('widget_link_internals')->get();
        $cta     = $modules[0]->cta;
        $this->assertEquals('Visit Home', $cta);

        $modules = DB::table('widget_onboardings')->get();
        $file    = $modules[3]->file;
        $this->assertEquals(null, $file);

        $modules = DB::table('module_sequences')->get();
        $this->assertCount(17, $modules);

        $modules = DB::table('completed')->get();
        $this->assertCount(6, $modules);
    }

    /**
     * Check seeder.
     *
     * @return void
     */
//    public function testSeeder2()
//    {
//        $users = DB::table('users')->get();
//
//        dd($users);
//    }

    /**
     * Check count For Tenant User
     *
     * @return void
     */
    public function testCountForTenantUser()
    {
        $token = $this->loginByEmail(
            self::TENANT_USER[0],
            self::TENANT_USER[1]
        );

        // Request
        $response = $this
            ->get(
                'api/mobile/v1/completed/pathways/count?token=' . $token
            );

        // Check response status
        $response->assertStatus(200);

        // Check response structure
        $response->assertJsonStructure(self::STRUCTURE_SIMPLE);

        $resp = $this->responseParsed($response);

        $this->assertEquals(true, $resp['success']);
        $this->assertEquals(200, $resp['code']);
        $this->assertEquals(3, $resp['data']);
        $this->assertEquals("Number of Completed Pathways.", $resp['message']);
    }

    /**
     * Check count Empty For Tenant User
     *
     * @return void
     */
    public function testCountEmptyForTenantUser()
    {
        $token = $this->loginByEmail(
            self::TENANT_USER_6[0],
            self::TENANT_USER_6[1]
        );

        $response = $this
            ->get(
                'api/mobile/v1/completed/pathways/count?token=' . $token
            );

        $response->assertStatus(204);
    }

    /**
     * Check Count For Tenant Admin
     * code 403
     *
     * @return void
     */
    public function testCountForTenantAdmin()
    {
        $token = $this->loginByEmail(
            self::TENANT_ADMIN_1[0],
            self::TENANT_ADMIN_1[1]
        );

        // Request
        $response = $this
            ->get(
                'api/mobile/v1/completed/pathways/count?token=' . $token
            );

        // Check response status
        $response->assertStatus(403);
    }

    /**
     * Check Count For Guest
     *
     * @return void
     */
    public function testCountForGuest()
    {
        // Request
        $response = $this
            ->get(
                'api/mobile/v1/completed/pathways/count'
            );

        // Check response status
        $response->assertStatus(401);
    }

    /**
     * Check complete For Tenant User
     *
     * @return void
     */
    public function testCompleteForTenantUser()
    {
        $token = $this->loginByEmail(
            self::TENANT_USER[0],
            self::TENANT_USER[1]
        );

        // Request
        $response = $this
            ->put(
                'api/mobile/v1/completed/pathways/1?token=' . $token
            );

        // Check response status
        $response->assertStatus(200);

        // Check response structure
        $response->assertJsonStructure(self::STRUCTURE_SIMPLE);

        $resp = $this->responseParsed($response);

        $this->assertEquals(true, $resp['success']);
        $this->assertEquals(200, $resp['code']);

        $rows = DB::table('completed')->get();
        $count = $rows->count();
        $this->assertEquals(7, $rows[$count-1]->user_id);
        $this->assertEquals(1, $rows[$count-1]->completedable_id);
        $this->assertEquals("App\Models\Course", $rows[$count-1]->completedable_type);
        $this->assertEquals("The Pathway is completed", $resp['message']);
    }

    /**
     * Check complete the wrong Pathway For Tenant User
     *
     * @return void
     */
    public function testCompleteTheWrongPathwayForTenantUser()
    {
        $token = $this->loginByEmail(
            self::TENANT_USER[0],
            self::TENANT_USER[1]
        );

        // Request
        $response = $this
            ->put(
                'api/mobile/v1/completed/pathways/99999?token=' . $token
            );

        // Check response status
        $response->assertStatus(404);

        // Check response structure
        $response->assertJsonStructure(self::STRUCTURE_SIMPLEST);

        $resp = $this->responseParsed($response);

        $this->assertEquals(false, $resp['success']);
        $this->assertEquals(404, $resp['code']);
        $this->assertEquals("Not found", $resp['message']);
    }

    /**
     * Check complete For Tenant Admin
     * Code 403
     *
     * @return void
     */
    public function testCompleteForTenantAdmin()
    {
        $token = $this->loginByEmail(
            self::TENANT_ADMIN_1[0],
            self::TENANT_ADMIN_1[1]
        );

        // Request
        $response = $this
            ->put(
                'api/mobile/v1/completed/pathways/1?token=' . $token
            );

        // Check response status
        $response->assertStatus(403);

        // Check response structure
        $response->assertJsonStructure(self::STRUCTURE_SIMPLEST);

        $resp = $this->responseParsed($response);

        $this->assertEquals(false, $resp['success']);
        $this->assertEquals(403, $resp['code']);
        $this->assertEquals("Permission is absent.", $resp['message']);
    }

    /**
     * Check Complete For Guest
     *
     * @return void
     */
    public function testCompleteForGuest()
    {
        // Request
        $response = $this
            ->put(
                'api/mobile/v1/completed/pathways/1'
            );

        // Check response status
        $response->assertStatus(401);
    }

    /**
     * Check index With Pagination For Tenant User
     *
     * @return void
     */
    public function testIndexWithPaginationForTenantUser()
    {
        $token = $this->loginByEmail(
            self::TENANT_USER[0],
            self::TENANT_USER[1]
        );

        // Request
        $response = $this
            ->post(
                'api/mobile/v1/completed/pathways?token=' . $token . '&page=' . 1
            );

        // Check response status
        $response->assertStatus(200);

        // Check response structure
        $response->assertJsonStructure(self::STRUCTURE_PAGING);

        $resp = $this->responseParsed($response);

        $this->assertEquals(true, $resp['success']);
        $this->assertEquals(200, $resp['code']);
        $this->assertCount(3, $resp['data']['data']);
        $this->assertEquals('Course-5 Tenant-1', $resp['data']['data'][1]['name']);
        $this->assertEquals(3, $resp['data']['data'][1]['department_id']);
        $this->assertEquals(1, $resp['data']['data'][1]['sequence_id']);
        $this->assertEquals('Author Course-5', $resp['data']['data'][1]['author']);
        $this->assertEquals('thumb-5.jpg', $resp['data']['data'][1]['thumb']);
        $this->assertEquals(8, $resp['data']['data'][1]['modules_count']);
        $this->assertEquals(
            'Description for Course 5',
            $resp['data']['data'][1]['description']
        );
        $this->assertEquals('draft', $resp['data']['data'][1]['status']);
        $this->assertEquals('m', $resp['data']['data'][1]['length_unit']);
        $this->assertEquals(60, $resp['data']['data'][1]['length']);
        $this->assertEquals(false, $resp['data']['data'][1]['offline']);
        $this->assertEquals(false, $resp['data']['data'][1]['mood_tracker']);
        $this->assertEquals(false, $resp['data']['data'][1]['feedback']);
        $this->assertEquals("List of the Completed Pathways.", $resp['message']);
        $this->assertEquals(1, $resp['data']['current_page']);
        $this->assertEquals(3, $resp['data']['total']);
    }
}