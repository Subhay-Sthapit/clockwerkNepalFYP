<?php

namespace App\Http\Controllers;

use App\Models\customer;
use App\Models\review;
use App\Models\service_center;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    //
    public function create(customer $customer, service_center $service_center, Request $request){
        $review = new review();
        $review->customer_id = $customer->id;
        $review->service_center_id = $service_center->id;
        $review->rating = $request->rating;
        $review->review = $request->review;
        $review->save();
        return back();
    }
}
