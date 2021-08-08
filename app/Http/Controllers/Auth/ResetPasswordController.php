<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Support\Facades\DB;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected function redirectTo(){
        $customers = DB::table('customers')->get();
        $service_centers = DB::table('service_centers')->get();

        foreach ($customers as $customer)
        {
            if (auth()->user()->getAuthIdentifier() == $customer->user_id && auth()->user()->user_type == 'user'){
                return route('user.home',$customer->id);
            }
        }

        foreach ($service_centers as $service_center){
            if(auth()->user()->getAuthIdentifier() == $service_center->user_id && auth()->user()->user_type == 'service center')
            {
                return route('service-center.home',$service_center->id);
            }
        }

        if (auth()->user()->user_type == 'admin')
        {
            return route('admin.home');
        }else{
            return back()->with('error','Please fill the info form');
        }
    }
}
