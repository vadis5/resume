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
class CategoriesDemoSeeder extends Seeder
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
                'department_id' => 3,
                'name'       => "Category 1 for dep 3 ten 2",
                'parent_id'  => null
            ]
        );

        // 2
        DB::table('categories')->insert(
            [
                'department_id' => 3,
                'name'       => "Category 2 for dep 3 ten 2",
                'parent_id'  => null
            ],
        );
    }
}
