<?php

/**
 * Generalizing TestsCourses Seeder for Tests of Courses
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

/**
 * Class TestsCoursesSeeder
 *
 * @category Class
 * @package  Database\Seeders
 * @author   Vadiasov Volodymyr <vadiasov.volodymyr@gmail.com>
 * @license  BSD License
 * @link     Database\Seeders
 */
class TestsCoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesForCoursesSeeder::class);
        $this->call(TenantsForCoursesSeeder::class);
        $this->call(DepartmentsForCoursesSeeder::class);
        $this->call(UsersForCoursesSeeder::class);
        $this->call(TagsForCoursesSeeder::class);
        $this->call(CategoriesForCoursesSeeder::class);
        $this->call(CoursesForCoursesSeeder::class);
        $this->call(CourseTagsForCoursesSeeder::class);
        $this->call(CategoryCoursesForCoursesSeeder::class);
    }
}
