<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestWidgetSliderQuestionForCompletedSeeder extends Seeder
{
    private const TABLE_NAME = 'widget_slider_questions';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 1: course-slider-question 1q
        DB::table(self::TABLE_NAME)->insert([
            'widget_type_id' => 3,
            'questions'      => '{
                "sets":
                    [
                        {
                            "order": 1,
                            "question": "Question Slider 1. Text.",
                            "value": [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
                        }
                    ]
            }',
            'button_text'    => 'Next',
            'start_statement'    => 'start_statement',
            'end_statement'    => 'end_statement',
            'settings_id'    => null
        ]);

        // 2: course-slider-question 2q
        DB::table(self::TABLE_NAME)->insert([
            'widget_type_id' => 3,
            'questions'      => '{
                "sets":
                    [
                        {
                            "order": 1,
                            "question": "Question Slider Text 1. Text.",
                            "value": [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
                        },
                        {
                            "order": 2,
                            "question": "Question Slider Text 2. Text.",
                            "value": [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12]
                        }
                    ]
            }',
            'button_text'    => 'Next',
            'start_statement'    => 'start_statement',
            'end_statement'    => 'end_statement',
            'settings_id'    => null
        ]);
    }
}
