<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModulesDemoSeeder extends Seeder
{
    private const TABLE_NAME = 'modules';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 1
        DB::table(self::TABLE_NAME)->insert([
            'name' => 'Pathway 1, Simple Question',
            'order' => 1,
            'widget_type_id' => 1,
            'specific_id' => 1,
            'previous_id' => null,
        ]);

        // 2
        DB::table(self::TABLE_NAME)->insert([
            'name' => 'Pathway 1, Free Text Question',
            'order' => 2,
            'widget_type_id' => 2,
            'specific_id' => 1,
            'previous_id' => null,
        ]);

        // 3
        DB::table(self::TABLE_NAME)->insert([
            'name' => 'Pathway 1, Slider Question',
            'order' => 3,
            'widget_type_id' => 3,
            'specific_id' => 1,
            'previous_id' => null,
        ]);

        // 4
        DB::table(self::TABLE_NAME)->insert([
            'name' => 'Pathway 1, Media Question',
            'order' => 4,
            'widget_type_id' => 4,
            'specific_id' => 1,
            'previous_id' => 3,
        ]);

        // 5
        DB::table(self::TABLE_NAME)->insert([
            'name' => 'Pathway 1, Media Answer',
            'order' => 5,
            'widget_type_id' => 5,
            'specific_id' => 1,
            'previous_id' => 4,
        ]);

        // 6
        DB::table(self::TABLE_NAME)->insert([
            'name' => 'Pathway 1, Article',
            'order' => 6,
            'widget_type_id' => 6,
            'specific_id' => 1,
            'previous_id' => null,
        ]);

        // 7
        DB::table(self::TABLE_NAME)->insert([
            'name' => 'Pathway 1, Link External',
            'order' => 7,
            'widget_type_id' => 7,
            'specific_id' => 1,
            'previous_id' => null,
        ]);

        // 8
        DB::table(self::TABLE_NAME)->insert([
            'name' => 'Pathway 1, Link Internal',
            'order' => 8,
            'widget_type_id' => 8,
            'specific_id' => 1,
            'previous_id' => null,
        ]);

        // 9
        DB::table(self::TABLE_NAME)->insert([
            'name' => 'Pathway 2, Text',
            'order' => 1,
            'widget_type_id' => 13,
            'specific_id' => 5,
            'previous_id' => null,
        ]);

        // 10
        DB::table(self::TABLE_NAME)->insert([
            'name' => 'Pathway 2, Video',
            'order' => 2,
            'widget_type_id' => 9,
            'specific_id' => 1,
            'previous_id' => 9,
        ]);

        // 11
        DB::table(self::TABLE_NAME)->insert([
            'name' => 'Pathway 2, Audio',
            'order' => 3,
            'widget_type_id' => 10,
            'specific_id' => 2,
            'previous_id' => 10,
        ]);

        // 12
        DB::table(self::TABLE_NAME)->insert([
            'name' => 'Pathway 2, Image',
            'order' => 4,
            'widget_type_id' => 12,
            'specific_id' => 3,
            'previous_id' => 11,
        ]);

        // 13
        DB::table(self::TABLE_NAME)->insert([
            'name' => 'Pathway 2, Text',
            'order' => 5,
            'widget_type_id' => 13,
            'specific_id' => 5,
            'previous_id' => 12,
        ]);
    }
}
