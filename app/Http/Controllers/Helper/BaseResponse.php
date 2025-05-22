<?php

namespace App\Http\Controllers\Helper;

use Illuminate\Http\JsonResponse;

class BaseResponse
{
    public static function send(int $code, string $status, string $message, mixed $data = null, mixed $error = null): JsonResponse
    {
        return response()->json([
            'status'  => $status,
            'message' => $message,
            'data'    => $data,
            'error'   => $error,
        ], $code);
    }
}
