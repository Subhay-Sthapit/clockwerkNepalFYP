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
        $customers = DB::table('customers')->get();
        if (Auth::check()) {
            foreach ($customers as $customer)
            {
                if (auth()->user()->user_type == "user" && auth()->user()->getAuthIdentifier() == $customer->user_id){
                    return $next($request);
                }
            }
        }
        return redirect('/')->with('error',"You don't have user access.");
    }
}
