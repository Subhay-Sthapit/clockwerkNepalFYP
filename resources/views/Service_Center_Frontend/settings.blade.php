@extends('layouts.service_center_master')
@section('title','Service Center Homepage')
@section('content')

    <div class="service-center-profile">
        <div class="service-center-info">
            <div class="container">
                <div class="d-flex flex-wrap justify-content-between">
                    <div class="display-image">
                        <img src="{{asset('storage/'.$service_center->display_picture)}}" alt="">
                    </div>
                    <div class="service-center-description">
                        <h2 class="display-5">{{auth()->user()->name}}</h2>
                        <h4>{{$service_center->address}}</h4>
                        <h5>{{$service_center->phone_number}}</h5>
                        <h5>{{auth()->user()->email}}</h5>
                        <p>
                            {{$service_center->short_description}}
                        </p>
                        <div class="d-flex flex-wrap align-items-center">
                            <a href="{{route('service-center.settings',$service_center->id)}}"><i class="fa fa-cog"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="settings-body">
        <div class="container">
            <div class="heading">
                <h4 class="display-5 mb-5 text-center">Settings</h4>
            </div>
            <button class="btn-danger" href="#">Delete Account</button>
            <button class="btn-secondary" href="#">Change Password</button>
        </div>
    </div>


@endsection
