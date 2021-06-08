<?php

namespace App\Actions\Course;

use App\Http\Requests\Course\CourseStoreRequest;
use App\Models\Course;
use App\Models\CourseTag;
use App\Models\Tag;

class StoreCourseTagsAction
{
    private Course $course;
    private CourseStoreRequest $request;

    public function __construct(Course $course, CourseStoreRequest $request)
    {
        $this->course  = $course;
        $this->request = $request;
    }

    public function storeTags(): array
    {
        $tags  = $this->request['tags'];
        $count = count($tags);

        for ($i = 0; $i < $count; $i++) {
            // check  tag_id
            $item = Tag::whereId($tags[$i])->first();
            if ($item === null || $item->department_id !== intval($this->request['department_id'])) {
                return [false, 404];
            }

            $courseTag            = new CourseTag();
            $courseTag->course_id = $this->course->id;
            $courseTag->tag_id    = $tags[$i];

            if ($courseTag->save()) {
                continue;
            } else {
                return [false, 500];
            }
        }

        return [true, ''];
    }
}
