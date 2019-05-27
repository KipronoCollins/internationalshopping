<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Session;

class checkAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, ...$guards) 
    {
        if (!Auth::check()) {
           
            Session::put('form-data', [
                'data'  => $request->except(['_token']),
            ]);
            

            return redirect()->route('login');
        }
        else
        {
            Session::put('form-data', [
                'data'  => $request->except(['_token']),
            ]);
        }


        return $next($request);
    }
}
