<?php

namespace Tests\Functional\API\V1\CMS;

use App\Models\WidgetSliderQuestion;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;
use App\Traits\TestResponseJsonTrait;

/**
 * Class WidgetSliderQuestionControllerTest
 * @author  Nerush Mykola <mykola.nerush@intellicagroup.com>
 * @package Tests\Functional\API\V1
 */
class WidgetSliderQuestionControllerTest extends TestCase
{
    use DatabaseMigrations;
    use TestResponseJsonTrait;

    private const ROLE_DEVELOPER = ['developer@admin.com', 'Developer'];

    public function setUp(): void
    {
        parent::setUp(); // TODO: Change the autogenerated stub

        $this->artisan('db:seed --class=TestsWidgetSliderQuestionSeeder');
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
        $this->assertEquals(1, DB::table('widget_slider_questions')->count());

        $WidgetSliderQuestion = DB::table('widget_slider_questions')->where('id', 1)->first();
        $this->assertEquals(WidgetSliderQuestion::getWidgetTypeId(), $WidgetSliderQuestion->widget_type_id);
        $this->assertEquals('button_text', $WidgetSliderQuestion->button_text);
    }

    /**
     * Check Delete
     *
     * @return void
     */
    public function testDeleteWidgetSliderQuestion(): void
    {
        $token = $this->loginByEmail(self::ROLE_DEVELOPER[0], self::ROLE_DEVELOPER[1]);

        // Request
        $response = $this->delete('api/cms/v1/widget-slider-question/1?token=' . $token);

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
        $success = $responseJSON['success'];  // array
        $code = $responseJSON['code'];     // array
        $message = $responseJSON['message'];  // array
        $data = $responseJSON['data'];     // array

        $this->assertEquals(true, $success);
        $this->assertEquals(200, $code);
        $this->assertEquals(null, $data);
        $this->assertEquals('Deleted The  widget Slider Question.', $message);

        $removedWidgetSliderQuestion = WidgetSliderQuestion::whereId(1)->first();
        $this->assertEquals(null, $removedWidgetSliderQuestion);
    }

    /**
     * Check Delete
     *
     * @return void
     */
    public function testDeleteWidgetSliderQuestionByGuest(): void
    {
        // Request
        $response = $this->delete('api/cms/v1/widget-slider-question/3');

        // Check response status
        $response->assertStatus(401);
    }

    /**
     * Check Index
     *
     * @return void
     */
    public function testIndexForDeveloper(): void
    {
        $token = $this->loginByEmail(self::ROLE_DEVELOPER[0], self::ROLE_DEVELOPER[1]);

        // Request
        $response = $this->get('api/cms/v1/widget-slider-question?token=' . $token);

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
                            'id',
                            'widget_type_id',
                            'questions',
                            'button_text',
                            'settings_id',
                            'created_at',
                            'updated_at',
                            'widget_settings',
                            'start_statement',
                            'end_statement',
                        ]
                    ],
                'message'
            ]
        );

        $responseJSON = json_decode($response->getContent(), true);
        $data = $responseJSON['data'];     // array
        $WidgetSliderQuestion = $data[0];

        $this->assertEquals(true, $responseJSON['success']);
        $this->assertEquals(200, $responseJSON['code']);
        $this->assertCount(1, $responseJSON['data']);
        $this->assertEquals('WidgetSliderQuestion Index', $responseJSON['message']);
        $this->assertEquals(1, $WidgetSliderQuestion['id']);
        $this->assertEquals(WidgetSliderQuestion::getWidgetTypeId(), $WidgetSliderQuestion['widget_type_id']);
        $this->assertEquals('button_text', $WidgetSliderQuestion['button_text']);
        $this->assertEquals('start_statement', $WidgetSliderQuestion['start_statement']);
        $this->assertEquals('end_statement', $WidgetSliderQuestion['end_statement']);
    }


    /**
     * Check Index for Guest
     *
     * @return void
     */
    public function testIndexForGuest(): void
    {
        // Request
        $response = $this->get('api/cms/v1/widget-slider-question');

        // Check response status
        $response->assertStatus(401);
    }

    /**
     * Check Specific widget article
     *
     * @return void
     */
    public function testShowSpecificWidgetSliderQuestion(): void
    {
        // Login via super-admin
        $token = $this->loginByEmail(self::ROLE_DEVELOPER[0], self::ROLE_DEVELOPER[1]);

        // Request
        $response = $this->get('api/cms/v1/widget-slider-question/1?token=' . $token);

        // Check response status
        $response->assertStatus(200);

        // Check response structure
        $response->assertJsonStructure(
            [
                'success',
                'code',
                'data' =>
                    [
                        'id',
                        'widget_type_id',
                        'questions',
                        'button_text',
                        'settings_id',
                        'created_at',
                        'updated_at',
                        'widget_settings',
                        'start_statement',
                        'end_statement',
                    ],
                'message'
            ]
        );
        $responseJSON = json_decode($response->getContent(), true);
        $data = $responseJSON['data'];     // array

        $this->assertEquals(true, $responseJSON['success']);
        $this->assertEquals(200, $responseJSON['code']);
        $this->assertEquals('Got Specific widget Slider Question.', $responseJSON['message']);
        $this->assertCount(10, $data);
        $this->assertEquals(1, $data['id']);
        $this->assertEquals(WidgetSliderQuestion::getWidgetTypeId(), $data['widget_type_id']);
        $this->assertEquals('button_text', $data['button_text']);
        $this->assertEquals('start_statement', $data['start_statement']);
        $this->assertEquals('end_statement', $data['end_statement']);
    }


    /**
     * Check Specific Widget Article for Guest
     *
     * @return void
     */
    public function testSpecificWidgetSliderQuestionForGuest(): void
    {
        // Request
        $response = $this->get('api/cms/v1/widget-slider-question/2');

        // Check response status
        $response->assertStatus(401);
    }

    /**
     * Check Store a new Widget Article
     *
     * @return void
     */
    public function testStoreNewWidgetSliderQuestion(): void
    {
        $token = $this->loginByEmail(self::ROLE_DEVELOPER[0], self::ROLE_DEVELOPER[1]);

        // Create data
        $data = [
            'questions' => [
                "sets" =>
                    [
                        "order" => 1,
                        "question" => "Question Answer 1. Text.",
                        "answers" =>
                            [
                                [
                                    "order" => 1,
                                    "text" => "Answer for Question Answer 1."
                                ],
                                [
                                    "order" => 2,
                                    "text" => "Answer for Question Answer 1."
                                ]
                            ]
                    ]
            ],
            'button_text' => 'button_text',
            'start_statement' => 'start_statement',
            'end_statement' => 'end_statement',
            'settings' => [
                'completion_time' => '13',
            ]
        ];

        // Request
        $response = $this->post('api/cms/v1/widget-slider-question?token=' . $token, $data);

        // Check response status
        $response->assertStatus(200);

        // Check response structure
        $response->assertJsonStructure(
            [
                'success',
                'code',
                'data' =>
                    [
                        'id',
                        'widget_type_id',
                        'questions',
                        'button_text',
                        'settings_id',
                        'created_at',
                        'updated_at',
                        'widget_settings',
                        'start_statement',
                        'end_statement',
                    ],
                'message'
            ]
        );
        $responseJSON = json_decode($response->getContent(), true);
        $data = $responseJSON['data'];     // array

        $this->assertEquals(true, $responseJSON['success']);
        $this->assertEquals(200, $responseJSON['code']);
        $this->assertEquals('Created new widget Slider Question.', $responseJSON['message']);
        $this->assertCount(10, $data);
        $this->assertEquals(WidgetSliderQuestion::getWidgetTypeId(), $data['widget_type_id']);
        $this->assertEquals('button_text', $data['button_text']);
        $this->assertEquals('{"sets": {"sets": {"order": 1, "answers": [{"text": "Answer for Question Answer 1.", "order": 1}, {"text": "Answer for Question Answer 1.", "order": 2}], "question": "Question Answer 1. Text."}}}', $data['questions']);
        $this->assertEquals('start_statement', $data['start_statement']);
        $this->assertEquals('end_statement', $data['end_statement']);
    }

    /**
     * Check Update Widget Article
     *
     * @return void
     */
    public function testUpdateWidgetSliderQuestion(): void
    {
        $token = $this->loginByEmail(self::ROLE_DEVELOPER[0], self::ROLE_DEVELOPER[1]);

        // Create data
        $data = [
            'questions' => [
                "sets" =>
                    [
                        "order" => 1,
                        "question" => "Question Answer 1. Text.",
                        "answers" =>
                            [
                                [
                                    "order" => 1,
                                    "text" => "Answer for Question Answer 1."
                                ],
                                [
                                    "order" => 2,
                                    "text" => "Answer for Question Answer 1."
                                ]
                            ]
                    ]
            ],
            'button_text' => 'button_text',
            'start_statement' => 'start_statement',
            'end_statement' => 'end_statement',
            'settings' => [
                'completion_time' => '13',
            ]
        ];

        // Request
        $response = $this->put('api/cms/v1/widget-slider-question/1?token=' . $token, $data);

        // Check response status
        $response->assertStatus(200);

        // Check response structure
        $response->assertJsonStructure(
            [
                'success',
                'code',
                'data' =>
                    [
                        'id',
                        'widget_type_id',
                        'questions',
                        'button_text',
                        'settings_id',
                        'created_at',
                        'updated_at',
                        'widget_settings',
                        'start_statement',
                        'end_statement',
                    ],
                'message'
            ]
        );
        $responseJSON = json_decode($response->getContent(), true);
        $data = $responseJSON['data'];     // array

        $this->assertEquals(true, $responseJSON['success']);
        $this->assertEquals(200, $responseJSON['code']);
        $this->assertEquals('Updated the widget Slider Question.', $responseJSON['message']);
        $this->assertCount(10, $data);
        $this->assertEquals(WidgetSliderQuestion::getWidgetTypeId(), $data['widget_type_id']);
        $this->assertEquals('button_text', $data['button_text']);
        $this->assertEquals('{"sets": {"sets": {"order": 1, "answers": [{"text": "Answer for Question Answer 1.", "order": 1}, {"text": "Answer for Question Answer 1.", "order": 2}], "question": "Question Answer 1. Text."}}}', $data['questions']);
        $this->assertEquals('start_statement', $data['start_statement']);
        $this->assertEquals('end_statement', $data['end_statement']);
    }

    /**
     * Check Update WidgetSliderQuestion For Guest
     *
     * @return void
     */
    public function testUpdateWidgetSliderQuestionForGuest(): void
    {
        // Create data
        $data = [
            'button_text' => 'button_text',
        ];

        // Request
        $response = $this->put('api/cms/v1/widget-slider-question/1', $data);

        // Check response status
        $response->assertStatus(401);
    }
}