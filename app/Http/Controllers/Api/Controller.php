<?php

namespace App\Http\Controllers\Api;

class Controller
{
    /**
     * @OA\Info(
     *     version="1.0.0",
     *     title="Laraplate9 API documentation",
     * )
     *
     *
     * @OA\SecurityScheme(
     *   securityScheme="token",
     *   type="http",
     *   scheme="bearer",
     *   bearerFormat="JWT"
     * )
     */
    private function swagger()
    {
        return null;
    }
}
