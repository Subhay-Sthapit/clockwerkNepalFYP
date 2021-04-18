<?php

namespace App\Http\Controllers;

use App\Models\customer;
use App\Models\service_center;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerFrontendController extends Controller
{
    //

    public function user_home(customer $customer){
        $users = DB::table('users')->get();
        $service_centers = DB::table('service_centers')->paginate(6);
        return view('user-home',['customer'=>$customer,'service_centers'=>$service_centers,'users'=>$users]);
    }

    public function user_profile(customer $customer){
        $users = DB::table('users')->get();
        $service_centers = DB::table('service_centers')->get();
        $bookings = DB::table('bookings')->get();
        return view('User_Frontend/user_profile',['customer'=>$customer,'bookings'=>$bookings,'users'=>$users,'service_centers'=>$service_centers]);
    }

    public function service_center_profile(customer $customer, service_center $service_center){
        $users = DB::table('users')->get();
        $reviews = DB::table('reviews')->paginate(2);
        $customers = DB::table('customers')->get();
        foreach ($users as $user){
            if ($user->id == $service_center->user_id){
                $passing_user = $user;
            }
        }
        return view('User_Frontend/service_center_profile',['customer'=>$customer,'service_center'=>$service_center,'user'=>$passing_user,'reviews'=>$reviews,'customers'=>$customers,'users'=>$users]);
    }

    public function user_info_form(){
        return view('User_Frontend/user_info_form');
    }
}
