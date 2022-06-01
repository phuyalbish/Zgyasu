<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class checktheDeveloper
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(!isset($_COOKIE['cookie_developer'])){
            return redirect()->route('developer.login');
        }
        else{
            return $next($request);
        }

    }
}
