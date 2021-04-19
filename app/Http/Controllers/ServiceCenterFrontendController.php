<?php

namespace App\Http\Controllers;

use App\Models\service_center;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiceCenterFrontendController extends Controller
{

    public function service_center_home(service_center $service_center){
        $reviews = DB::table('reviews')->where('service_center_id',$service_center->id)->paginate(2);
        $customers = DB::table('customers')->get();
        $users = DB::table('users')->get();
        return view('Service_Center_Frontend/service-center-home',['service_center'=>$service_center,'reviews'=>$reviews,'customers'=>$customers,'users'=>$users]);
    }

    public function service_center_info_form(){
        return view('Service_Center_Frontend/service_center_info_form');
    }

    public function service_center_bookings(service_center $service_center){
        $users = DB::table('users')->get();
        $customers = DB::table('customers')->get();
        $bookings = DB::table('bookings')->get();
        return view('Service_Center_Frontend/service_center_bookings',['service_center'=>$service_center,'users'=>$users,'customers'=>$customers,'bookings'=>$bookings]);
    }

}
