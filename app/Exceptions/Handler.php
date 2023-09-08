<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Support\Facades\Response;
use Throwable;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });
        $this->renderable(function(TokenInvalidException $e){
            return Response::json(['message' => 'El token es inválido.'],401);
        });
        $this->renderable(function (TokenExpiredException $e) {
            return Response::json(['message' => 'El token ha expirado.'],401);
        });
        $this->renderable(function (JWTException $e) {
            return Response::json(['message' => 'El token es inválido o ha expirado'],401);
        });
    }
}
