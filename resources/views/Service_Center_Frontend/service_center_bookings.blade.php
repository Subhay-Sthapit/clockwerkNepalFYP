@extends('layouts.service_center_master')
@section('title','Accept Bookings')
@section('content')
    <div class="booking-history">
        <div class="container">
            <div class="heading">
                <h4 class="display-5 mb-5 text-center">Booking History</h4>
            </div>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">Booking Date</th>
                    <th scope="col">Customer Name</th>
                    <th scope="col">Customer Contact Number</th>
                    <th scope="col">Vehicle type</th>
                    <th scope="col">Vehicle name</th>
                    <th scope="col">Booking Description</th>
                    <th scope="col">Status</th>
                    <th scope="col">Accept</th>
                    <th scope="col">Cancel</th>

                </tr>
                </thead>
                <tbody>
                @foreach($bookings as $booking )
                    @if($booking->service_center_id == $service_center->id)
                        <tr>
                            <td>{{$booking->booking_date}}</td>
                            @foreach($customers as $customer)
                                @if($customer->id == $booking->customer_id)
                                    @foreach($users as $user)
                                        @if($customer->user_id == $user->id)
                                            <td>{{$user->name}}</td>
                                            <td>{{$customer->phone_number}}</td>
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                            <td>{{$booking->vehicle_type}}</td>
                            <td>{{$booking->vehicle_name}}</td>
                            <td>{{$booking->booking_description}}</td>
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
                            <td>
                                @if($booking->booking_status == 'pending')
                                    <form style="display: inline-block" method="post" action="{{route('booking.accept',$booking->id)}}" enctype="multipart/form-data">
                                        @csrf
                                        @method('PATCH')
                                        <button class="btn btn-success btn-sm rounded-0" type="submit" data-toggle="tooltip" data-placement="top" title="Accept"><i class="fa fa-check"></i></button>
                                    </form>
                                @endif
                            </td>

                            <td>
                                @if($booking->booking_status == 'pending')
                                    <form style="display: inline-block" method="post" action="{{route('booking.decline',$booking->id)}}" enctype="multipart/form-data">
                                        @csrf
                                        @method('PATCH')
                                        <button class="btn btn-danger btn-sm rounded-0" type="submit" data-toggle="tooltip" data-placement="top" title="Accept"><i class="fa fa-trash"></i></button>
                                    </form>
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
