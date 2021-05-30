<?php

namespace App\Http\Controllers;

use App\Models\service_center;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiceCenterFrontendController extends Controller
{

    public function service_center_home(service_center $service_center, Request $request){
        if ($service_center->user_id == auth()->user()->getAuthIdentifier()) {
            $reviews = DB::table('reviews')->where('service_center_id', $service_center->id)->paginate(2);
            $customers = DB::table('customers')->get();
            $users = DB::table('users')->get();

            // code to make the ratings dynamic.
            $allRatings = [];
            $numberOfRatings = 0;
            $totalRating = 0;
            $averageRating = 0;
            $ratings = DB::table('reviews')->where('service_center_id', $service_center->id)->get();
            foreach ($ratings as $rating) {
                if ($service_center->id == $rating->service_center_id) {
                    $numberOfRatings++;
                    $totalRating = $totalRating + $rating->rating;
                    $averageRating = $totalRating / $numberOfRatings;
                }
            }
            $allRatings[$service_center->id] = round($averageRating);

            return view('Service_Center_Frontend/service-center-home',
                ['service_center' => $service_center, 'reviews' => $reviews, 'customers' => $customers, 'users' => $users,'allRatings'=>$allRatings]);
        }else{
            $request->session()->flash('error','You can only access your own profile');
            return back();
        }
    }

    public function service_center_info_form(){
        return view('Service_Center_Frontend/service_center_info_form');
    }

    public function service_center_bookings(service_center $service_center, Request $request)
    {
        if ($service_center->user_id == auth()->user()->getAuthIdentifier()) {
            $users = DB::table('users')->get();
            $customers = DB::table('customers')->get();
            $bookings = DB::table('bookings')->get();
            return view('Service_Center_Frontend/service_center_bookings',
                ['service_center' => $service_center, 'users' => $users, 'customers' => $customers, 'bookings' => $bookings]);
        }else{
            $request->session()->flash('error','You can only view your own bookings');
            return back();
        }
    }

}
