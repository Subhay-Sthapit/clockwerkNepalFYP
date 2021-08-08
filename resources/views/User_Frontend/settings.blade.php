@extends('layouts.user_master')
@section('title','Profile')
@section('content')
    <div class="user-profile">
        <div class="user-personal-info">
            <div class="container">
                <div class="d-flex flex-wrap justify-content-center align-items-center">
                    <div class="profile-picture pe-5">
                        <img src="{{asset('storage/'.$customer->profile_picture)}}" alt="">
                    </div>
                    <div class="user-info">
                        <h4 class="mb-4">{{auth()->user()->name}}</h4>
                        <p><strong>{{$customer->address}}</strong><br><strong>{{$customer->phone_number}}</strong></p>
                        <a href="{{route('user.settings',$customer->id)}}"><i class="fa fa-cog"></i></a>
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

