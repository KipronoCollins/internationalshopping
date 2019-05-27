<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class adminCheckAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

     protected $guards = 'admin';
    public function handle($request, Closure $next, ...$guards)
    {
        
        if (!Auth::check($guards)) {
           
            return redirect()->route('login');
        }


        return $next($request);
    }
}
