<?php

namespace App\Http\Controllers;

use App\Models\service_center;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiceCenterController extends Controller
{
    public function create(Request $request): \Illuminate\Http\RedirectResponse
    {
        $service_center = new service_center();
        $service_center->user_id = auth()->user()->getAuthIdentifier();
        $service_center->display_picture = $request->file('display_picture')->store('service_center_images');
        $service_center->address = $request->address;
        $service_center->phone_number = $request->phone_number;
        $service_center->short_description = $request->short_description;
        $service_center->description_picture = $request->file('description_picture')->store('service_center_images');
        $service_center->long_description = $request->long_description;
        $service_center->save();
        return redirect()->route('service-center.home',$service_center->id);
    }

    public function update (Request $request, service_center $service_center){

        $service_center->user_id = auth()->user()->getAuthIdentifier();
        $service_center->display_picture = $request->file('display_picture')->store('service_center_images');
        $service_center->address = $request->address;
        $service_center->phone_number = $request->phone_number;
        $service_center->short_description = $request->short_description;
        $service_center->description_picture = $request->file('description_picture')->store('service_center_images');
        $service_center->long_description = $request->long_description;
        $service_center->save();
        $request->session()->flash('message','Profile Edited');
        return redirect()->route('service-center.home',$service_center->id);
    }

}
