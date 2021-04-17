@extends('layouts.user_master')
@section('title','User Home page')
@section('content')
    <div class="search-bar-section">
        <div class="container">
            <form action="#" class="site-search d-flex flex-wrap justify-content-center">
                <input type="text" class="form-control search-bar me-2" placeholder="search">
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
        <h1 class="display-3">Vehicle Servicing For You</h1>
    </div>

    <div class="service-centers">
        <div class="container">
            <div class="row row-cols-3">
                <div class="col">
                    <div class="service-center-individual">
                        <div class="service-center-image">
                            <img src="{{asset('User_Frontend/images/service_center.jpg')}}" alt="">
                        </div>

                        <div class="service-center-description">
                            <h4>Makalu Vehicle Servicing</h4>
                            <h6 style="font-style: italic">Kalimati, Kathmandu</h6>
                            <button type="button" class="btn-success" style="margin: 0px 0px 10px 0px">
                                3.5
                                <svg height="10pt" viewBox="0 -10 511.98685 511" width="10pt" xmlns="http://www.w3.org/2000/svg" id="fi_1828884"><path d="m510.652344 185.902344c-3.351563-10.367188-12.546875-17.730469-23.425782-18.710938l-147.773437-13.417968-58.433594-136.769532c-4.308593-10.023437-14.121093-16.511718-25.023437-16.511718s-20.714844 6.488281-25.023438 16.535156l-58.433594 136.746094-147.796874 13.417968c-10.859376 1.003906-20.03125 8.34375-23.402344 18.710938-3.371094 10.367187-.257813 21.738281 7.957031 28.90625l111.699219 97.960937-32.9375 145.089844c-2.410156 10.667969 1.730468 21.695313 10.582031 28.09375 4.757813 3.4375 10.324219 5.1875 15.9375 5.1875 4.839844 0 9.640625-1.304687 13.949219-3.882813l127.46875-76.183593 127.421875 76.183593c9.324219 5.609376 21.078125 5.097657 29.910156-1.304687 8.855469-6.417969 12.992187-17.449219 10.582031-28.09375l-32.9375-145.089844 111.699219-97.941406c8.214844-7.1875 11.351563-18.539063 7.980469-28.925781zm0 0" fill="#ffc107"></path></svg>
                            </button>
                            <br>
                            <a href="{{route('user.service_center_profile',$customer->id)}}"><button type="button" class="btn-primary">View Profile</button></a>
                            <a href="#"><button type="button" class="btn-secondary">View Reviews</button></a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="service-center-individual">
                        <div class="service-center-image">
                            <img src="{{asset('User_Frontend/images/service_center2.jpg')}}" alt="">
                        </div>

                        <div class="service-center-description">
                            <h4>Makalu Vehicle Servicing</h4>
                            <h6 style="font-style: italic">Kalimati, Kathmandu</h6>
                            <button type="button" class="btn-success" style="margin: 0px 0px 10px 0px">
                                3.5
                                <svg height="10pt" viewBox="0 -10 511.98685 511" width="10pt" xmlns="http://www.w3.org/2000/svg" id="fi_1828884"><path d="m510.652344 185.902344c-3.351563-10.367188-12.546875-17.730469-23.425782-18.710938l-147.773437-13.417968-58.433594-136.769532c-4.308593-10.023437-14.121093-16.511718-25.023437-16.511718s-20.714844 6.488281-25.023438 16.535156l-58.433594 136.746094-147.796874 13.417968c-10.859376 1.003906-20.03125 8.34375-23.402344 18.710938-3.371094 10.367187-.257813 21.738281 7.957031 28.90625l111.699219 97.960937-32.9375 145.089844c-2.410156 10.667969 1.730468 21.695313 10.582031 28.09375 4.757813 3.4375 10.324219 5.1875 15.9375 5.1875 4.839844 0 9.640625-1.304687 13.949219-3.882813l127.46875-76.183593 127.421875 76.183593c9.324219 5.609376 21.078125 5.097657 29.910156-1.304687 8.855469-6.417969 12.992187-17.449219 10.582031-28.09375l-32.9375-145.089844 111.699219-97.941406c8.214844-7.1875 11.351563-18.539063 7.980469-28.925781zm0 0" fill="#ffc107"></path></svg>
                            </button>
                            <br>
                            <a href="{{route('user.service_center_profile',$customer->id)}}"><button type="button" class="btn-primary">View Profile</button></a>
                            <a href="#"><button type="button" class="btn-secondary">View Reviews</button></a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="service-center-individual">
                        <div class="service-center-image">
                            <img src="{{asset('User_Frontend/images/service_center3.jpg')}}" alt="">
                        </div>

                        <div class="service-center-description">
                            <h4>Makalu Vehicle Servicing</h4>
                            <h6 style="font-style: italic">Kalimati, Kathmandu</h6>
                            <button type="button" class="btn-success" style="margin: 0px 0px 10px 0px">
                                3.5
                                <svg height="10pt" viewBox="0 -10 511.98685 511" width="10pt" xmlns="http://www.w3.org/2000/svg" id="fi_1828884"><path d="m510.652344 185.902344c-3.351563-10.367188-12.546875-17.730469-23.425782-18.710938l-147.773437-13.417968-58.433594-136.769532c-4.308593-10.023437-14.121093-16.511718-25.023437-16.511718s-20.714844 6.488281-25.023438 16.535156l-58.433594 136.746094-147.796874 13.417968c-10.859376 1.003906-20.03125 8.34375-23.402344 18.710938-3.371094 10.367187-.257813 21.738281 7.957031 28.90625l111.699219 97.960937-32.9375 145.089844c-2.410156 10.667969 1.730468 21.695313 10.582031 28.09375 4.757813 3.4375 10.324219 5.1875 15.9375 5.1875 4.839844 0 9.640625-1.304687 13.949219-3.882813l127.46875-76.183593 127.421875 76.183593c9.324219 5.609376 21.078125 5.097657 29.910156-1.304687 8.855469-6.417969 12.992187-17.449219 10.582031-28.09375l-32.9375-145.089844 111.699219-97.941406c8.214844-7.1875 11.351563-18.539063 7.980469-28.925781zm0 0" fill="#ffc107"></path></svg>
                            </button>
                            <br>
                            <a href="{{route('user.service_center_profile',$customer->id)}}"><button type="button" class="btn-primary">View Profile</button></a>
                            <a href="#"><button type="button" class="btn-secondary">View Reviews</button></a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="service-center-individual">
                        <div class="service-center-image">
                            <img src="{{asset('User_Frontend/images/service_center3.jpg')}}" alt="">
                        </div>

                        <div class="service-center-description">
                            <h4>Makalu Vehicle Servicing</h4>
                            <h6 style="font-style: italic">Kalimati, Kathmandu</h6>
                            <button type="button" class="btn-success" style="margin: 0px 0px 10px 0px">
                                3.5
                                <svg height="10pt" viewBox="0 -10 511.98685 511" width="10pt" xmlns="http://www.w3.org/2000/svg" id="fi_1828884"><path d="m510.652344 185.902344c-3.351563-10.367188-12.546875-17.730469-23.425782-18.710938l-147.773437-13.417968-58.433594-136.769532c-4.308593-10.023437-14.121093-16.511718-25.023437-16.511718s-20.714844 6.488281-25.023438 16.535156l-58.433594 136.746094-147.796874 13.417968c-10.859376 1.003906-20.03125 8.34375-23.402344 18.710938-3.371094 10.367187-.257813 21.738281 7.957031 28.90625l111.699219 97.960937-32.9375 145.089844c-2.410156 10.667969 1.730468 21.695313 10.582031 28.09375 4.757813 3.4375 10.324219 5.1875 15.9375 5.1875 4.839844 0 9.640625-1.304687 13.949219-3.882813l127.46875-76.183593 127.421875 76.183593c9.324219 5.609376 21.078125 5.097657 29.910156-1.304687 8.855469-6.417969 12.992187-17.449219 10.582031-28.09375l-32.9375-145.089844 111.699219-97.941406c8.214844-7.1875 11.351563-18.539063 7.980469-28.925781zm0 0" fill="#ffc107"></path></svg>
                            </button>
                            <br>
                            <a href="{{route('user.service_center_profile',$customer->id)}}"><button type="button" class="btn-primary">View Profile</button></a>
                            <a href="#"><button type="button" class="btn-secondary">View Reviews</button></a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="service-center-individual">
                        <div class="service-center-image">
                            <img src="{{asset('User_Frontend/images/service_center2.jpg')}}" alt="">
                        </div>

                        <div class="service-center-description">
                            <h4>Makalu Vehicle Servicing</h4>
                            <h6 style="font-style: italic">Kalimati, Kathmandu</h6>
                            <button type="button" class="btn-success" style="margin: 0px 0px 10px 0px">
                                3.5
                                <svg height="10pt" viewBox="0 -10 511.98685 511" width="10pt" xmlns="http://www.w3.org/2000/svg" id="fi_1828884"><path d="m510.652344 185.902344c-3.351563-10.367188-12.546875-17.730469-23.425782-18.710938l-147.773437-13.417968-58.433594-136.769532c-4.308593-10.023437-14.121093-16.511718-25.023437-16.511718s-20.714844 6.488281-25.023438 16.535156l-58.433594 136.746094-147.796874 13.417968c-10.859376 1.003906-20.03125 8.34375-23.402344 18.710938-3.371094 10.367187-.257813 21.738281 7.957031 28.90625l111.699219 97.960937-32.9375 145.089844c-2.410156 10.667969 1.730468 21.695313 10.582031 28.09375 4.757813 3.4375 10.324219 5.1875 15.9375 5.1875 4.839844 0 9.640625-1.304687 13.949219-3.882813l127.46875-76.183593 127.421875 76.183593c9.324219 5.609376 21.078125 5.097657 29.910156-1.304687 8.855469-6.417969 12.992187-17.449219 10.582031-28.09375l-32.9375-145.089844 111.699219-97.941406c8.214844-7.1875 11.351563-18.539063 7.980469-28.925781zm0 0" fill="#ffc107"></path></svg>
                            </button>
                            <br>
                            <a href="{{route('user.service_center_profile',$customer->id)}}"><button type="button" class="btn-primary">View Profile</button></a>
                            <a href="#"><button type="button" class="btn-secondary">View Reviews</button></a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="service-center-individual">
                        <div class="service-center-image">
                            <img src="{{asset('User_Frontend/images/service_center.jpg')}}" alt="">
                        </div>

                        <div class="service-center-description">
                            <h4>Makalu Vehicle Servicing</h4>
                            <h6 style="font-style: italic">Kalimati, Kathmandu</h6>
                            <button type="button" class="btn-success" style="margin: 0px 0px 10px 0px">
                                3.5
                                <svg height="10pt" viewBox="0 -10 511.98685 511" width="10pt" xmlns="http://www.w3.org/2000/svg" id="fi_1828884"><path d="m510.652344 185.902344c-3.351563-10.367188-12.546875-17.730469-23.425782-18.710938l-147.773437-13.417968-58.433594-136.769532c-4.308593-10.023437-14.121093-16.511718-25.023437-16.511718s-20.714844 6.488281-25.023438 16.535156l-58.433594 136.746094-147.796874 13.417968c-10.859376 1.003906-20.03125 8.34375-23.402344 18.710938-3.371094 10.367187-.257813 21.738281 7.957031 28.90625l111.699219 97.960937-32.9375 145.089844c-2.410156 10.667969 1.730468 21.695313 10.582031 28.09375 4.757813 3.4375 10.324219 5.1875 15.9375 5.1875 4.839844 0 9.640625-1.304687 13.949219-3.882813l127.46875-76.183593 127.421875 76.183593c9.324219 5.609376 21.078125 5.097657 29.910156-1.304687 8.855469-6.417969 12.992187-17.449219 10.582031-28.09375l-32.9375-145.089844 111.699219-97.941406c8.214844-7.1875 11.351563-18.539063 7.980469-28.925781zm0 0" fill="#ffc107"></path></svg>
                            </button>
                            <br>
                            <a href="#"><button type="button" class="btn-primary">View Profile</button></a>
                            <a href="#"><button type="button" class="btn-secondary">View Reviews</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
