<?php

namespace App\Http\Middleware;

use Closure;

class apikey
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
        $token= $request->header('APP_KEY');
        if ($token !='12345678910') {
          return response->json(['message' => 'Api key is wrong'],401);
        }
        return $next($request);
    }
}
