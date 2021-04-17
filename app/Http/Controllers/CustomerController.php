<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\customer;

class CustomerController extends Controller
{
    //

    public function create(Request $request){
//        $validatedData = $request->validate([
//            'profile_picture'=>'required|file',
//            'address'=>'required|string',
//            'phone_number'=>'required|numeric',
//        ]);

        $customer = new customer();
        $customer->user_id = auth()->user()->getAuthIdentifier();
        $customer->address = $request->address;
        $customer->phone_number = $request->phone_number;
        $customer->profile_picture = $request->file('profile_picture')->store('User_images');
        $customer->save();
        return redirect()->route('user.home',$customer->id);

    }
}
