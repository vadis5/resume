<?php

/**
 * Category Seeder for Tests of Courses
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
 * Class CategoriesCourses
 *
 * @category Class
 * @package  Database\Seeders
 * @author   Vadiasov Volodymyr <vadiasov.volodymyr@gmail.com>
 * @license  BSD License
 * @link     Database\Seeders
 */
class CategoriesForCoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 1
        DB::table('categories')->insert(
            [
                'department_id' => 2,
                'name'       => "Category-d-2 r-1",
                'parent_id'  => null
            ]
        );

        // 2
        DB::table('categories')->insert(
            [
                'department_id' => 2,
                'name'       => "Category-d-2 r-2",
                'parent_id'  => null
            ],
        );

        // 3
        DB::table('categories')->insert(
            [
                'department_id' => 4,
                'name'       => "Category-d-4 r-1",
                'parent_id'  => null
            ],
        );

        // 4
        DB::table('categories')->insert(
            [
                'department_id' => 2,
                'name'       => "Category-d-2 r-1 ch-1",
                'parent_id'  => 1
            ],
        );

        // 5
        DB::table('categories')->insert(
            [
                'department_id' => 2,
                'name'       => "Category-d-2 r-1 ch-2",
                'parent_id'  => 1
            ],
        );

        // 6
        DB::table('categories')->insert(
            [
                'department_id' => 5,
                'name'       => "Category-d-5 r-1",
                'parent_id'  => null
            ],
        );

        // 7
        DB::table('categories')->insert(
            [
                'department_id' => 5,
                'name'       => "Category-d-5 r-2",
                'parent_id'  => null
            ],
        );
    }
}
