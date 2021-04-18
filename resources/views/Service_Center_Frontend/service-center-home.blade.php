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
                            <div class="rating-score me-3">
                                <span class="score-txt">4.0</span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                            </div>
                            <a href="#" id="open-button" class="open-button me-3"><i class="fa fa-edit"></i></a>
                            <a href="#"><i class="fa fa-cog"></i></a>
                        </div>
                        {{--                    booking pop up form --}}
                        <div class="form-popup">
                            <div class="form-popup-content">
                                <div class="close-service-center-profile-edit-form">+</div>
                                <div class="heading">
                                    <h2 class="display-6 text-center mb-5">Edit Your Profile</h2>
                                </div>
                                <form action="{{route('service-center.update',$service_center->id)}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                    <div class="item custom-file-upload">
                                        <label for="display_picture"><i class="fa fa-user-circle"></i><i class="fa fa-camera"></i></label>
                                        <input type="file" name="display_picture" id="display_picture" value="{{asset('storage/'.$service_center->display_picture)}}" required>
                                        <h4 class="file-path text-center"></h4>
                                    </div>
                                    <div class="item">
                                        <label for="address">Address</label>
                                        <input type="text" name="address" id="address" placeholder="Enter Address" value="{{$service_center->address}}" required>
                                    </div>
                                    <div class="item">
                                        <label for="phone_number">Contact Number</label>
                                        <input type="text" name="phone_number" id="phone_number" placeholder="Enter Phone Number" value="{{$service_center->phone_number}}" required>
                                    </div>
                                    <div class="item">
                                        <label for="short_description">Short Description of Company</label>
                                        <textarea type="text" name="short_description" id="short_description" placeholder="enter short description of the company" cols="30" rows="10" required>{{$service_center->short_description}}</textarea>
                                    </div>
                                    <div class="item custom-file-upload">
                                        <label for="description_picture"><i class="fa fa-user-circle"></i><i class="fa fa-camera"></i></label>
                                        <input type="file" name="description_picture" id="description_picture" required>
                                        <h4 class="file-path text-center"></h4>
                                    </div>
                                    <div class="item">
                                        <label for="long_description">Long Description of company</label>
                                        <textarea type="text" name="long_description" id="long_description" placeholder="enter long description of the company" cols="60" rows="10" required>{{$service_center->long_description}}</textarea>
                                    </div>
                                    <div class="item">
                                        <button type="submit" class="btn btn-success" style="width: 150px">Submit Changes</button>
                                    </div>
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
                    <h2 class="display-5 text-center mb-5">About</h2>
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
                    <h2 class="display-5 text-canter mb-5">Reviews By Clients</h2>
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

    <script>
        jQuery(document).ready(function(){
            jQuery("div.custom-file-upload").each(function(){
                jQuery(this).find("input[type='file']").on('change', function(){
                    var dataPath = jQuery(this).val();
                    jQuery(this).parents('.custom-file-upload').find('.file-path').text(dataPath);
                });
            });
        });
    </script>
@endsection
