<?php

namespace App\Traits;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;

trait DeleteModelTrait
{
    public function deleteModel($model, $name): array
    {
        if (!$model) {
            return [[
                'success' => false,
                'code'    => 460,
                'message' => 'Wrong ID.',
                'data'    => null
            ], 460];
        }

        $authUser = Auth::user();

        if ($authUser->can('destroy', $model)) {

            if ($model->delete()) {
                return[[
                    'success' => true,
                    'code'    => 200,
                    'message' => 'Deleted The ' . $name . '.',
                    'data'    => null
                ], 200];
            }

            return [[
                'success' => false,
                'code'    => 500,
                'message' => 'Failed The ' . $name . ' Delete.',
                'data'    => null
            ], 500];
        }


        return [[
            'success' => false,
            'code'    => 403,
            'message' => 'You do not have permission.',
            'data'    => null
        ], 403];
    }
}
