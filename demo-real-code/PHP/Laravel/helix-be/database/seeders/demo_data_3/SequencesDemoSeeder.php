<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SequencesDemoSeeder extends Seeder
{
    private const TABLE_NAME = 'sequences';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 1: pathway with all modules from mobile
        DB::table(self::TABLE_NAME)->insert([
            'type_id' => 1,
        ]);

        // 2: course onboarding
        DB::table(self::TABLE_NAME)->insert([
            'type_id' => 2,
        ]);

        // 3: pathway with different modules from mobile
        DB::table(self::TABLE_NAME)->insert([
            'type_id' => 1,
        ]);
    }
}
