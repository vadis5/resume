<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestsCompletedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TestCompanyForCompletedSeeder::class);
        $this->call(TestRoleForCompletedSeeder::class);
        $this->call(TestDepartmentForCompletedSeeder::class);
        $this->call(TestCategoriesForCompletedSeeder::class);
        $this->call(TestUserForCompletedSeeder::class);
        $this->call(TestUserCategoriesForCompletedSeeder::class);
        $this->call(TestSequenceTypesForCompletedSeeder::class);
        $this->call(TestSequencesForCompletedSeeder::class);
        $this->call(TestWidgetTypesForCompletedSeeder::class);
        $this->call(TestWidgetSettingsForCompletedSeeder::class);
        $this->call(TestWidgetSimpleQuestionForCompletedSeeder::class);
        $this->call(TestWidgetFreeTextQuestionForCompletedSeeder::class);
        $this->call(TestWidgetSliderQuestionForCompletedSeeder::class);
        $this->call(TestWidgetMediaQuestionForCompletedSeeder::class);
        $this->call(TestWidgetMediaAnswerQuestionForCompletedSeeder::class);
        $this->call(TestWidgetArticleForCompletedSeeder::class);
        $this->call(TestWidgetLinkExternalForCompletedSeeder::class);
        $this->call(TestWidgetLinkInternalForCompletedSeeder::class);
        $this->call(TestModulesForCompletedSeeder::class);
        $this->call(TestModuleSequencesForCompletedSeeder::class);
        $this->call(TestWidgetOnboardingForCompletedSeeder::class);
        $this->call(TestCoursesForCompletedSeeder::class);
        $this->call(TestCourseCategoriesForCompletedSeeder::class);
        $this->call(TestCompletedForCompletedSeeder::class);
    }
}
