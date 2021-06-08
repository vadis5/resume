<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WidgetOnboardingDemoSeeder extends Seeder
{
    private const TABLE_NAME = 'widget_onboardings';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 1
        DB::table(self::TABLE_NAME)->insert([
            'widget_type_id' => 9,
            'file'           => 'modules/onboarding//video/ex-1_MP4_480_1_5MG.mp4',
            'headline'       => 'Headline 1',
            'description'    => 'Description text 1. Description text 2. Description text 3.',
            'button_text'    => 'Next',
            'settings_id'    => null
        ]);

        // 2
        DB::table(self::TABLE_NAME)->insert([
            'widget_type_id' => 10,
            'file'           => 'modules/onboarding/audio/ex-1_MP3_700KB.mp4',
            'headline'       => 'Headline 2',
            'description'    => 'Description text 1. Description text 2. Description text 3.',
            'button_text'    => 'Next',
            'settings_id'    => null
        ]);

        // 3
        DB::table(self::TABLE_NAME)->insert([
            'widget_type_id' => 12,
            'file'           => 'modules/onboarding/images/ex-1_MP3_700KB.mp4',
            'headline'       => 'Headline 3',
            'description'    => 'Description text 1. Description text 2. Description text 3.',
            'button_text'    => 'Next',
            'settings_id'    => null
        ]);

        // 4
        DB::table(self::TABLE_NAME)->insert([
            'widget_type_id' => 13,
            'file'           => null,
            'headline'       => 'Headline 4',
            'description'    => 'Description text 1. Description text 2. Description text 3.',
            'button_text'    => 'Next',
            'settings_id'    => null
        ]);

        // 5
        DB::table(self::TABLE_NAME)->insert([
            'widget_type_id' => 13,
            'file'           => null,
            'headline'       => 'Headline 5',
            'description'    => 'End text. Description text 2. Description text 3.',
            'button_text'    => 'Next',
            'settings_id'    => null
        ]);
    }
}
