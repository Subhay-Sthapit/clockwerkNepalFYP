@extends('layouts.user_master')
@section('title','Service Center Profile')
@section('content')


    <div class="service-center-profile">
        <div class="service-center-info">
            <div class="container">
                <div class="d-flex flex-wrap justify-content-between">
                    <div class="display-image pe-5">
                        <img src="{{asset('storage/'.$service_center->display_picture)}}" alt="">
                    </div>
                    <div class="service-center-description">
                        <h2 class="display-5 mb-5">{{$user->name}}</h2>
                        <h4>{{$service_center->address}}</h4>
                        <h5>{{$service_center->phone_number}}</h5>
                        <h5>{{$user->email}}</h5>
                        <p>
                            {{$service_center->short_description}}
                        </p>
                        <div class="d-flex flex-wrap align-items-center">
                            <div class="rating-score me-2">
                                <span class="score-txt">4.0</span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                            </div>
                            <button id="open-booking" type="button" class="btn btn-primary me-2">Make a Booking</button>
                            <a href="#" class="btn btn-outline-primary">Write a Review <i class="fa fa-comment"></i></a>
                        </div>
                        {{--                    booking pop up form --}}
                        <div class="booking-popup-form">
                            <div class="booking-popup-from-content">
                                <div class="close-booking-form">+</div>
                                <h2 class="display-6 mb-3">Request a Booking</h2>

                                <form action="{{route('booking.create',[$customer->id,$service_center->id])}}" class="booking-form" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="item">
                                        <label for="booking_date">Date for booking</label>
                                        <input class="form-control" type="date" name="booking_date" id="booking_date" required>
                                    </div>
                                    <div class="item">
                                        <label for="vehicle_type">Type of vehicle</label>
                                        <select class="form-control" name="vehicle_type" id="vehicle_type">
                                            <option selected>Two-Wheeler</option>
                                            <option>Four-Wheeler</option>
                                        </select>
                                    </div>
                                    <div class="item">
                                        <label for="vehicle_name">Vehicle Name</label>
                                        <input class="form-control" type="text" name="vehicle_name" id="vehicle_name" placeholder="eg. honda shine" required>
                                    </div>
                                    <div class="item">
                                        <label for="booking_description">Description for booking:</label>
                                        <textarea class="form-control" type="text" name="booking_description" id="booking_description" placeholder="enter description for booking e.g. what problems you have in your vehicle , etc." required></textarea>
                                    </div>
                                    <div class="agree-checkbox">
                                        <input type="checkbox" id="agreeToTerms" name="agreeToTerms" required>
                                        <label for="agreeToTerms">I agree that my contact info is shared with the service center for making the booking.</label>
                                    </div>
                                    <button type="submit" class="btn btn-success" style="width: 200px">Request Booking</button>
                                </form>
                            </div>
                        </div>
                        {{--                    booking pop up form ends --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="about-service-center">
            <div class="container">
                <div class="heading">
                    <h2 class="display-5 mb-5 text-center">About</h2>
                </div>
                <div class="about-description">
                    <p>{{$service_center->long_description}}</p>
                    <img src="{{asset('storage/'.$service_center->description_picture)}}" alt="">
                </div>
            </div>
        </div>

        <div class="service-center-reviews">
            <div class="container">
                <div class="heading">
                    <h2 class="display-5 mb-5 text-center">Reviews By Clients</h2>
                </div>
                <div class="reviewer-info">
                    <ul>
                        <li>
                            <img src="{{asset('User_Frontend/images/user_profile_pictures/user_profile_picture.jpg')}}" alt="">
                            <h5>Mukesh</h5>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <p>
                                yo tah khatra po cha nih thaha cha tmi lai solit
                                yo tah khatra po cha nih thaha cha tmi lai solit
                                yo tah khatra po cha nih thaha cha tmi lai solit
                                yo tah khatra po cha nih thaha cha tmi lai solit
                            </p>
                        </li>

                        <li>
                            <img src="{{asset('User_Frontend/images/user_profile_pictures/user_profile_picture.jpg')}}" alt="">
                            <h5>Mukesh</h5>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <p>
                                yo tah khatra po cha nih thaha cha tmi lai solit
                                yo tah khatra po cha nih thaha cha tmi lai solit
                                yo tah khatra po cha nih thaha cha tmi lai solit
                                yo tah khatra po cha nih thaha cha tmi lai solit
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
