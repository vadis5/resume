<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestWidgetMediaAnswerQuestionForCompletedSeeder extends Seeder
{
    private const TABLE_NAME = 'widget_media_answer_questions';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 1: course-media-answer-question 1q
        DB::table(self::TABLE_NAME)->insert([
            'widget_type_id' => 5,
            'questions'      => '{
                "sets":
                    [
                        {
                            "order": 1,
                            "question": "Question Media Answer 1. Text.",
                            "answers":
                                [
                                    {
                                        "order": 1,
                                        "media": "modules/media_question/19-343x219.png",
                                        "text": "Answer for Question Media Answer 1."
                                    },
                                    {
                                        "order": 2,
                                        "media": "modules/media_question/837-343x219.png",
                                        "text": "Answer for Question Media Answer 1."
                                    }
                                ]
                         }
                    ]
            }',
            'button_text'    => 'Next',
            'settings_id'    => 1
        ]);

        // 2: course-free-text-question 2q
        DB::table(self::TABLE_NAME)->insert([
            'widget_type_id' => 5,
            'questions'      => '{
                "sets":
                    [
                        {
                            "order": 1,
                            "question": "Question Media Answer 1. Text.",
                            "answers":
                                [
                                    {
                                        "order": 1,
                                        "media": "modules/media_question/19-343x219.png",
                                        "text": "Answer for Question Media Answer 1."
                                    },
                                    {
                                        "order": 2,
                                        "media": "modules/media_question/837-343x219.png",
                                        "text": "Answer for Question Media Answer 1."
                                    }
                                ]
                         },
                         {
                            "order": 2,
                            "question": "Question Media Answer 2. Text.",
                            "answers":
                                [
                                    {
                                        "order": 1,
                                        "media": "modules/media_question/19-343x219.png",
                                        "text": "Answer for Question Media Answer 2."
                                    },
                                    {
                                        "order": 2,
                                        "media": "modules/media_question/837-343x219.png",
                                        "text": "Answer for Question Media Answer 2."
                                    }
                                ]
                         }
                    ]
            }',
            'button_text'    => 'Next',
            'settings_id'    => 1
        ]);
    }
}
