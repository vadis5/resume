<?php

namespace App\Traits;

trait IndexModelTrait
{
    public function indexModel($models, $name): array
    {
        if ($models->count() === 0) {
            return [[
                'success' => true,
                'code'    => 204,
                'message' => 'Empty '. $name .' Index',
                'data'    => null
            ], 204];
        }

        return [[
            'success' => true,
            'code'    => 200,
            'message' => $name . ' Index',
            'data'    => $models
        ], 200];
    }
}
