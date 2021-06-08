<?php

namespace App\Actions\Course;

use App\Http\Requests\Course\CourseUpdateRequest;
use App\Models\Course;
use App\Models\CourseTag;
use App\Models\Tag;
use JetBrains\PhpStorm\ArrayShape;

class UpdateCourseTagsAction
{
    private Course $course;
    private CourseUpdateRequest $request;

    public function __construct(Course $course, CourseUpdateRequest $request)
    {
        $this->course  = $course;
        $this->request = $request;
    }

    public function updateTags(): array
    {
        $diffTagsArr = $this->diffTagsForUpdate($this->course, $this->request);

        $saveNewTagsResult = $this->saveNewTags($diffTagsArr);
        if ($saveNewTagsResult !== true) {
            return $saveNewTagsResult;
        }

        $deleteTagsResult = $this->deleteTags($diffTagsArr);
        if ($deleteTagsResult !== true) {
            return $deleteTagsResult;
        }

        return [true, ''];
    }

    private function saveNewTags($diffTagsArr): bool|array
    {
        $newTags  = $diffTagsArr['new'];
        $countNew = count($newTags);

        for ($i = 0; $i < $countNew; $i++) {
            // check  tag_id
            $item = Tag::whereId($newTags[$i])->first();
            if ($item === null || $item->department_id !== $this->course->department_id) {
                return [false, 404];
            }

            $courseTag            = new CourseTag();
            $courseTag->course_id = $this->course->id;
            $courseTag->tag_id    = $newTags[$i];

            if ($courseTag->save()) {
                continue;
            } else {
                return [false, 500];
            }
        }

        return true;
    }

    private function deleteTags($diffTagsArr): bool|array
    {
        $tagsToDelete = $diffTagsArr['delete'];
        $countDelete  = count($tagsToDelete);

        for ($n = 0; $n < $countDelete; $n++) {
            $courseTag = CourseTag::whereCourseId($this->course->id)
                ->whereTagId($tagsToDelete[$n])
                ->first();
            try {
                $courseTag->delete();
            } catch (\Exception $e) {
                return [false, 500];
            }
        }

        return true;
    }

    #[ArrayShape(['new' => "array", 'delete' => "array"])]
    private function diffTagsForUpdate($course, $request): array
    {
        $currentTags = CourseTag::whereCourseId($course->id)
            ->get()
            ->pluck('tag_id')
            ->toArray();
        $newTags     = $request['tags'];

        $diffNew      = array_values(array_diff($newTags, $currentTags));
        $diffToDelete = array_values(array_diff($currentTags, $newTags));

        return ['new' => $diffNew, 'delete' => $diffToDelete];
    }
}
