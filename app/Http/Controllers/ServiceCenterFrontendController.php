<?php

namespace App\Http\Controllers;

use App\Models\service_center;
use App\Models\User;
use Illuminate\Http\Request;

class ServiceCenterFrontendController extends Controller
{

    public function service_center_home(service_center $service_center){
        return view('Service_Center_Frontend/service-center-home',['service_center'=>$service_center]);
    }

    public function service_center_info_form(){
        return view('Service_Center_Frontend/service_center_info_form');
    }

    public function service_center_bookings(service_center $service_center){
        return view('Service_Center_Frontend/service_center_bookings',['service_center'=>$service_center]);
    }

}
