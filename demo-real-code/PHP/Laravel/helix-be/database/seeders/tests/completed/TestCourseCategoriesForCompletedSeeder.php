<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class TestCourseCategoriesForCompletedSeeder extends Seeder
{
    private const TABLE = 'course_categories';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 1
        DB::table(self::TABLE)->insert(
            [
                'course_id'   => 1,
                'category_id' => 1
            ]
        );

        // 2
        DB::table(self::TABLE)->insert(
            [
                'course_id'   => 2,
                'category_id' => 2
            ]
        );

        // 3
        DB::table(self::TABLE)->insert(
            [
                'course_id'   => 3,
                'category_id' => 1
            ]
        );

        // 4
        DB::table(self::TABLE)->insert(
            [
                'course_id'   => 4,
                'category_id' => 2
            ]
        );

        // 5
        DB::table(self::TABLE)->insert(
            [
                'course_id'   => 5,
                'category_id' => 1
            ]
        );

        // 6
        DB::table(self::TABLE)->insert(
            [
                'course_id'   => 6,
                'category_id' => 2
            ]
        );

        // 7
        DB::table(self::TABLE)->insert(
            [
                'course_id'   => 7,
                'category_id' => 1
            ]
        );

        // 8
        DB::table(self::TABLE)->insert(
            [
                'course_id'   => 8,
                'category_id' => 2
            ]
        );

        // 9
        DB::table(self::TABLE)->insert(
            [
                'course_id'   => 9,
                'category_id' => 1
            ]
        );

        // 10
        DB::table(self::TABLE)->insert(
            [
                'course_id'   => 10,
                'category_id' => 2
            ]
        );

        // 11
        DB::table(self::TABLE)->insert(
            [
                'course_id'   => 11,
                'category_id' => 1
            ]
        );

        // 12
        DB::table(self::TABLE)->insert(
            [
                'course_id'   => 12,
                'category_id' => 2
            ]
        );

        // 13
        DB::table(self::TABLE)->insert(
            [
                'course_id'   => 13,
                'category_id' => 1
            ]
        );

        // 14
        DB::table(self::TABLE)->insert(
            [
                'course_id'   => 14,
                'category_id' => 2
            ]
        );

        // 15
        DB::table(self::TABLE)->insert(
            [
                'course_id'   => 15,
                'category_id' => 1
            ]
        );
    }
}
