<?php

namespace App\Http\Middleware;

use Closure;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Http\Middleware\Authenticate;

class JWT extends Authenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // // $headers = apache_request_headers();
        // // $request->headers->set('Authorization', $headers['Authorization']); // set header in request
        // try {
        //     JWTAuth::parseToken()->authenticate();
        //     return $next($request);
        // } catch (\Exception $e) {
        //     return response()->json(['message' => 'token expired'], 401);
        //     Logs::saveLogDb($e, [], "JWT middleware error");
        // }
        return $next($request);
    }
}
