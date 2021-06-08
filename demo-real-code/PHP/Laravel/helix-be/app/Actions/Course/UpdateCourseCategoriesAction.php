<?php

namespace App\Actions\Course;

use App\Http\Requests\Course\CourseUpdateRequest;
use App\Models\Category;
use App\Models\CategoryCourse;
use App\Models\Course;
use JetBrains\PhpStorm\ArrayShape;

class UpdateCourseCategoriesAction
{
    private Course $course;
    private CourseUpdateRequest $request;

    public function __construct(Course $course, CourseUpdateRequest $request)
    {
        $this->course  = $course;
        $this->request = $request;
    }

    public function updateCategories(): array
    {
        $diffCategoriesArr = $this->diffCategoriesForUpdate($this->course,
            $this->request);

        $newCategories = $diffCategoriesArr['new'];
        $countNew      = count($newCategories);

        for ($i = 0; $i < $countNew; $i++) {
            // check  category_id
            $item = Category::whereId($newCategories[$i])->first();
            if ($item === null || $item->department_id !== $this->course->department_id) {
                return [false, 404];
            }

            $categoryCourse              = new CategoryCourse();
            $categoryCourse->course_id   = $this->course->id;
            $categoryCourse->category_id = $newCategories[$i];

            if ($categoryCourse->save()) {
                continue;
            } else {
                return [false, 500];
            }
        }

        $categoriesToDelete = $diffCategoriesArr['delete'];
        $countDelete        = count($categoriesToDelete);

        for ($n = 0; $n < $countDelete; $n++) {
            $categoryCourse = CategoryCourse::whereCourseId($this->course->id)
                ->whereCategoryId($categoriesToDelete[$n])
                ->first();
            try {
                $categoryCourse->delete();
            } catch (\Exception $e) {
                return [false, 500];
            }
        }

        return [true, ''];
    }

    #[ArrayShape([
        'new'    => "array",
        'delete' => "array"
    ])] private function diffCategoriesForUpdate(
        $course,
        $request
    ): array {
        $currentCategories = CategoryCourse::whereCourseId($course->id)
            ->get()
            ->pluck('category_id')
            ->toArray();

        $newCategories     = $request['categories'];

        $diffNew      = array_values(array_diff($newCategories, $currentCategories));
        $diffToDelete = array_values(array_diff($currentCategories, $newCategories));

        return ['new' => $diffNew, 'delete' => $diffToDelete];
    }
}
