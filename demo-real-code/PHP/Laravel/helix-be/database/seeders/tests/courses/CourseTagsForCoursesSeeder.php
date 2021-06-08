<?php

/**
 * CourseTags Seeder for Tests of Courses
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
 * Class CourseTagsCourses
 *
 * @category Class
 * @package  Database\Seeders
 * @author   Vadiasov Volodymyr <vadiasov.volodymyr@gmail.com>
 * @license  BSD License
 * @link     Database\Seeders
 */
class CourseTagsForCoursesSeeder extends Seeder
{
    private const TABLE = "course_tags";

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
                'tag_id'    => 1,
                'course_id' => 4
            ]
        );

        // 2
        DB::table(self::TABLE)->insert(
            [
                'tag_id'    => 2,
                'course_id' => 4
            ]
        );

        // 3
        DB::table(self::TABLE)->insert(
            [
                'tag_id'    => 3,
                'course_id' => 1
            ]
        );

        // 4
        DB::table(self::TABLE)->insert(
            [
                'tag_id'    => 4,
                'course_id' => 1
            ]
        );

        // 5
        DB::table(self::TABLE)->insert(
            [
                'tag_id'    => 5,
                'course_id' => 1
            ]
        );

        // 6
        DB::table(self::TABLE)->insert(
            [
                'tag_id'    => 6,
                'course_id' => 1
            ]
        );

        // 7
        DB::table(self::TABLE)->insert(
            [
                'tag_id'    => 3,
                'course_id' => 2
            ]
        );

        // 8
        DB::table(self::TABLE)->insert(
            [
                'tag_id'    => 4,
                'course_id' => 2
            ]
        );

        // 9
        DB::table(self::TABLE)->insert(
            [
                'tag_id'    => 5,
                'course_id' => 2
            ]
        );

        // 10
        DB::table(self::TABLE)->insert(
            [
                'tag_id'    => 3,
                'course_id' => 5
            ]
        );

        // 11
        DB::table(self::TABLE)->insert(
            [
                'tag_id'    => 4,
                'course_id' => 5
            ]
        );

        // 12
        DB::table(self::TABLE)->insert(
            [
                'tag_id'    => 3,
                'course_id' => 6
            ]
        );

        // 13
        DB::table(self::TABLE)->insert(
            [
                'tag_id'    => 4,
                'course_id' => 7
            ]
        );

        // 14
        DB::table(self::TABLE)->insert(
            [
                'tag_id'    => 1,
                'course_id' => 7
            ]
        );

        // 15
        DB::table(self::TABLE)->insert(
            [
                'tag_id'    => 7,
                'course_id' => 3
            ]
        );

        // 16
        DB::table(self::TABLE)->insert(
            [
                'tag_id'    => 8,
                'course_id' => 3
            ]
        );
    }
}
