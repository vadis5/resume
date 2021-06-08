<?php

/**
 * Tag Seeder for Tests of Courses
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
 * Class TagsCourses
 *
 * @category Class
 * @package  Database\Seeders
 * @author   Vadiasov Volodymyr <vadiasov.volodymyr@gmail.com>
 * @license  BSD License
 * @link     Database\Seeders
 */
class TagsForCoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 1
        DB::table('tags')->insert([
            'name' => 'tag-1-1-1',
            'department_id' => 1
        ]);

        // 2
        DB::table('tags')->insert([
            'name' => 'tag-1-1-2',
            'department_id' => 1
        ]);

        // 3
        DB::table('tags')->insert([
            'name' => 'tag-2-2-1',
            'department_id' => 2
        ]);

        // 4
        DB::table('tags')->insert([
            'name' => 'tag-2-2-2',
            'department_id' => 2
        ]);

        // 5
        DB::table('tags')->insert([
            'name' => 'tag-2-2-3',
            'department_id' => 2
        ]);

        // 6
        DB::table('tags')->insert([
            'name' => 'tag-2-2-4',
            'department_id' => 2
        ]);

        // 7
        DB::table('tags')->insert([
            'name' => 'tag-2-3-1',
            'department_id' => 3
        ]);

        // 8
        DB::table('tags')->insert([
            'name' => 'tag-2-3-2',
            'department_id' => 3
        ]);

        // 9
        DB::table('tags')->insert([
            'name' => 'tag-2-3-3',
            'department_id' => 3
        ]);

        // 10
        DB::table('tags')->insert([
            'name' => 'tag-2-3-4',
            'department_id' => 3
        ]);

        // 11
        DB::table('tags')->insert([
            'name' => 'tag-3-4-1',
            'department_id' => 4
        ]);

        // 12
        DB::table('tags')->insert([
            'name' => 'tag-3-4-2',
            'department_id' => 4
        ]);

        // 13
        DB::table('tags')->insert([
            'name' => 'tag-3-4-3',
            'department_id' => 4
        ]);

        // 14
        DB::table('tags')->insert([
            'name' => 'tag-3-4-4',
            'department_id' => 4
        ]);
    }
}
