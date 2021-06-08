<?php

namespace App\Actions\Course;

use App\Http\Requests\Course\CourseStoreRequest;
use App\Models\Category;
use App\Models\CategoryCourse;
use App\Models\Course;

class StoreCourseCategoriesAction
{
    private Course $course;
    private CourseStoreRequest $request;

    public function __construct(Course $course, CourseStoreRequest $request)
    {
        $this->course  = $course;
        $this->request = $request;
    }

    public function storeCategories(): array
    {
        $categories = $this->request['categories'];
        $count      = count($categories);

        for ($i = 0; $i < $count; $i++) {
             // check  if the category belong to the department
            $item = Category::whereId($categories[$i])
                ->first();

            if ($item === null || $item->department_id !== intval($this->request['department_id'])) {
                return [false, 404];
            }

            $categoryCourse              = new CategoryCourse();
            $categoryCourse->course_id   = $this->course->id;
            $categoryCourse->category_id = $categories[$i];

            if ($categoryCourse->save()) {
                continue;
            } else {
                return [false, 500];
            }
        }

        return [true, ''];
    }
}
