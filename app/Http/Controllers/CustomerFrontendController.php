<?php

namespace App\Http\Controllers;

use App\Models\customer;
use App\Models\service_center;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;

use function Sodium\add;

class CustomerFrontendController extends Controller
{
    //

    public function user_home(customer $customer,Request $request)
    {
        if ($customer->user_id == auth()->user()->getAuthIdentifier()) {
            if (!is_null($request->search)) {
                $users = DB::table('users')->where('name', 'LIKE', '%' . $request->search . '%')->get(['id','name']);
                $searching_by = "name";
                if (count($users) > 0) {
                    $service_centers = DB::table('service_centers')->get();
                } else {
                    $users = DB::table('users')->where('user_type', '=', 'service center')->get(['id', 'name']);
                    $service_centers = DB::table('service_centers')->where('address', 'LIKE', '%' . $request->search . '%')->get();
                    $searching_by = "address";
                }
            } else {
                $users = DB::table('users')->where('user_type', '=', 'service center')->get(['id', 'name']);
                $service_centers = DB::table('service_centers')->paginate(6);
                $searching_by = "none";
            }
            $reviews = DB::table('reviews')->get(['id','service_center_id','rating']);

            // code to make the average ratings dynamic
            $allRatings =[];
            foreach ($service_centers as $service_center){
                $numberOfRatings = 0;
                $totalRating = 0;
                $averageRating = 0;
                foreach ($reviews as $review){
                    if ($service_center->id == $review->service_center_id){
                        $numberOfRatings++;
                        $totalRating = $totalRating + $review->rating;
                        $averageRating = $totalRating/$numberOfRatings;
                    }
                }
                $allRatings[$service_center->id]=round($averageRating);

            }
            // code to make the average rating dynamic ends here.


            return view('user-home', ['customer' => $customer, 'service_centers' => $service_centers, 'users' => $users, 'searching_by' => $searching_by,'allRatings'=>$allRatings]);
        }else{
            $request->session()->flash('error','You can only access your own homepage');
            return back();
        }
    }

    public function user_profile(customer $customer, Request $request){
        if($customer->user_id == auth()->user()->getAuthIdentifier()) {
            $users = DB::table('users')->get(['id', 'name', 'email']);
            $service_centers = DB::table('service_centers')->get();
            $bookings = DB::table('bookings')->where('customer_id', '=', $customer->id)->paginate(6);
            return view('User_Frontend/user_profile',
                ['customer' => $customer, 'bookings' => $bookings, 'users' => $users, 'service_centers' => $service_centers]);
        }else{
            $request->session()->flash('error','You can only access your own profile');
            return back();
        }

    }

    public function service_center_profile(customer $customer, service_center $service_center)
    {
        if ($customer->user_id == auth()->user()->getAuthIdentifier()) {
            $users = DB::table('users')->get(['id', 'name', 'email']);
            $reviews = DB::table('reviews')->where('service_center_id', $service_center->id)->paginate(2);
            $customers = DB::table('customers')->get();
            foreach ($users as $user) {
                if ($user->id == $service_center->user_id) {
                    $passing_user = $user;
                }
            }
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
            return view('User_Frontend/service_center_profile',
                ['customer' => $customer, 'service_center' => $service_center,
                    'user' => $passing_user, 'reviews' => $reviews, 'customers' => $customers, 'users' => $users, 'allRatings' => $allRatings]);
        }
        else{
            return back()->with('error',"you can only access your own account");
        }
    }

    public function user_info_form(){
        return view('User_Frontend/user_info_form');
    }

    public function settings(customer $customer){
        if ($customer->user_id == auth()->user()->getAuthIdentifier()) {
            return view('User_Frontend/settings', ['customer' => $customer]);
        }else{
            return back()->with('error',"you can only access your own settings page");
        }
    }
}
