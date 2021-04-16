<?php

namespace App\Http\Controllers;

use App\Models\customer;
use App\Models\User;
use Illuminate\Http\Request;

class UserFrontendController extends Controller
{
    //

    public function user_home(User $user, customer $customer){
        return view('user-home',['user'=>$user,'customer'=>$customer]);
    }

    public function user_profile(){
        return view('User_Frontend/user_profile');
    }

    public function service_center_profile(){
        return view('User_Frontend/service_center_profile');
    }

    public function user_info_form(){
        return view('User_Frontend/user_info_form');
    }
}
