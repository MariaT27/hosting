<?php namespace App\Exceptions;

use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Session\TokenMismatchException;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpKernel\Exception\HttpException;

class Handler extends ExceptionHandler
{
    protected $dontReport = [
        AuthenticationException::class,
        AuthorizationException::class,
        HttpException::class,
        ModelNotFoundException::class,
        TokenMismatchException::class,
        ValidationException::class,
    ];

    public function report(Exception $e)
    {
        parent::report($e);
    }

    public function render($request, Exception $e)
    {
        return parent::render($request, $e);
    }

    protected function convertExceptionToResponse(Exception $e)
    {
        if (config('app.debug', false)) {
            return parent::convertExceptionToResponse($e);
        }

        return response()->view('errors.500', ['exception' => $e], 500);
    }
}
