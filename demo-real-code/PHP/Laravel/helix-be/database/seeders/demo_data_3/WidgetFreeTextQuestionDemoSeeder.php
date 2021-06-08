<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WidgetFreeTextQuestionDemoSeeder extends Seeder
{
    private const TABLE_NAME = 'widget_free_text_questions';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 1: course-free-text-question 1q
        DB::table(self::TABLE_NAME)->insert([
            'widget_type_id' => 2,
            'questions'      => '{
                "sets":
                    [
                        {
                            "order": 1,
                            "question": "Question Free Text 1. Text."
                         }
                    ]
            }',
            'button_text'    => 'Next',
            'settings_id'    => 1
        ]);

        // 2: course-free-text-question 2q
        DB::table(self::TABLE_NAME)->insert([
            'widget_type_id' => 2,
            'questions'      => '{
                "sets":
                    [
                        {
                            "order": 1,
                            "question": "Question Free Text 1. Text."
                        },
                        {
                            "order": 2,
                            "question": "Question Free Text 2. Text."
                        }
                    ]
            }',
            'button_text'    => 'Next',
            'settings_id'    => 1
        ]);
    }
}
