<?php

namespace App\Http\Controllers\Mobile\V1;

use App\Models\Module;
use App\Models\Sequence;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Traits\ApiResponse;
use Illuminate\Support\Facades\DB;

/**
 * @group Builder/Sequences
 *
 * APIs for managing sequences
 */
class BuilderController extends Controller
{
    use ApiResponse;

    /**
     * Display the specified Sequence.
     *
     * @authenticated
     *
     * @param int $id
     *
     * @queryParam id integer Sequence ID
     *
     * @response   200 {
     *  "success": true,
     *  "code": 200,
     *  "message": "Got Specific Sequence",
     *  "data": {
     *     "id": 4,
     *     "name": "Super Admin",
     *     "order": 1,
     *     "widget_type_id": 1,
     *     "specific_id": 1,
     *     "previous_id": 1,
     *     "widget_included" =>
     *        [
     *           "id": 1,
     *           "widget_type_id": 1,
     *           "button_text": "next",
     *           "settings_id": 1,
     *           "created_at": "2020-11-03 00:00:00",
     *           "updated_at": "2020-11-03 00:00:00"
     *        ],
     *     "widget_settings" => [],
     *     "created_at": "2020-11-03 00:00:00",
     *     "updated_at": "2020-11-03 00:00:00"
     *    }
     * }
     *
     * @response   404 {
     *  "success": false,
     *  "code": 404
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
    public function show(int $id): JsonResponse
    {
        $sequence = Sequence::whereId($id)->with('modules')->first();

        if ($sequence === null) {
            return $this->notFoundResponse();
        }

        return $this->successResponse('Got Specific Sequence', $sequence);
    }

    /**
     * Display the specified Module.
     *
     * @authenticated
     *
     * @param int $id
     *
     * @queryParam id integer Module ID
     *
     * @response   200 {
     *  "success": true,
     *  "code": 200,
     *  "message": "Got Specific Sequence",
     *  "data": {
     *     "id",
     *     "name",
     *     "order",
     *     "widget_type_id",
     *     "specific_id",
     *     "previous_id",
     *     "widget_included" =>
     *        [
     *           "id": 1,
     *           "widget_type_id": 1,
     *           "button_text": "next",
     *           "settings_id": 1,
     *           "created_at": "2020-11-03 00:00:00",
     *           "updated_at": "2020-11-03 00:00:00"
     *         ],
     *     "widget_settings" => [],
     *     "created_at": "2020-11-03 00:00:00",
     *     "updated_at": "2020-11-03 00:00:00"
     *    }
     * }
     *
     * @response   404 {
     *  "success": false,
     *  "code": 404
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
    public function showModule(int $id): JsonResponse
    {
        $module = Module::whereId($id)->first();

        if ($module === null) {
            return $this->notFoundResponse();
        }

        $widgetTypeTableName = $module->widgetType->table_name;

        $widget = DB::table($widgetTypeTableName)
            ->where('id', $module->specific_id)->first();

        if ($widget !== null) {
            $module->widget_included = $widget;
        }

        $module->widget_settings = [];
        if ($widget->settings_id !== null) {
            $module->widget_settings = DB::table('widget_settings')
                ->where('id', $widget->settings_id)->first();
        }

        return $this->successResponse('Got Specific Module', $module);
    }
}
