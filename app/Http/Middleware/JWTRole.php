<?php

namespace App\Http\Middleware;

use Closure;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Http\Middleware\BaseMiddleware;

class JWTRole extends BaseMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role = null)
    {
        try {
            $tokenRole = $this->auth->parseToken()->getClaim('role');

        } catch (JWTException $exception) {

            return $next($request);
        }

        if ($tokenRole != $role) {
            throw new UnauthorizedHttpException('jwt-auth', 'User role error');
        }

        return $next($request);

    }
}
