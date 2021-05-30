<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class IsUser
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
            if (auth()->user()->user_type == "user") {
                return $next($request);
            }
        }else{
            return back()->with('error',"you have to be logged in as a customer to access this page");
        }
        return back()->with('error',"You are not a customer and hence dont have customer access .");
    }
}
