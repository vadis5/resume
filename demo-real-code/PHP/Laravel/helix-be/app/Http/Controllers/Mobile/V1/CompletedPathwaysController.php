<?php

namespace App\Http\Controllers\Mobile\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Course\CourseFilteredRequest;
use App\Models\CategoryCourse;
use App\Models\Completed;
use App\Models\Course;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use App\Traits\IndexModelTrait;
use App\Traits\ApiResponse;

/**
 * @group Completed Pathways
 *
 * APIs for managing Courses
 */
class CompletedPathwaysController extends Controller
{
    use IndexModelTrait;
    use ApiResponse;

    /**
     * Display a listing of the completed pathways of the user with filters and sorts.
     *
     * @authenticated
     *
     * @response 200 {
     *  "success": true,
     *  "code": 200,
     *  "message": "Created Pathway Index",
     *  "current_page": 1,
     *  "data": [
     *    {
     *     "id": 4,
     *     "name": "Pathway Theme 1",
     *     "developer_id": 1,
     *     "author": "Pathway Author Name",
     *     "thumb": "thumb-file-name.jpg",
     *     "description": "Description text",
     *     "like": 100,
     *     "status": "draft",
     *     "length_unit": "m",
     *     "length": 20,
     *     "offline": false,
     *     "mood_tracker": false,
     *     "feedback": false,
     *     "created_at": "2020-11-03 00:00:00",
     *     "updated_at": "2020-11-03 00:00:00"
     *    }
     *  ],
     *           'first_page_url',
     *  "from": 1,
     *  "last_page": 3,
     *  "last_page_url": "/3",
     *  "links": "",
     *  "next_page_url": "/2",
     *  "path": "",
     *  "per_page": 10,
     *  "prev_page_url": "",
     *  "to": "",
     *  "total": 3
     * }
     *
     * @response 204 {
     *  "success": true,
     *  "code": 204,
     *  "message": "Empty Pathway Index",
     *  "data": null
     * }
     *
     * @response   422 {
     *  "message":"The given data was invalid.",
     *  "errors": {
     *   "details":["The details field is required."],
     *   "details.name":["The name field is required."],
     *   "details.status":["The status field is required."],
     *   "details.length_unit":["The length_unit field is required."],
     *   "details.length":["The length field is required."],
     *   "details.offline":["The offline field is required."],
     *   "details.mood_tracker":["The mood_tracker field must be a bool."],
     *   "details.feedback":["The feedback field must be a bool."],
     *   "tags":["The tags field must be an array."],
     *   "categories":["The categories field must be an array."]
     *  }
     * }
     *
     * @response 403 {
     *  "success": false,
     *  "code": 403,
     *  "message": "Permission is absent",
     *  "data": null
     * }
     *
     * @response 401 {
     *  "error": "Unauthorized"
     * }
     *
     * @param CourseFilteredRequest $request
     *
     * @return JsonResponse
     */
    public function index(CourseFilteredRequest $request): JsonResponse
    {

        $user = Auth::user();

        $completedPathways = Completed::whereUserId($user->id)
            ->whereCompletedableType('App\Models\Course')
            ->get()
            ->pluck('completedable_id')
            ->toArray();

        $query = Course::whereIn('id', $completedPathways)->withCount('modules');

        // filter by category
        if ($request->has('category_id')) {
            $courseIds = CategoryCourse::whereCategoryId($request->category_id)
                ->get()
                ->pluck('course_id')
                ->toArray();
            $query->whereIn('id', $courseIds);
        }

//        // Future feature
//        // filter by tag
//        if ($request->has('tag_id')) {
//            $courseIds = CourseTag::whereTagId($request->tag_id)
//                ->get()
//                ->pluck('course_id')
//                ->toArray();
//            $query->whereIn('id', $courseIds);
//        }

        // sort by length
        if ($request->has('length')) {
            if ($request->length === 'desc') {
                $query->orderByDesc('length');
            }
            if ($request->length === 'asc') {
                $query->orderBy('length');
            }
        }

//        // Future feature
//        // sort by author
//        if ($request->has('author')) {
//            if ($request->author === 'desc') {
//                $query->orderByDesc('author');
//            }
//            if ($request->length === 'asc') {
//                $query->orderBy('author');
//            }
//        }

        $pathways = $query->paginate(10);

        if (count($pathways->items()) === 0) {
            return $this->emptyResponse('Empty Course Index.');
        }

        return $this->successResponse('List of the Completed Pathways.', $pathways);
    }

    /**
     * Display a number of the user's completed pathways.
     *
     * @authenticated
     *
     * @response   200 {
     *  "success": true,
     *  "code": 200,
     *  "message": "Number of Completed Pathways",
     *  "data": 3
     *
     * @response   204 {
     *  "success": true,
     *  "code": 204,
     *  "message": "Empty Completed Pathways Index",
     *  "data": null
     * }
     *
     * @response   403 {
     *  "success": false,
     *  "code": 403,
     *  "message": "Permission is absent",
     *  "data": null
     * }
     *
     * @response   401 {
     *  "error": "Unauthorized"
     * }
     *
     * @return JsonResponse
     */
    public function count(): JsonResponse
    {
        $user = Auth::user();

        $completedPathways = Completed::whereUserId($user->id)
            ->whereCompletedableType('App\Models\Course')
            ->get();

        $count = count($completedPathways);
        if ($count === 0) {
            return $this->emptyResponse('Empty Completed Pathways Index.');
        }

        return $this->successResponse(
            'Number of Completed Pathways.',
            $count
        );
    }

    /**
     * Complete a pathway.
     *
     * @authenticated
     *
     * @param $id
     *
     * @return JsonResponse
     *
     * @response   200 {
     *  "success": true,
     *  "code": 200,
     *  "message": "Completed Pathway",
     *  "data": null
     * }
     *
     * @response   404 {
     *  "success": false,
     *  "code": 404,
     *  "message": "Not found"
     * }
     *
     * @response   403 {
     *  "success": false,
     *  "code": 403,
     *  "message": "Permission is absent",
     *  "data": null
     * }
     *
     * @response   401 {
     *  "error": "Unauthorized"
     * }
     */
    public function complete($id): JsonResponse
    {
        $pathway = Course::whereId($id)->first();

        // 404
        if ($pathway === null) {
            return $this->notFoundResponse();
        }
        // 200
        $completed                     = new Completed();
        $completed->user_id            = Auth::id();
        $completed->completedable_id   = $id;
        $completed->completedable_type = 'App\Models\Course';
        $completed->save();

        return $this->successResponse("The Pathway is completed", null);
    }
}
