<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WidgetLinkExternalDemoSeeder extends Seeder
{
    private const TABLE_NAME = 'widget_link_externals';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 1
        DB::table(self::TABLE_NAME)->insert([
            'widget_type_id' => 7,
            'headline'       => "Headline text",
            'body'           => "Link body text",
            'link_type'      => "external",
            'link'           => 'http://google.com',
            'cta'            => 'Visit external link',
            'button_text'    => 'Next',
            'settings_id'    => 1
        ]);
    }
}
