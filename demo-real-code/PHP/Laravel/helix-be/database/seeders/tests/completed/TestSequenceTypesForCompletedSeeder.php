<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestSequenceTypesForCompletedSeeder extends Seeder
{
    private const TABLE_NAME = 'sequence_types';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 1
        DB::table(self::TABLE_NAME)->insert([
            'name'       => 'course',
        ]);

        // 2
        DB::table(self::TABLE_NAME)->insert([
            'name'       => 'course_onboarding',
        ]);

        // 2
        DB::table(self::TABLE_NAME)->insert([
            'name'       => 'user_onboarding',
        ]);
    }
}
