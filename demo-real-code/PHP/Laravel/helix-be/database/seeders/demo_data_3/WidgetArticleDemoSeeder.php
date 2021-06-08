<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WidgetArticleDemoSeeder extends Seeder
{
    private const TABLE_NAME = 'widget_articles';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 1: course-media-answer-question 1q
        DB::table(self::TABLE_NAME)->insert([
            'widget_type_id' => 6,
            'body'      => "Simple row text.",
            'button_text'    => 'Next',
            'settings_id'    => 1
        ]);
    }
}
