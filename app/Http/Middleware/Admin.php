<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class Admin
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
        // if (auth()->user()->roles === 'admin') {
            if (Auth::user() && Auth::user()->roles == 'admin') {
                return $next($request);
            }
        return redirect('/')->with('error','Only ADMIN can access');
    }
}
