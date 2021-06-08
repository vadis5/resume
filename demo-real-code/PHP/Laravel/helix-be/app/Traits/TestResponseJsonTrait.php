<?php

namespace App\Traits;

trait TestResponseJsonTrait
{
    public function responseParsed($response): array
    {
        $responseJSON = json_decode($response->getContent(), true);

        $success      = array_key_exists(
            'data',
            $responseJSON
        ) ? $responseJSON['success'] : null;

        $code         = array_key_exists(
            'code',
            $responseJSON
        ) ? $responseJSON['code'] : null;

        $message      = $responseJSON['message'];

        $data         = array_key_exists(
            'data',
            $responseJSON
        ) ? $responseJSON['data'] : null;

        $errors       = array_key_exists(
            'errors',
            $responseJSON
        ) ? $responseJSON['errors'] : null;

        return [
            'success' => $success,
            'code'    => $code,
            'message' => $message,
            'errors'  => $errors,
            'data'    => $data
        ];
    }
}
