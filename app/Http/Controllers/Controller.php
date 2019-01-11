<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    protected function ok($message, $data)
    {
        return response()->json([
            'code' => 200,
            'status' => 'success',
            'message' => $message,
            'results' => $data,
        ], 200);
    }

    protected function notFound($message, $data = null)
    {
        return response()->json([
            'code' => 404,
            'status' => 'success',
            'message' => $message,
            'results' => $data,
        ], 404);
    }
    protected function badRequest($message, $data = null)
    {
        return response()->json([
            'code' => 400,
            'status' => 'success',
            'message' => $message,
            'results' => $data,
        ], 400);
    }
}
