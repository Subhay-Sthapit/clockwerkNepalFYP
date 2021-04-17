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
                        <button type="button" class="btn-success" style="height: 30px">
                            3.5
                            <svg height="10pt" viewBox="0 -10 511.98685 511" width="10pt" xmlns="http://www.w3.org/2000/svg" id="fi_1828884"><path d="m510.652344 185.902344c-3.351563-10.367188-12.546875-17.730469-23.425782-18.710938l-147.773437-13.417968-58.433594-136.769532c-4.308593-10.023437-14.121093-16.511718-25.023437-16.511718s-20.714844 6.488281-25.023438 16.535156l-58.433594 136.746094-147.796874 13.417968c-10.859376 1.003906-20.03125 8.34375-23.402344 18.710938-3.371094 10.367187-.257813 21.738281 7.957031 28.90625l111.699219 97.960937-32.9375 145.089844c-2.410156 10.667969 1.730468 21.695313 10.582031 28.09375 4.757813 3.4375 10.324219 5.1875 15.9375 5.1875 4.839844 0 9.640625-1.304687 13.949219-3.882813l127.46875-76.183593 127.421875 76.183593c9.324219 5.609376 21.078125 5.097657 29.910156-1.304687 8.855469-6.417969 12.992187-17.449219 10.582031-28.09375l-32.9375-145.089844 111.699219-97.941406c8.214844-7.1875 11.351563-18.539063 7.980469-28.925781zm0 0" fill="#ffc107"></path></svg>
                        </button>


                        <a href="#" id="open-button" class="open-button">
                            <svg height="20pt" viewBox="0 -1 401.52289 401" width="25pt" xmlns="http://www.w3.org/2000/svg" id="fi_1159633"><path d="m370.589844 250.972656c-5.523438 0-10 4.476563-10 10v88.789063c-.019532 16.5625-13.4375 29.984375-30 30h-280.589844c-16.5625-.015625-29.980469-13.4375-30-30v-260.589844c.019531-16.558594 13.4375-29.980469 30-30h88.789062c5.523438 0 10-4.476563 10-10 0-5.519531-4.476562-10-10-10h-88.789062c-27.601562.03125-49.96875 22.398437-50 50v260.59375c.03125 27.601563 22.398438 49.96875 50 50h280.589844c27.601562-.03125 49.96875-22.398437 50-50v-88.792969c0-5.523437-4.476563-10-10-10zm0 0"></path><path d="m376.628906 13.441406c-17.574218-17.574218-46.066406-17.574218-63.640625 0l-178.40625 178.40625c-1.222656 1.222656-2.105469 2.738282-2.566406 4.402344l-23.460937 84.699219c-.964844 3.472656.015624 7.191406 2.5625 9.742187 2.550781 2.546875 6.269531 3.527344 9.742187 2.566406l84.699219-23.464843c1.664062-.460938 3.179687-1.34375 4.402344-2.566407l178.402343-178.410156c17.546875-17.585937 17.546875-46.054687 0-63.640625zm-220.257812 184.90625 146.011718-146.015625 47.089844 47.089844-146.015625 146.015625zm-9.40625 18.875 37.621094 37.625-52.039063 14.417969zm227.257812-142.546875-10.605468 10.605469-47.09375-47.09375 10.609374-10.605469c9.761719-9.761719 25.589844-9.761719 35.351563 0l11.738281 11.734375c9.746094 9.773438 9.746094 25.589844 0 35.359375zm0 0"></path></svg>
                        </a>


                        <a href="#">
                            <svg enable-background="new 0 0 24 24" height="25" viewBox="0 0 24 24" width="25" xmlns="http://www.w3.org/2000/svg" id="fi_3524659"><path d="m22.683 9.394-1.88-.239c-.155-.477-.346-.937-.569-1.374l1.161-1.495c.47-.605.415-1.459-.122-1.979l-1.575-1.575c-.525-.542-1.379-.596-1.985-.127l-1.493 1.161c-.437-.223-.897-.414-1.375-.569l-.239-1.877c-.09-.753-.729-1.32-1.486-1.32h-2.24c-.757 0-1.396.567-1.486 1.317l-.239 1.88c-.478.155-.938.345-1.375.569l-1.494-1.161c-.604-.469-1.458-.415-1.979.122l-1.575 1.574c-.542.526-.597 1.38-.127 1.986l1.161 1.494c-.224.437-.414.897-.569 1.374l-1.877.239c-.753.09-1.32.729-1.32 1.486v2.24c0 .757.567 1.396 1.317 1.486l1.88.239c.155.477.346.937.569 1.374l-1.161 1.495c-.47.605-.415 1.459.122 1.979l1.575 1.575c.526.541 1.379.595 1.985.126l1.494-1.161c.437.224.897.415 1.374.569l.239 1.876c.09.755.729 1.322 1.486 1.322h2.24c.757 0 1.396-.567 1.486-1.317l.239-1.88c.477-.155.937-.346 1.374-.569l1.495 1.161c.605.47 1.459.415 1.979-.122l1.575-1.575c.542-.526.597-1.379.127-1.985l-1.161-1.494c.224-.437.415-.897.569-1.374l1.876-.239c.753-.09 1.32-.729 1.32-1.486v-2.24c.001-.757-.566-1.396-1.316-1.486zm-10.683 7.606c-2.757 0-5-2.243-5-5s2.243-5 5-5 5 2.243 5 5-2.243 5-5 5z"></path></svg>
                        </a>

                        {{--                    booking pop up form --}}
                        <div class="service-center-profile-edit-popup-form">
                            <div class="service-center-profile-edit-popup-form-content">
                                <div class="close-service-center-profile-edit-form">+</div>
                                <h2>Edit Your Profile</h2>
                                <form action="{{route('service-center.update',$service_center->id)}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                    <label for="display_picture">Company Display Picture</label>
                                    <br>
                                    <input type="file" name="display_picture" id="display_picture" value="{{asset('storage/'.$service_center->display_picture)}}" required>
                                    <br>
                                    <label for="address">Address</label>
                                    <input type="text" name="address" id="address" placeholder="Enter Address" value="{{$service_center->address}}" required>
                                    <br>
                                    <label for="phone_number">Contact Number</label>
                                    <input type="text" name="phone_number" id="phone_number" placeholder="Enter Phone Number" value="{{$service_center->phone_number}}" required>
                                    <br>
                                    <label for="short_description">Short Description of Company</label>
                                    <br>
                                    <textarea type="text" name="short_description" id="short_description" placeholder="enter short description of the company" cols="30" rows="10" required>{{$service_center->short_description}}</textarea>
                                    <br>
                                    <label for="description_picture">Company About Picture</label>
                                    <br>
                                    <input type="file" name="description_picture" id="description_picture" required>
                                    <br>
                                    <label for="long_description">Long Description of company</label>
                                    <br>
                                    <textarea type="text" name="long_description" id="long_description" placeholder="enter long description of the company" cols="60" rows="10" required>{{$service_center->long_description}}</textarea>
                                    <br>
                                    <button type="submit" class="btn btn-success" style="width: 150px">Submit Changes</button>
                                </form>
                            </div>
                        </div>
                        {{--                    booking pop up form ends --}}
                    </div>
                </div>
            </div>
        </div>



        <div class="about-service-center">
            <div class="heading">
                <h2 class="display-3">About</h2>
            </div>

            <div class="about-description">
                <p>{{$service_center->long_description}}</p>

                <img src="{{asset('storage/'.$service_center->description_picture)}}" alt="">
            </div>
        </div>

        <div class="service-center-reviews">

            <h2 class="display-3">Reviews By Clients</h2>

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
@endsection
