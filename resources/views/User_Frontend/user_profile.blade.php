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
                        <a href="#" id="open-button" class="open-button"><i class="fa fa-edit"></i></a>
                        <a href="#"><i class="fa fa-cog"></i></a>
                        {{--                pop up edit form--}}
                        <div class="form-popup">
                            <div class="form-popup-content">
                                <div class="close-form">+</div>
                                <h2 class="display-6 mb-4">Edit Profile</h2>
                                <form action="{{route('customer.update',$customer->id)}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                    <div class="item">
                                        <label for="profile_picture">Edit Profile Picture</label>
                                        <input class="form-control" type="file" name="profile_picture" id="profile_picture" required>
                                    </div>
                                    <div class="item">
                                        <label for="address">Address</label>
                                        <input class="form-control" type="text" placeholder="Enter Address" name="address" id="address" value="{{$customer->address}}" required>
                                    </div>
                                    <div class="item">
                                        <label for="phone_number">Contact Number</label>
                                        <input class="form-control" type="text" placeholder="enter Contact number" name="phone_number" id="phone_number" value="{{$customer->phone_number}}" required>
                                    </div>
                                    <div class="item">
                                        <button type="submit" style="width: 200px" class="btn btn-success">Edit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                {{--      pop up edit form ends          --}}
            </div>
        </div>
    </div>
    <div class="user-history">
        <div class="container">
            <h4 class="display-5 mb-5 text-center">Booking History</h4>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">Booking Date</th>
                    <th scope="col">Service Center Name</th>
                    <th scope="col">Vehicle type</th>
                    <th scope="col">Vehicle name</th>
                    <th scope="col">Status</th>
                </tr>
                </thead>
                <tbody>
                @foreach($bookings as $booking )
                    @if($booking->customer_id == $customer->id)
                        <tr>
                            <td>{{$booking->booking_date}}</td>
                            @foreach($service_centers as $service_center)
                                @if($service_center->id == $booking->service_center_id)
                                    @foreach($users as $user)
                                        @if($service_center->user_id == $user->id)
                                            <td>{{$user->name}}</td>
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                            <td>{{$booking->vehicle_type}}</td>
                            <td>{{$booking->vehicle_name}}</td>
                            <td>
                                {{$booking->booking_status}}
                                @if($booking->booking_status == 'success')
                                    <i class="fa fa-check" style="color:green;"></i>
                                @elseif($booking->booking_status == 'cancelled')
                                    <i class="fa fa-times" style="color:red;"></i>
                                @else
                                    <i class="fa fa-clock-o"></i>
                                    @endif
                            </td>
                        </tr>
                    @endif
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
