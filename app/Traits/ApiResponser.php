<?php

namespace App\Traits;

use Illuminate\Http\JsonResponse;

trait ApiResponser
{
    /**
     * Return a success JSON response.
     */
    protected function successResponse(string $message, int $status_code = 200, $data = []): JsonResponse
    {
        $response = [
            'success' => true,
            'message' => $message,
        ];

        if (!empty($data)) {
            $response['data'] = $data;
        }

        return response()->json($response, $status_code);
    }

    /**
     * Return an error JSON response.
     */
    protected function errorResponse(string $message, \Exception $exception = null, int $status_code = 500): JsonResponse
    {
        $response = [
            'success' => false,
            'message' => $message,
        ];

        if ($exception) {
            $response['error'] = $exception->getMessage();
        }

        return response()->json($response, $status_code);
    }
} 