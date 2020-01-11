<?php

namespace App\Http\Middleware;

use Closure;
use Session;
class isnotlogin
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
        if (Session::get('login_id')==null) {
          return redirect('login');
        }
        return $next($request);
    }
}
