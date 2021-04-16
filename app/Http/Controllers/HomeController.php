<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function ServiceCenterHome(){
        return view('service-center-home');
    }

    public function AdminHome(){
        return view('admin-home');
    }

    public function UserHome(){
        return view('user-home');
    }

}
