<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsServiceCenter
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
        if (Auth::check()) {
            if (auth()->user()->user_type == "service center") {
                return $next($request);
            }
        }else{
            return back()->with('error',"you have to be logged in as a service center to access this page");
        }
        return back()->with('error',"You don't have service center access as you are not registered as a service center.");
    }
}
