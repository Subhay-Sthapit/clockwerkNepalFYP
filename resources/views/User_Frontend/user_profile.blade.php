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
                    <th scope="col">SN</th>
                    <th scope="col">Booking Date</th>
                    <th scope="col">Service Center Name</th>
                    <th scope="col">Status</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>01/02/2021</td>
                    <td>Makalu Service Center</td>
                    <td>
                        Success
                        <i class="fa fa-check" style="color:green;"></i>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>01/02/2021</td>
                    <td>Makalu Service Center</td>
                    <td>
                        Cancelled
                        <i class="fa fa-times" style="color:red;"></i>
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>01/02/2021</td>
                    <td>Makalu Service Center</td>
                    <td>
                        Pending
                        <i class="fa fa-clock-o"></i>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
