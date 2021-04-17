<?php

namespace App\Http\Controllers;

use App\Models\customer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerFrontendController extends Controller
{
    //

    public function user_home(customer $customer){
        $users = DB::table('users')->get();
        $service_centers = DB::table('service_centers')->get();
        return view('user-home',['customer'=>$customer,'service_centers'=>$service_centers,'users'=>$users]);
    }

    public function user_profile(customer $customer){
        return view('User_Frontend/user_profile',['customer'=>$customer]);
    }

    public function service_center_profile(customer $customer){
        return view('User_Frontend/service_center_profile',['customer'=>$customer]);
    }

    public function user_info_form(){
        return view('User_Frontend/user_info_form');
    }
}
