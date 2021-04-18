<?php

namespace App\Http\Controllers;

use App\Models\customer;
use App\Models\review;
use App\Models\service_center;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReviewController extends Controller
{
    //
    public function create(customer $customer, service_center $service_center, Request $request){
        $bookings = DB::table('bookings')->get();
        foreach($bookings as $booking){
            if ($booking->customer_id == $customer->id && $booking->service_center_id == $service_center->id){
                $review = new review();
                $review->customer_id = $customer->id;
                $review->service_center_id = $service_center->id;
                $review->rating = $request->rating;
                $review->review = $request->review;
                $review->save();
                $request->session()->flash('message','Review Submitted');
                return back();
            }
        }
        $request->session()->flash('error','You Can only review service centers if you have used their services');
        return back();
    }
}
