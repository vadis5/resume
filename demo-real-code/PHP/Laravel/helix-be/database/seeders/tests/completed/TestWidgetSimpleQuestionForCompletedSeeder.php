<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestWidgetSimpleQuestionForCompletedSeeder extends Seeder
{
    private const TABLE_NAME = 'widget_simple_questions';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 1: course-simple-question 1q-2a-single
        DB::table(self::TABLE_NAME)->insert([
            'widget_type_id' => 1,
            'questions'      => '{
                "sets":
                    [
                        {
                            "order": 1,
                            "question": "Question 1. Text.",
                            "answers":
                                [
                                    {"order": 1, "answer": "Answer 1. Text."},
                                    {"order": 2, "answer": "Answer 2. Text."}
                                ]
                         }
                    ]
            }',
            'multi_answer' => false,
            'button_text' => 'Next',
            'settings_id' => null
        ]);

        // 2: course-simple-question 1q-3a-multi
        DB::table(self::TABLE_NAME)->insert([
            'widget_type_id' => 1,
            'questions'      => '{
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
            'multi_answer' => true,
            'button_text' => 'Next',
            'settings_id' => null
        ]);

        // 3: course-simple-question 2q*2a-single
        DB::table(self::TABLE_NAME)->insert([
            'widget_type_id' => 1,
            'questions'      => '{
                "sets":
                    [
                        {
                            "order": 1,
                            "question": "Question 1. Text.",
                            "answers":
                                [
                                    {"order": 1, "answer": "Answer 1. Text."},
                                    {"order": 2, "answer": "Answer 2. Text."}
                                ]
                        },
                        {
                            "order": 2,
                            "question": "Question 2. Text.",
                            "answers":
                                [
                                    {"order": 1, "answer": "Answer 3. Text."},
                                    {"order": 2, "answer": "Answer 4. Text."}
                                ]
                        }
                    ]
            }',
            'multi_answer' => false,
            'button_text' => 'Next',
            'settings_id' => null
        ]);

        // 4: course-simple-question 2q*3a-multi
        DB::table(self::TABLE_NAME)->insert([
            'widget_type_id' => 1,
            'questions'      => '{
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
                        },
                        {
                            "order": 2,
                            "question": "Question 2. Text.",
                            "answers":
                                [
                                    {"order": 1, "answer": "Answer 4. Text."},
                                    {"order": 2, "answer": "Answer 5. Text."},
                                    {"order": 3, "answer": "Answer 6. Text."}
                                ]
                        }
                    ]
            }',
            'multi_answer' => true,
            'button_text' => 'Next',
            'settings_id' => null
        ]);
    }
}
