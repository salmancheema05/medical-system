<?php

namespace App\Http\Middleware;

use Closure;
use Session;
class officedetailcheck
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
       if (session()->get('doctor_id')==null) {
          return redirect('/register');
    }
        return $next($request);
    }
}
