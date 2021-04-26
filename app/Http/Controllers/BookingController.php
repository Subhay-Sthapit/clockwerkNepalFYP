<?php

namespace App\Http\Controllers;

use App\Models\booking;
use App\Models\customer;
use App\Models\service_center;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    //

    public function create(Request $request, customer $customer, service_center $service_center){
        $booking = new booking();
        $booking->customer_id = $customer->id;
        $booking->service_center_id = $service_center->id;
        $booking->booking_date = $request->booking_date;
        $booking->vehicle_type = $request->vehicle_type;
        $booking->vehicle_name = $request->vehicle_name;
        $booking->booking_description = $request->booking_description;
        $booking->booking_status = "pending";
        $request->session()->flash('message','Request For booking Submitted');
        $booking->save();
        return back();
    }

    public function accept_booking(booking $booking){
        $booking->booking_status = 'success';
        $booking->save();
        return back();
    }

    public function decline_booking(booking $booking){
        $booking->booking_status = 'cancelled';
        $booking->save();
        return back();
    }
}
