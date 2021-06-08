<?php

namespace Tests\Functional\API\V1\Mobile;

use App\Traits\TestResponseJsonTrait;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class SequencesControllerMobileTest extends TestCase
{
    use DatabaseMigrations;
    use TestResponseJsonTrait;

    private const DEVELOPER = ['developer@admin.com', 'Developer'];
    private const SUPER_ADMIN = [
        'happence-super-admin@admin.com',
        'Happence Super Admin'
    ];
    private const TENANT_ADMIN_1 = [
        'tenant-1-admin@admin.com',
        'Tenant Admin'
    ];
    private const TENANT_USER = [
        'tenant-2-root-dep-1-user-1@admin.com',
        'Tenant-2 Root-Dep-1 User-1'
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

    public function setUp(): void
    {
        parent::setUp(); // TODO: Change the autogenerated stub

        $this->artisan('db:seed --class=TestsSequencesSeeder');
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
        $this->assertCount(13, $modules);
    }

    /**
     * Check Specific Sequence for Tenant User
     *
     * @return void
     */
    public function testShowSpecificSequenceForTenantUser()
    {
        $token = $this->loginByEmail(self::TENANT_USER[0], self::TENANT_USER[1]);

        // Request
        $response = $this->get('api/mobile/v1/builder/1?token=' . $token);

        // Check response status
        $response->assertStatus(200);

        // Check response structure

        $response->assertJsonStructure(self::STRUCTURE_SINGLE);
        $resp = $this->responseParsed($response);

        $this->assertEquals(true, $resp['success']);
        $this->assertEquals(200, $resp['code']);
        $this->assertEquals("Got Specific Sequence", $resp['message']);
        $this->assertEquals(1, $resp['data']['id']);
        $this->assertEquals(8, $resp['data']['modules'][7]['widget_type_id']);
    }

    /**
     * Check Absent Sequence for Tenant User
     *
     * @return void
     */
    public function testShowAbsentSequenceForTenantUser()
    {
        $token = $this->loginByEmail(self::TENANT_USER[0], self::TENANT_USER[1]);

        // Request
        $response = $this->get('api/mobile/v1/builder/9999?token=' . $token);

        // Check response status
        $response->assertStatus(404);

        // Check response structure

        $response->assertJsonStructure(self::STRUCTURE_SIMPLEST);
        $resp = $this->responseParsed($response);

        $this->assertEquals(false, $resp['success']);
        $this->assertEquals(404, $resp['code']);
    }

    /**
     * Check Specific Sequence for Tenant Admin
     *
     * @return void
     */
    public function testShowSpecificSequenceForTenantAdmin()
    {
        $token = $this->loginByEmail(
            self::TENANT_ADMIN_1[0],
            self::TENANT_ADMIN_1[1]
        );

        // Request
        $response = $this->get('api/mobile/v1/builder/1?token=' . $token);

        // Check response status
        $response->assertStatus(403);

        // Check response structure

        $response->assertJsonStructure(self::STRUCTURE_SIMPLE);
        $resp = $this->responseParsed($response);

        $this->assertEquals(false, $resp['success']);
        $this->assertEquals(403, $resp['code']);
    }

    /**
     * Check Get Sequence for Guest
     *
     * @return void
     */
    public function testShowSpecificSequenceForGuest()
    {
        // Request
        $response = $this->get('api/mobile/v1/builder/1');

        // Check response status
        $response->assertStatus(401);
    }

    /**
     * Check Specific Module for Tenant User
     *
     * @return void
     */
    public function testShowSpecificModuleForTenantUser()
    {
        $token = $this->loginByEmail(self::TENANT_USER[0], self::TENANT_USER[1]);

        // Request
        $response = $this->get('api/mobile/v1/builder/modules/1?token=' . $token);

        // Check response status
        $response->assertStatus(200);

        // Check response structure
        $response->assertJsonStructure(self::STRUCTURE_MODULE);
        $resp = $this->responseParsed($response);

        $this->assertEquals(true, $resp['success']);
        $this->assertEquals(200, $resp['code']);
        $this->assertEquals("Got Specific Module", $resp['message']);
        $this->assertEquals(1, $resp['data']['id']);
        $this->assertEquals(1, $resp['data']['widget_included']['widget_type_id']);
    }

    /**
     * Check Absent Sequence for Tenant User
     *
     * @return void
     */
    public function testShowAbsentModuleForTenantUser()
    {
        $token = $this->loginByEmail(self::TENANT_USER[0], self::TENANT_USER[1]);

        // Request
        $response = $this->get('api/mobile/v1/builder/modules/9999?token=' . $token);

        // Check response status
        $response->assertStatus(404);

        // Check response structure

        $response->assertJsonStructure(self::STRUCTURE_SIMPLEST);
        $resp = $this->responseParsed($response);

        $this->assertEquals(false, $resp['success']);
        $this->assertEquals(404, $resp['code']);
    }

    /**
     * Check Specific Sequence for Tenant Admin
     *
     * @return void
     */
    public function testShowSpecificModuleForTenantAdmin()
    {
        $token = $this->loginByEmail(
            self::TENANT_ADMIN_1[0],
            self::TENANT_ADMIN_1[1]
        );

        // Request
        $response = $this->get('api/mobile/v1/builder/modules/1?token=' . $token);

        // Check response status
        $response->assertStatus(403);

        // Check response structure
        $response->assertJsonStructure(self::STRUCTURE_SIMPLE);
        $resp = $this->responseParsed($response);

        $this->assertEquals(false, $resp['success']);
        $this->assertEquals(403, $resp['code']);
    }

    /**
     * Check Get Sequence for Guest
     *
     * @return void
     */
    public function testShowSpecificModuleForGuest()
    {
        // Request
        $response = $this->get('api/mobile/v1/builder/modules/1');

        // Check response status
        $response->assertStatus(401);
    }
}
