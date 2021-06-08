<?php

/**
 * CategoriesCourses Seeder for Tests of Courses
 *
 * PHP version 7.4
 *
 * @category Seeder
 * @package  Database\Seeders
 * @author   Vadiasov Volodymyr <vadiasov.volodymyr@gmail.com>
 * @license  BSD License
 * @link     Database\Seeders
 */

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * Class CategoriesCoursesCourses
 *
 * @category Class
 * @package  Database\Seeders
 * @author   Vadiasov Volodymyr <vadiasov.volodymyr@gmail.com>
 * @license  BSD License
 * @link     Database\Seeders
 */
class CategoryCoursesForCoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 1
        DB::table('course_categories')->insert(
            [
                'category_id' => 1,
                'course_id' => 1,
            ]
        );

        // 2
        DB::table('course_categories')->insert(
            [
                'category_id' => 2,
                'course_id' => 1,
            ],
        );

        // 3
        DB::table('course_categories')->insert(
            [
                'category_id' => 4,
                'course_id' => 1,
            ],
        );

        // 4
        DB::table('course_categories')->insert(
            [
                'category_id' => 5,
                'course_id' => 1,
            ],
        );

        // 5
        DB::table('course_categories')->insert(
            [
                'category_id' => 1,
                'course_id' => 2
            ]
        );

        // 6
        DB::table('course_categories')->insert(
            [
                'category_id' => 2,
                'course_id' => 2
            ],
        );

        // 7
        DB::table('course_categories')->insert(
            [
                'category_id' => 4,
                'course_id' => 2
            ],
        );

        // 8
        DB::table('course_categories')->insert(
            [
                'category_id' => 1,
                'course_id' => 5
            ]
        );

        // 9
        DB::table('course_categories')->insert(
            [
                'category_id' => 2,
                'course_id' => 5
            ],
        );

        // 10
        DB::table('course_categories')->insert(
            [
                'category_id' => 1,
                'course_id' => 6
            ],
        );

        // 11
        DB::table('course_categories')->insert(
            [
                'category_id' => 2,
                'course_id' => 7
            ],
        );
    }
}
