<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompletedDemoSeeder extends Seeder
{
    private const TABLE_NAME = 'completed';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 1
        DB::table(self::TABLE_NAME)->insert([
            'user_id' => 7,
            'completedable_id' => 4,
            'completedable_type' => 'App\Models\Course',
        ]);

        // 2
        DB::table(self::TABLE_NAME)->insert([
            'user_id' => 7,
            'completedable_id' => 5,
            'completedable_type' => 'App\Models\Course',
        ]);

        // 3
        DB::table(self::TABLE_NAME)->insert([
            'user_id' => 7,
            'completedable_id' => 6,
            'completedable_type' => 'App\Models\Course',
        ]);

        // 4
        DB::table(self::TABLE_NAME)->insert([
            'user_id' => 7,
            'completedable_id' => 2,
            'completedable_type' => 'App\Models\Sequence',
        ]);

        // 5
        DB::table(self::TABLE_NAME)->insert([
            'user_id' => 7,
            'completedable_id' => 8,
            'completedable_type' => 'App\Models\Module',
        ]);

        // 6
        DB::table(self::TABLE_NAME)->insert([
            'user_id' => 7,
            'completedable_id' => 9,
            'completedable_type' => 'App\Models\Module',
        ]);
    }
}
