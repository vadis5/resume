<?php

/**
 * Course Seeder for Tests of Courses
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

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * Class CoursesCourses
 *
 * @category Class
 * @package  Database\Seeders
 * @author   Vadiasov Volodymyr <vadiasov.volodymyr@gmail.com>
 * @license  BSD License
 * @link     Database\Seeders
 */
class CoursesForCoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 1
        DB::table('courses')->insert(
            [
                'status'        => 'active',
                'name'          => 'Course-1 Tenant-1',
                'author'        => 'Author Course-1',
                'thumb'         => 'thumb-1.jpg',
                'description'   => 'Description for Course 1',
                'department_id' => 2,
                'length_unit'   => 'm',
                'length'        => 20,
                'offline'       => false,
                'mood_tracker'  => false,
                'feedback'      => false,
                'created_at'    => Carbon::create(2020, 11, 25, 9, 0, 0, 0)
            ]
        );

        // 2
        DB::table('courses')->insert(
            [
                'status'        => 'active',
                'name'          => 'Course-2 Tenant-1',
                'author'        => 'Author Course-2',
                'thumb'         => 'thumb-2.jpg',
                'description'   => 'Description for Course 2',
                'department_id' => 2,
                'length_unit'   => 'm',
                'length'        => 30,
                'offline'       => false,
                'mood_tracker'  => false,
                'feedback'      => false,
                'created_at'    => Carbon::create(2020, 11, 25, 9, 0, 0, 0)
            ]
        );

        // 3
        DB::table('courses')->insert(
            [
                'status'        => 'active',
                'name'          => 'Course-1 Tenant-2',
                'author'        => 'Author Course-3',
                'thumb'         => 'thumb-3.jpg',
                'description'   => 'Description for Course 3',
                'department_id' => 3,
                'length_unit'   => 'm',
                'length'        => 40,
                'offline'       => false,
                'mood_tracker'  => false,
                'feedback'      => false,
                'created_at'    => Carbon::create(2020, 11, 25, 9, 0, 0, 0)
            ]
        );

        // 4
        DB::table('courses')->insert(
            [
                'status'        => 'active',
                'name'          => 'Course-4 Helix',
                'author'        => 'Author Course-4',
                'thumb'         => 'thumb-4.jpg',
                'description'   => 'Description for Course 4',
                'department_id' => 1,
                'length_unit'   => 'm',
                'length'        => 50,
                'offline'       => false,
                'mood_tracker'  => false,
                'feedback'      => false,
                'created_at'    => Carbon::create(2020, 11, 25, 9, 0, 0, 0)
            ]
        );

        // 5
        DB::table('courses')->insert(
            [
                'status'        => 'draft',
                'name'          => 'Course-5 Tenant-1',
                'author'        => 'Author Course-5',
                'thumb'         => 'thumb-5.jpg',
                'description'   => 'Description for Course 5',
                'department_id' => 2,
                'length_unit'   => 'm',
                'length'        => 60,
                'offline'       => false,
                'mood_tracker'  => false,
                'feedback'      => false,
                'created_at'    => Carbon::create(2020, 11, 25, 9, 0, 0, 0)
            ]
        );

        // 6
        DB::table('courses')->insert(
            [
                'status'       => 'draft',
                'name'         => 'Course-6 Tenant-1',
                'author'       => 'Author Course-6',
                'thumb'        => 'thumb-6.jpg',
                'description'  => 'Description for Course 6',
                'department_id' => 2,
                'length_unit'  => 'm',
                'length'       => 70,
                'offline'      => false,
                'mood_tracker' => false,
                'feedback'     => false,
                'created_at'   => Carbon::create(2020, 11, 25, 9, 0, 0, 0)
            ]
        );

        // 7
        DB::table('courses')->insert(
            [
                'status'       => 'draft',
                'name'         => 'Course-7 Tenant-1',
                'author'       => 'Author Course-7',
                'thumb'        => 'thumb-7.jpg',
                'description'  => 'Description for Course 7',
                'department_id' => 2,
                'length_unit'  => 'm',
                'length'       => 80,
                'offline'      => false,
                'mood_tracker' => false,
                'feedback'     => false,
                'created_at'   => Carbon::create(2020, 11, 25, 9, 0, 0, 0)
            ]
        );
    }
}
