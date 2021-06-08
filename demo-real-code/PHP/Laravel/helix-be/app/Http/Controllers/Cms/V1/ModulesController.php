<?php

namespace App\Http\Controllers\Cms\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\ModuleStoreRequest;
use App\Http\Requests\ModuleUpdateRequest;
use App\Models\Module;
use App\Traits\IndexModelTrait;
use Illuminate\Http\JsonResponse;
use App\Traits\ApiResponse;

/**
 * APIs to manage modules
 */
class ModulesController extends Controller
{
    use IndexModelTrait;
    use ApiResponse;

    /**
     * Display a listing of Modules
     *
     *
     * @authenticated
     *
     * @response 200 {
     *  "success": true,
     *  "code": 200,
     *  "message": "Module Index",
     *  "data": [
     *    {
     *      "id":1,
     *      "name": "Pathway 1, Free Text Question",
     *      "order": 2,
     *      "widget_type_id": 2,
     *      "specific_id": 1,
     *      "previous_id": null,
     *      "created_at": null,
     *      "updated_at": null
     *    }
     *  ]
     * }
     *
     * @response 204 {
     *  "code": 204,
     * }
     *
     * @response 403 {
     *  "success": false,
     *  "code": 403,
     *  "message": "Permission is absent.",
     *  "data": null
     * }
     *
     * @response 401 {
     *  "error": "Unauthorized"
     * }
     *
     * @return JsonResponse
     */

    public function index(): JsonResponse
    {
        $data = Module::all();
        $dataTrait = $this->indexModel($data, 'Module');
        return response()->json($dataTrait[0], $dataTrait[1]);
    }

    /**
     * Store a newly module
     *
     * @authenticated
     *
     * @param ModuleStoreRequest $request
     *
     * @return JsonResponse
     *
     * @response   200 {
     *  "success": true,
     *  "code": 200,
     *  "message": "Created new module.",
     *  "data": {
     *      "id":1,
     *      "name": "Pathway 1, Article",
     *      "order": 6,
     *      "widget_type_id": 6,
     *      "specific_id": 1,
     *      "previous_id": null,
     *      "created_at": null,
     *      "updated_at": null
     *    }
     *
     * @response   422 {
     *  "message":"The given data was invalid.",
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
    public function store(ModuleStoreRequest $request): JsonResponse
    {
        $model = new Module();
        $model->fill($request->all());
        if ($model->save()) {
            return $this->successResponse('Created new module.', $model);
        }
    }


    /**
     * Display the module.
     *
     * @authenticated
     *
     * @param int $id
     *
     *
     * @response   200 {
     *  "success": true,
     *  "code": 200,
     *  "message": "Got the module.",
     *  "data": {
     *      "id":1,
     *      "name": "Pathway 1, Article",
     *      "order": 6,
     *      "widget_type_id": 6,
     *      "specific_id": 1,
     *      "previous_id": null,
     *      "created_at": null,
     *      "updated_at": null
     *  }
     * }
     *
     * @response   404 {
     *  "success": false,
     *  "code": 404,
     *  "message": "Wrong ID.",
     *  "data": null
     * }
     *
     * @response   403 {
     *  "success": false,
     *  "code": 403,
     *  "message": "Permission is absent."
     * }
     *
     * @response   401 {
     *  "error": "Unauthorized"
     * }
     *
     * @return JsonResponse
     */
    public function show(int $id): JsonResponse
    {
        $model = Module::whereId($id)->first();

        if ($model === null) {
            return $this->notFoundResponse();
        }

        return $this->successResponse('Got the module.', $model);
    }

    /**
     * Update the module.
     *
     * @authenticated
     *
     * @param ModuleUpdateRequest $request
     * @param int $id
     *
     * @return JsonResponse
     *
     *
     * @response   200 {
     *  "success": true,
     *  "code": 200,
     *  "message": "Updated the module.",
     *  "data": {
     *      "id":1,
     *      "name": "Pathway 1, Article",
     *      "order": 6,
     *      "widget_type_id": 6,
     *      "specific_id": 1,
     *      "previous_id": null,
     *      "created_at": null,
     *      "updated_at": null
     *    }
     * }
     *
     * @response   422 {
     *  "message":"The given data was invalid."
     * }
     *
     * * @response   404 {
     *  "success": false,
     *  "code": 404,
     *  "message": "Wrong ID.",
     *  "data": null
     * }
     *
     * @response   403 {
     *  "success": false,
     *  "code": 403,
     *  "message": "Permission is absent.",
     *  "data": null
     * }
     *
     * @response   401 {
     *  "error": "Unauthorized"
     * }
     *
     */

    public function update(ModuleUpdateRequest $request, int $id): JsonResponse
    {
        $model = Module::whereId($id)->first();

        if ($model === null) {
            return $this->notFoundResponse();
        }

        $model->fill($request->all());

        if ($model->save()) {
            return $this->successResponse('Updated the module.', $model);
        }

        return $this->errorResponse('Failed the module update.');
    }

    /**
     * Remove the specified resource
     * @authenticated
     *
     * @param int $id
     *
     * @return JsonResponse
     * @response   200 {
     *  "success": true,
     *  "code": 200,
     *  "message": "Deleted the module.",
     *  "data": null
     * }
     *
     * * @response   404 {
     *  "success": false,
     *  "code": 404,
     *  "message": "Wrong ID.",
     *  "data": null
     * }
     *
     * @response   403 {
     *  "success": false,
     *  "code": 403,
     *  "message": "Permission is absent.",
     * }
     *
     * @response   401 {
     *  "error": "Unauthorized"
     * }
     *
     * @throws \Exception
     */
    public function destroy(int $id): JsonResponse
    {
        $model = Module::whereId($id)->first();

        if (!$model) {
            return $this->notFoundResponse();
        }

        if ($model->delete()) {
            return $this->successResponse('Deleted the module.', null);
        }

        return $this->errorResponse('Failed the module delete.');
    }
}
