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
class TestCoursesForCompletedSeeder extends Seeder
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
                'department_id' => 3,
                'sequence_id'   => 1,
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
                'department_id' => 3,
                'sequence_id'   => 1,
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
                'name'          => 'Course-3 Tenant-2',
                'author'        => 'Author Course-3',
                'thumb'         => 'thumb-3.jpg',
                'description'   => 'Description for Course 3',
                'department_id' => 3,
                'sequence_id'   => 1,
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
                'department_id' => 3,
                'sequence_id'   => 1,
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
                'department_id' => 3,
                'sequence_id'   => 1,
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
                'status'        => 'draft',
                'name'          => 'Course-6 Tenant-1',
                'author'        => 'Author Course-6',
                'thumb'         => 'thumb-6.jpg',
                'description'   => 'Description for Course 6',
                'department_id' => 3,
                'sequence_id'   => 3,
                'length_unit'   => 'm',
                'length'        => 70,
                'offline'       => false,
                'mood_tracker'  => false,
                'feedback'      => false,
                'created_at'    => Carbon::create(2020, 11, 25, 9, 0, 0, 0)
            ]
        );

        // 7
        DB::table('courses')->insert(
            [
                'status'        => 'draft',
                'name'          => 'Course-7 Tenant-1',
                'author'        => 'Author Course-7',
                'thumb'         => 'thumb-7.jpg',
                'description'   => 'Description for Course 7',
                'department_id' => 3,
                'sequence_id'   => 1,
                'length_unit'   => 'm',
                'length'        => 80,
                'offline'       => false,
                'mood_tracker'  => false,
                'feedback'      => false,
                'created_at'    => Carbon::create(2020, 11, 25, 9, 0, 0, 0)
            ]
        );

        // 8
        DB::table('courses')->insert(
            [
                'status'        => 'draft',
                'name'          => 'Course-8 Tenant-1',
                'author'        => 'Author Course-8',
                'thumb'         => 'thumb-7.jpg',
                'description'   => 'Description for Course 8',
                'department_id' => 3,
                'sequence_id'   => 1,
                'length_unit'   => 'm',
                'length'        => 90,
                'offline'       => false,
                'mood_tracker'  => false,
                'feedback'      => false,
                'created_at'    => Carbon::create(2020, 11, 25, 9, 0, 0, 0)
            ]
        );

        // 9
        DB::table('courses')->insert(
            [
                'status'        => 'draft',
                'name'          => 'Course-9 Tenant-1',
                'author'        => 'Author Course-9',
                'thumb'         => 'thumb-7.jpg',
                'description'   => 'Description for Course 9',
                'department_id' => 3,
                'sequence_id'   => 1,
                'length_unit'   => 'm',
                'length'        => 100,
                'offline'       => false,
                'mood_tracker'  => false,
                'feedback'      => false,
                'created_at'    => Carbon::create(2020, 11, 25, 9, 0, 0, 0)
            ]
        );

        // 10
        DB::table('courses')->insert(
            [
                'status'        => 'draft',
                'name'          => 'Course-10 Tenant-1',
                'author'        => 'Author Course-10',
                'thumb'         => 'thumb-7.jpg',
                'description'   => 'Description for Course 10',
                'department_id' => 3,
                'sequence_id'   => 1,
                'length_unit'   => 'm',
                'length'        => 110,
                'offline'       => false,
                'mood_tracker'  => false,
                'feedback'      => false,
                'created_at'    => Carbon::create(2020, 11, 25, 9, 0, 0, 0)
            ]
        );

        // 11
        DB::table('courses')->insert(
            [
                'status'        => 'draft',
                'name'          => 'Course-11 Tenant-1',
                'author'        => 'Author Course-11',
                'thumb'         => 'thumb-7.jpg',
                'description'   => 'Description for Course 11',
                'department_id' => 3,
                'sequence_id'   => 1,
                'length_unit'   => 'm',
                'length'        => 120,
                'offline'       => false,
                'mood_tracker'  => false,
                'feedback'      => false,
                'created_at'    => Carbon::create(2020, 11, 25, 9, 0, 0, 0)
            ]
        );

        // 12
        DB::table('courses')->insert(
            [
                'status'        => 'draft',
                'name'          => 'Course-12 Tenant-1',
                'author'        => 'Author Course-12',
                'thumb'         => 'thumb-7.jpg',
                'description'   => 'Description for Course 12',
                'department_id' => 3,
                'sequence_id'   => 1,
                'length_unit'   => 'm',
                'length'        => 130,
                'offline'       => false,
                'mood_tracker'  => false,
                'feedback'      => false,
                'created_at'    => Carbon::create(2020, 11, 25, 9, 0, 0, 0)
            ]
        );

        // 13
        DB::table('courses')->insert(
            [
                'status'        => 'draft',
                'name'          => 'Course-13 Tenant-1',
                'author'        => 'Author Course-13',
                'thumb'         => 'thumb-7.jpg',
                'description'   => 'Description for Course 13',
                'department_id' => 3,
                'sequence_id'   => 1,
                'length_unit'   => 'm',
                'length'        => 140,
                'offline'       => false,
                'mood_tracker'  => false,
                'feedback'      => false,
                'created_at'    => Carbon::create(2020, 11, 25, 9, 0, 0, 0)
            ]
        );

        // 14
        DB::table('courses')->insert(
            [
                'status'        => 'draft',
                'name'          => 'Course-14 Tenant-1',
                'author'        => 'Author Course-14',
                'thumb'         => 'thumb-7.jpg',
                'description'   => 'Description for Course 14',
                'department_id' => 3,
                'sequence_id'   => 1,
                'length_unit'   => 'm',
                'length'        => 150,
                'offline'       => false,
                'mood_tracker'  => false,
                'feedback'      => false,
                'created_at'    => Carbon::create(2020, 11, 25, 9, 0, 0, 0)
            ]
        );

        // 15
        DB::table('courses')->insert(
            [
                'status'        => 'draft',
                'name'          => 'Course-15 Tenant-1',
                'author'        => 'Author Course-15',
                'thumb'         => 'thumb-7.jpg',
                'description'   => 'Description for Course 15',
                'department_id' => 3,
                'sequence_id'   => 3,
                'length_unit'   => 'm',
                'length'        => 160,
                'offline'       => false,
                'mood_tracker'  => false,
                'feedback'      => false,
                'created_at'    => Carbon::create(2020, 11, 25, 9, 0, 0, 0)
            ]
        );
    }
}
