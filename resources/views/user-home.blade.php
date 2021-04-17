@extends('layouts.user_master')
@section('title','User Home page')
@section('content')
    <div class="search-bar-section">
        <div class="container">
            <form action="#" class="site-search d-flex flex-wrap justify-content-center">
                <input type="text" class="form-control search-bar me-2" placeholder="Search Service Center">
                <button type="button" class="btn btn-primary">
                    Search
                    <svg xmlns="http://www.w3.org/2000/svg" height="10pt" version="1.1" viewBox="-1 0 136 136.21852" width="10pt" id="fi_1086933">
                        <g id="surface1">
                            <path d="M 93.148438 80.832031 C 109.5 57.742188 104.03125 25.769531 80.941406 9.421875 C 57.851562 -6.925781 25.878906 -1.460938 9.53125 21.632812 C -6.816406 44.722656 -1.351562 76.691406 21.742188 93.039062 C 38.222656 104.707031 60.011719 105.605469 77.394531 95.339844 L 115.164062 132.882812 C 119.242188 137.175781 126.027344 137.347656 130.320312 133.269531 C 134.613281 129.195312 134.785156 122.410156 130.710938 118.117188 C 130.582031 117.980469 130.457031 117.855469 130.320312 117.726562 Z M 51.308594 84.332031 C 33.0625 84.335938 18.269531 69.554688 18.257812 51.308594 C 18.253906 33.0625 33.035156 18.269531 51.285156 18.261719 C 69.507812 18.253906 84.292969 33.011719 84.328125 51.234375 C 84.359375 69.484375 69.585938 84.300781 51.332031 84.332031 C 51.324219 84.332031 51.320312 84.332031 51.308594 84.332031 Z M 51.308594 84.332031 " style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;"></path>
                        </g>
                    </svg>
                </button>
            </form>
        </div>
    </div>

    <div class="heading">
        <h1 class="display-6">Vehicle Service Centers Available For You</h1>
    </div>

    <div class="service-centers">
        <div class="container">
            <div class="row row-cols-3">
                @foreach($service_centers as $service_center)
                    <div class="col">
                        <div class="service-center-individual">
                            <div class="service-center-image">
                                <img src="{{asset('User_Frontend/images/service_center.jpg')}}" alt="">
                                <div class="rating-score">
                                    <span class="score-txt">4.0</span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                            </div>
                            <div class="service-center-description">
                                <h4>
                                    @foreach($users as $user)
                                        @if($user->id == $service_center->user_id)
                                            {{$user->name}}
                                        @endif
                                    @endforeach
                                </h4>
                                <h6 style="font-style: italic">{{$service_center->address}}</h6>
                                <h6 style="font-style: italic">{{$service_center->phone_number}}</h6>
                                <a class="btn btn-primary" href="{{route('user.service_center_profile',[$customer->id,$service_center->id])}}">View Profile</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
