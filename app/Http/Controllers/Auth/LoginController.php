<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

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

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

//    public function login(Request $request)
//    {
//        $input = $request->all();
//
//        $this->validate($request, [
//            'email' => 'required|email',
//            'password' => 'required',
//        ]);
//
//        if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password'])))
//        {
//            if (auth()->user()->user_type == 'admin') {
//                return redirect()->route('admin.home');
//            }
//            elseif (auth()->user()->user_type == 'service center'){
//                return redirect()->route('service-center.home');
//            }
//            else{
//                return redirect()->route('user.home');
//            }
//        }else{
//            return redirect()->route('login')
//                ->with('error','Email-Address And Password Are Wrong.');
//        }
//
//    }

}
