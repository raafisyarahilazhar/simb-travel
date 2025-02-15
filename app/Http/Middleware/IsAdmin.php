<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        //return Auth::user();
        //exit();

        if(Auth::user() && Auth::user()->roles == 'ADMIN') {
            return $next($request);
        }
        return redirect('/');
    }
}