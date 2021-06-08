<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestWidgetSettingsForCompletedSeeder extends Seeder
{
    private const TABLE_NAME = 'widget_settings';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 1
        DB::table(self::TABLE_NAME)->insert([
            'header_img'       => 'modules/settings/949-343x219.png',
            'completion_time' => 13,
            'reward_id' => null
        ]);
    }
}
