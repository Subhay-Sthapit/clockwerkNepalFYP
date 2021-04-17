@extends('layouts.user_master')
@section('title','Service Center Profile')
@section('content')


    <div class="service-center-profile">
        <div class="service-center-info">
            <div class="display-image">
                <img src="{{asset('storage/'.$service_center->display_picture)}}" alt="">
            </div>
            <div class="service-center-description">
                <h2 class="display-2">{{$user->name}}</h2>
                <h4>{{$service_center->address}}</h4>
                <h5>{{$service_center->phone_number}}</h5>
                <h5>{{$user->email}}</h5>
                <p>
                    {{$service_center->short_description}}
                </p>
                <button type="button" class="btn-success" style="height: 30px">
                    3.5
                    <svg height="10pt" viewBox="0 -10 511.98685 511" width="10pt" xmlns="http://www.w3.org/2000/svg" id="fi_1828884"><path d="m510.652344 185.902344c-3.351563-10.367188-12.546875-17.730469-23.425782-18.710938l-147.773437-13.417968-58.433594-136.769532c-4.308593-10.023437-14.121093-16.511718-25.023437-16.511718s-20.714844 6.488281-25.023438 16.535156l-58.433594 136.746094-147.796874 13.417968c-10.859376 1.003906-20.03125 8.34375-23.402344 18.710938-3.371094 10.367187-.257813 21.738281 7.957031 28.90625l111.699219 97.960937-32.9375 145.089844c-2.410156 10.667969 1.730468 21.695313 10.582031 28.09375 4.757813 3.4375 10.324219 5.1875 15.9375 5.1875 4.839844 0 9.640625-1.304687 13.949219-3.882813l127.46875-76.183593 127.421875 76.183593c9.324219 5.609376 21.078125 5.097657 29.910156-1.304687 8.855469-6.417969 12.992187-17.449219 10.582031-28.09375l-32.9375-145.089844 111.699219-97.941406c8.214844-7.1875 11.351563-18.539063 7.980469-28.925781zm0 0" fill="#ffc107"></path></svg>
                </button>


                <button id="open-booking" type="button" class="btn-primary">
                    Make a Booking
                </button>


                <a href="#">
                    <button type="button" class="btn-secondary" style="height: 30px">
                        Write a Review
                        <svg id="fi_2554282" enable-background="new 0 0 512.005 512.005" height="20" viewBox="0 0 512.005 512.005" width="20" xmlns="http://www.w3.org/2000/svg"><g id="XMLID_1021_"><g id="XMLID_1170_"><path id="XMLID_768_" d="m219.421 310.029-38.936 38.936c-10.935 10.935-28.663 10.935-39.598 0-10.935-10.935-10.935-28.663 0-39.598l27.435-27.435z" fill="#ffddcf"></path><path id="XMLID_1344_" d="m117.575 208.182-38.936 38.936c-10.935 10.935-28.663 10.935-39.598 0-10.935-10.935-10.935-28.663 0-39.598l27.435-27.435c34.028-34.028 80.18-53.145 128.303-53.145 66.713 0 128.046 36.609 159.709 95.33l29.512 54.731-39.899 150.983z" fill="#ffddcf"></path><path id="XMLID_1313_" d="m433.343 481.298-77.274-20.706c-10.669-2.859-17.001-13.826-14.142-24.495l43.482-162.276c2.859-10.669 13.826-17.001 24.495-14.142l77.274 20.706c10.669 2.859 17.001 13.826 14.142 24.495l-43.482 162.276c-2.859 10.669-13.825 17.001-24.495 14.142z" fill="#91def5"></path><g id="XMLID_2768_"><path id="XMLID_2775_" d="m164.401 12.071h88v335.025h-88z" fill="#ffcb7c" transform="matrix(.707 .707 -.707 .707 188.024 -94.763)"></path><path id="XMLID_2774_" d="m10 377.984 48.839-111.064 62.225 62.226z" fill="#98a1b3"></path></g><path id="XMLID_1251_" d="m256.466 298.519-60.583-60.583c-12.497-12.497-32.758-12.497-45.255 0-12.497 12.497-12.497 32.758 0 45.255l60.583 60.583c21.915 51.09 72.162 84.211 127.754 84.211h5.136z" fill="#ffddcf"></path><path id="XMLID_682_" d="m489.765 270.726-77.274-20.705c-10.239-2.743-20.679.186-27.989 6.843l-21.212-39.339c-13.197-24.475-31.711-45.893-53.945-62.517l55.689-55.689c3.905-3.905 3.905-10.237 0-14.143l-62.225-62.226c-3.905-3.904-10.237-3.904-14.143 0l-93.991 93.991c-25.233.014-49.846 4.915-73.16 14.572-23.345 9.67-44.242 23.633-62.11 41.5l-27.435 27.436c-7.178 7.178-11.13 16.72-11.13 26.87s3.953 19.692 11.13 26.87c4.934 4.934 10.899 8.215 17.207 9.863l-48.33 109.907c-1.66 3.774-.833 8.181 2.083 11.097 1.916 1.915 4.474 2.929 7.074 2.929 1.358 0 2.728-.276 4.023-.846l109.921-48.336c1.646 6.318 4.929 12.293 9.869 17.234 7.408 7.408 17.139 11.112 26.87 11.112s19.462-3.704 26.87-11.112l10.888-10.888 4.36 4.36c22.895 51.52 72.659 85.46 128.643 88.265-.764 6.39.542 12.827 3.818 18.5 4.006 6.94 10.476 11.904 18.216 13.978l77.274 20.706c2.591.694 5.193 1.025 7.757 1.025 13.244 0 25.398-8.853 28.985-22.239l9.829-36.684c1.43-5.334-1.736-10.817-7.071-12.247-5.332-1.43-10.818 1.736-12.247 7.071l-9.829 36.684c-1.427 5.327-6.921 8.5-12.248 7.071l-77.274-20.706c-2.58-.691-4.736-2.346-6.072-4.659-1.335-2.313-1.69-5.008-.999-7.588l43.481-162.275c1.428-5.326 6.925-8.496 12.248-7.071l77.274 20.705c5.326 1.428 8.499 6.922 7.071 12.248l-10.354 38.643c-1.43 5.334 1.736 10.817 7.071 12.247 5.331 1.43 10.818-1.736 12.247-7.071l10.354-38.643c4.282-15.979-5.235-32.461-21.214-36.743zm-145.944-178.479-139.742 139.742-1.125-1.125c-5.698-5.698-12.749-9.545-20.424-11.267l144.32-144.321zm-48.083-48.083 16.97 16.97-222.757 222.756-16.97-16.97zm-249.626 195.883c-3.4-3.399-5.272-7.92-5.272-12.728s1.872-9.328 5.272-12.728l27.435-27.436c27.277-27.277 62.128-44.229 99.81-48.897l-101.79 101.789c-7.017 7.02-18.437 7.018-25.455 0zm15.995 44.284 41.546 41.546-74.155 32.609zm58.958 30.672-16.97-16.97 28.217-28.217c1.682 7.498 5.423 14.622 11.246 20.446l1.125 1.125zm52.348 26.891c-7.019 7.018-18.438 7.017-25.456.001-7.018-7.02-7.018-18.439 0-25.457l10.888-10.888 25.456 25.455zm163.028 76.044c-50.645-.982-96.007-31.406-116.04-78.106-.501-1.168-1.22-2.229-2.119-3.129l-60.583-60.583c-8.578-8.577-8.578-22.535 0-31.112 4.155-4.155 9.68-6.444 15.556-6.444s11.401 2.289 15.556 6.444l60.583 60.583c3.905 3.904 10.237 3.904 14.143 0 3.905-3.905 3.905-10.237 0-14.143l-45.316-45.316 76.804-76.804c20.953 15.116 38.383 34.917 50.662 57.689l27.998 51.923z"></path></g><g id="XMLID_928_"><path id="XMLID_273_" d="m479.32 397.003c-2.64 0-5.21-1.07-7.08-2.931-1.86-1.869-2.92-4.439-2.92-7.069 0-2.641 1.06-5.21 2.92-7.08 1.86-1.86 4.44-2.92 7.08-2.92 2.63 0 5.21 1.06 7.07 2.92 1.86 1.87 2.93 4.439 2.93 7.08 0 2.63-1.07 5.21-2.93 7.069-1.87 1.861-4.44 2.931-7.07 2.931z"></path></g></g></svg>
                    </button>
                </a>

                {{--                    booking pop up form --}}
                <div class="booking-popup-form">
                    <div class="booking-popup-from-content">
                        <div class="close-booking-form">+</div>
                        <h2>Request a Booking</h2>
                        <form action="#" class="booking-form">
                            <label for="date">Date for booking</label>
                            <input type="date" name="date" id="date" required>
                            <br>
                            <label for="vehicle-type">Type of vehicle</label>
                            <select name="vehicle-type" id="vehicle-type">
                                <option selected>Two-Wheeler</option>
                                <option>Four-Wheeler</option>
                            </select>
                            <br>
                            <label for="vehicle-name">Vehicle Name</label>
                            <input type="text" name="vehicle-name" id="vehicle-name" placeholder="eg. honda shine" required>
                            <br>
                            <label for="description">Description for booking:</label>
                            <br>
                            <textarea type="text" name="description" id="description" placeholder="enter description for booking e.g. what problems you have in your vehicle , etc." cols="30" rows="10" required></textarea>
                            <br>
                            <div class="agree-checkbox">
                                <input type="checkbox" id="agreeToTerms" name="agreeToTerms" required>
                                <label for="agreeToTerms">I agree that my contact info is shared with the service center for making the booking.</label>
                            </div>
                            <button type="submit" class="btn btn-success" style="width: 150px">Make Booking</button>
                        </form>
                    </div>
                </div>
                {{--                    booking pop up form ends --}}
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
