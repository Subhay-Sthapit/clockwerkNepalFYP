<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\customer;

class CustomerController extends Controller
{
    //

    public function create_customer_info(Request $request, User $user){
        $validatedData = $request->validate([
            'profile_picture'=>'required|file',
            'address'=>'required|string',
            'phone_number'=>'required|numeric',
        ]);

        $customer = DB::table('customer')->get();
        $customer->user_id = $user->id;
        $customer->address = $request->address;
        $customer->phone_number = $request->phone_number;
        $customer->profile_picture = $request->profile_picture->store('public/User_images');
        $customer->save();
        return redirect()->route('user.home',$customer->id);

    }
}
