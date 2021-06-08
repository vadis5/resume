<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestWidgetMediaQuestionForCompletedSeeder extends Seeder
{
    private const TABLE_NAME = 'widget_media_questions';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 1: course-simple-question 1q-2a-single
        DB::table(self::TABLE_NAME)->insert([
            'widget_type_id' => 4,
            'questions'      => '{
                "sets":
                    [
                        {
                            "order": 1,
                            "media": "modules/media_question/19-343x219.png",
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
            'settings_id'    => 1
        ]);

        // 2: course-simple-question 1q-3a-multi
        DB::table(self::TABLE_NAME)->insert([
            'widget_type_id' => 4,
            'questions'      => '{
                "sets":
                    [
                        {
                            "order": 1,
                            "media": "modules/media_question/19-343x219.png",
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
            'settings_id'    => 1
        ]);

        // 3: course-simple-question 2q*2a-single
        DB::table(self::TABLE_NAME)->insert([
            'widget_type_id' => 4,
            'questions'      => '{
                "sets":
                    [
                        {
                            "order": 1,
                            "media": "modules/media_question/251-343x219.png",
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
                            "media": "modules/media_question/837-343x219.png",
                            "question": "Question 2. Text.",
                            "answers":
                                [
                                    {"order": 1, "answer": "Answer 1-2. Text."},
                                    {"order": 2, "answer": "Answer 2-2. Text."},
                                    {"order": 3, "answer": "Answer 3-2. Text."}
                                ]
                        }
                    ]
            }',
            'multi_answer' => false,
            'button_text' => 'Next',
            'settings_id'    => 1
        ]);

        // 4: course-simple-question 2q*3a-multi
        DB::table(self::TABLE_NAME)->insert([
            'widget_type_id' => 4,
            'questions'      => '{
                "sets":
                    [
                        {
                            "order": 1,
                            "media": "modules/media_question/837-343x219.png",
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
                            "media": "modules/media_question/19-343x219.png",
                            "question": "Question 2. Text.",
                            "answers":
                                [
                                    {"order": 1, "answer": "Answer 1-2. Text."},
                                    {"order": 2, "answer": "Answer 2-2. Text."},
                                    {"order": 3, "answer": "Answer 3-2. Text."}
                                ]
                        }
                    ]
            }',
            'multi_answer' => true,
            'button_text' => 'Next',
            'settings_id'    => 1
        ]);
    }
}
