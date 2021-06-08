<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(DemoData3Seeder::class);

//        $this->call(CompanySeeder::class);
//        $this->call(DepartmentSeeder::class);
//        $this->call(RoleSeeder::class);
//        $this->call(UserSeeder::class);
        $this->call(TagSeeder::class);
//        $this->call(CategorySeeder::class);
//        $this->call(CoursesSeeder::class);
        $this->call(CourseTagSeeder::class);
        $this->call(DatabaseTestAccountsSeeder::class);
//        $this->call(CategoryCoursesSeeder::class);
        $this->call(TestPermissionSeeder::class);
        $this->call(ProfileSeeder::class);
//        $this->call(DatabaseWidgetTypeSeeder::class);
        $this->call(DatabaseOnboardingSequenceSeeder::class);
        $this->call(DatabaseTenantOnboardingScreenSeeder::class);
//        $this->call(DatabaseWidgetSeeder::class);
        $this->call(DatabaseMoodTrackerActivitySeeder::class);
        $this->call(DatabaseMoodTrackerFeelingSeeder::class);
    }
}
