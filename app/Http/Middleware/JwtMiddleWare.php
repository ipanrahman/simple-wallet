<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Exception;
use Firebase\JWT\ExpiredException;
use Firebase\JWT\JWT;

class JwtMiddleWare
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
        $access_token = $request->bearerToken();
        if (!$access_token) {
            return response()->json([
                'error' => 'Access token not provided.',
            ], 401);
        }
        try {
            $credential = JWT::decode($access_token, env('JWT_SECRET'), ['HS256']);
            $user = User::find($credential->sub);
            $request->auth = $user;
            return $next($request);
        } catch (ExpiredException $e) {
            return response()->json([
                'error' => 'An error while decoding access_token.',
            ], 400);
        } catch (Exception $e) {
            return response()->json([
                'error' => 'An error while decoding token.',
            ], 400);
        }
    }
}
