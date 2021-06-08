<?php

/**
 * TenantCourses Seeder for Tests of Courses
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
 * Class TenantCoursesCourses
 *
 * @category Class
 * @package  Database\Seeders
 * @author   Vadiasov Volodymyr <vadiasov.volodymyr@gmail.com>
 * @license  BSD License
 * @link     Database\Seeders
 */
class DepartmentCoursesForCoursesSeeder extends Seeder
{
    private const TABLE = 'department_courses';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table(self::TABLE)->insert(
            [
                'department_id' => 1,
                'course_id' => 4
            ]
        );

        DB::table(self::TABLE)->insert(
            [
                'department_id' => 2,
                'course_id' => 1
            ]
        );

        DB::table(self::TABLE)->insert(
            [
                'department_id' => 2,
                'course_id' => 2
            ]
        );

        DB::table(self::TABLE)->insert(
            [
                'department_id' => 2,
                'course_id' => 5
            ]
        );

        DB::table(self::TABLE)->insert(
            [
                'department_id' => 2,
                'course_id' => 6
            ]
        );

        DB::table(self::TABLE)->insert(
            [
                'department_id' => 2,
                'course_id' => 7
            ]
        );

        DB::table(self::TABLE)->insert(
            [
                'department_id' => 3,
                'course_id' => 3
            ]
        );
    }
}
