<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModuleSequencesDemoSeeder extends Seeder
{
    private const TABLE_NAME = 'module_sequences';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 1
        DB::table(self::TABLE_NAME)->insert([
            'sequence_id' => 1,
            'module_id'   => 1,
        ]);

        // 2
        DB::table(self::TABLE_NAME)->insert([
            'sequence_id' => 1,
            'module_id'   => 2,
        ]);

        // 3
        DB::table(self::TABLE_NAME)->insert([
            'sequence_id' => 1,
            'module_id'   => 3,
        ]);

        // 4
        DB::table(self::TABLE_NAME)->insert([
            'sequence_id' => 1,
            'module_id'   => 4,
        ]);

        // 5
        DB::table(self::TABLE_NAME)->insert([
            'sequence_id' => 1,
            'module_id'   => 5,
        ]);

        // 6
        DB::table(self::TABLE_NAME)->insert([
            'sequence_id' => 1,
            'module_id'   => 6,
        ]);

        // 7
        DB::table(self::TABLE_NAME)->insert([
            'sequence_id' => 1,
            'module_id'   => 7,
        ]);

        // 8
        DB::table(self::TABLE_NAME)->insert([
            'sequence_id' => 1,
            'module_id'   => 8,
        ]);

        // 9
        DB::table(self::TABLE_NAME)->insert([
            'sequence_id' => 2,
            'module_id'   => 9,
        ]);

        // 10
        DB::table(self::TABLE_NAME)->insert([
            'sequence_id' => 2,
            'module_id'   => 10,
        ]);

        // 11
        DB::table(self::TABLE_NAME)->insert([
            'sequence_id' => 2,
            'module_id'   => 11,
        ]);

        // 12
        DB::table(self::TABLE_NAME)->insert([
            'sequence_id' => 2,
            'module_id'   => 12,
        ]);

        // 13
        DB::table(self::TABLE_NAME)->insert([
            'sequence_id' => 2,
            'module_id'   => 13,
        ]);

        // 14
        DB::table(self::TABLE_NAME)->insert([
            'sequence_id' => 3,
            'module_id'   => 1,
        ]);

        // 15
        DB::table(self::TABLE_NAME)->insert([
            'sequence_id' => 3,
            'module_id'   => 2,
        ]);

        // 16
        DB::table(self::TABLE_NAME)->insert([
            'sequence_id' => 3,
            'module_id'   => 3,
        ]);

        // 17
        DB::table(self::TABLE_NAME)->insert([
            'sequence_id' => 3,
            'module_id'   => 4,
        ]);
    }
}
