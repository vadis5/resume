<?php

namespace App\Traits;

use Illuminate\Http\JsonResponse;

/**
 * Trait ApiResponse
 *
 * @package App\Traits
 */
trait ApiResponse
{
    /**
     * @param $message
     * @param $data
     * @return JsonResponse
     */
    protected function successResponse($message, $data): JsonResponse
    {
        return response()->json([
            'success' => true,
            'code' => 200,
            'message' => $message,
            'data' => $data
        ], 200);
    }

    /**
     * @param $message
     *
     * @return JsonResponse
     */
    protected function emptyResponse($message): JsonResponse
    {
        return response()->json([
            'success' => true,
            'code' => 204,
            'message' => $message,
            'data' => null
        ], 204);
    }

    /**
     * @return JsonResponse
     */
    protected function forbiddenResponse(): JsonResponse
    {
        return response()->json([
            'success' => false,
            'code' => 403,
            'message' => 'Permission is absent.',
            'data' => null
        ], 403);
    }

    /**
     * @return JsonResponse
     */
    protected function unauthorizedResponse(): JsonResponse
    {
        return response()->json([
            'success' => false,
            'code' => 401,
            'message' => 'Unauthorized.',
            'data' => null
        ], 401);
    }

    /**
     * @param $message
     * @param $data
     * @return JsonResponse
     */
    protected function validationErrorResponse($message, $data): JsonResponse
    {
        return response()->json([
            'success' => false,
            'code' => 422,
            'message' => $message,
            'data' => $data
        ], 422);
    }

    /**
     * @return JsonResponse
     */
    protected function wrongIdResponse(): JsonResponse
    {
        return response()->json([
            'success' => false,
            'code' => 460,
            'message' => 'Wrong ID.',
            'data' => null
        ], 460);
    }

    /**
     * @param $message string
     *
     * @return JsonResponse
     */
    protected function wrongIdResponseAlt(string $message): JsonResponse
    {
        return response()->json([
            'success' => false,
            'code' => 460,
            'message' => $message,
            'data' => null
        ], 460);
    }

    protected function errorResponse($message): JsonResponse
    {
        return response()->json([
            'success' => false,
            'code' => 500,
            'message' => $message,
            'data' => null
        ], 500);
    }

    protected function notFoundResponse(): JsonResponse
    {
        return response()->json([
            'success' => false,
            'code'    => 404,
            'message' => 'Not found'
        ], 404);
    }
}
