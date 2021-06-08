<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestWidgetTypesForCompletedSeeder extends Seeder
{
    private const TABLE_NAME = 'widget_types';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 1
        DB::table(self::TABLE_NAME)->insert([
            'type'       => 'simple question',
            'table_name' => 'widget_simple_questions',
        ]);

        // 2
        DB::table(self::TABLE_NAME)->insert([
            'type'       => 'free text question',
            'table_name' => 'widget_free_text_questions',
        ]);

        // 3
        DB::table(self::TABLE_NAME)->insert([
            'type'       => 'slider question',
            'table_name' => 'widget_slider_questions',
        ]);

        // 4
        DB::table(self::TABLE_NAME)->insert([
            'type'       => 'media question',
            'table_name' => 'widget_media_questions',
        ]);

        // 5
        DB::table(self::TABLE_NAME)->insert([
            'type'       => 'media answer',
            'table_name' => 'widget_media_answer_questions',
        ]);

        // 6
        DB::table(self::TABLE_NAME)->insert([
            'type'       => 'article',
            'table_name' => 'widget_articles',
        ]);

        // 7
        DB::table(self::TABLE_NAME)->insert([
            'type'       => 'link external',
            'table_name' => 'widget_link_externals',
        ]);

        // 8
        DB::table(self::TABLE_NAME)->insert([
            'type'       => 'link internal',
            'table_name' => 'widget_link_internals',
        ]);

        // 9
        DB::table(self::TABLE_NAME)->insert([
            'type'       => 'video',
            'table_name' => 'widget_onboardigs',
        ]);

        // 10
        DB::table(self::TABLE_NAME)->insert([
            'type'       => 'audio',
            'table_name' => 'widget_onboardigs',
        ]);

        // 11
        DB::table(self::TABLE_NAME)->insert([
            'type'       => 'podcast',
            'table_name' => 'widget_onboardigs',
        ]);

        // 12
        DB::table(self::TABLE_NAME)->insert([
            'type'       => 'image',
            'table_name' => 'widget_onboardigs',
        ]);

        // 13
        DB::table(self::TABLE_NAME)->insert([
            'type'       => 'text   ',
            'table_name' => 'widget_onboardigs',
        ]);
    }
}
