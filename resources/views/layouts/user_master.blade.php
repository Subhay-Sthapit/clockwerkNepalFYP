<!doctype html>
<html lang="en" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    {{--links--}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    {{--    icon --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('User_Frontend/user_frontend.css')}}">
</head>
<body class="d-flex flex-column h-100">
<header class="site-header bg-white shadow-sm">
    <div class="container">
        <div class="d-flex flex-wrap justify-content-between py-3">
            <a class="navbar-brand" href="{{route('user.home',$customer->id)}}"><img src="{{asset('img/clockwreknepal.png')}}" alt="ClockWrek Nepal" title="Clockwerk Nepal"></a>
            {{--nav bar section--}}
            <nav class="navbar navbar-toggleable-md">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleCenteredNav" aria-controls="navbarsExampleCenteredNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse navbar-collapse justify-content-md-end" id="navbarsExampleCenteredNav">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('user.home',$customer->id)}}">Home</a>
                        </li>
                        {{--                <li class="nav-item">--}}
                        {{--                    <a class="nav-link disabled" href="#">Disabled</a>--}}
                        {{--                </li>--}}
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <svg id="fi_2922510" enable-background="new 0 0 464.056 464.056" height="25" viewBox="0 0 464.056 464.056" width="25" xmlns="http://www.w3.org/2000/svg"><path d="m386.028 416.796v39.26c0 4.42-3.58 8-8 8h-292c-4.42 0-8-3.58-8-8v-39.26c0-41.19 33.39-74.56 74.59-74.57 14.56-.01 27.38-7.5 34.76-18.86 7.414-11.394 6.65-21.302 6.65-29.31l.15-.37c-35.9-14.86-61.15-50.23-61.15-91.5v-3.13c-14.255 0-25-11.265-25-24.54v-41.56c-.32-14.47.34-65.5 37.2-101.03 42.86-41.31 110.78-37.93 159.98-15.83 1.6.72 1.55 3.01-.07 3.68l-12.83 5.28c-1.92.79-1.51 3.62.55 3.84l6.23.67c29.83 3.19 57.54 19.39 74.72 46.35.46.73.33 1.84-.26 2.47-10.6 11.21-16.52 26.09-16.52 41.56v54.57c0 13.55-10.99 24.54-24.54 24.54h-1.46v3.13c0 41.27-25.25 76.64-61.15 91.5l.15.37c0 7.777-.827 17.82 6.65 29.31 7.38 11.36 20.2 18.85 34.76 18.86 41.2.01 74.59 33.38 74.59 74.57z" fill="#ffdfba"></path><path d="m386.028 416.796v39.26c0 4.418-3.582 8-8 8h-292c-4.418 0-8-3.582-8-8v-39.26c0-41.19 33.395-74.555 74.585-74.57 14.564-.005 27.387-7.504 34.765-18.86 25.754 22.002 63.531 22.015 89.3 0 7.377 11.356 20.201 18.855 34.765 18.86 41.19.015 74.585 33.38 74.585 74.57z" fill="#fe4f60"></path><path d="m373.804 75.921c.464.729.334 1.833-.259 2.461-10.597 11.218-16.517 26.093-16.517 41.564v54.57c0 12.388-9.333 24.54-26 24.54v-61.77c0-26.51-21.49-48-48-48h-102c-26.51 0-48 21.49-48 48v61.77c-14.255 0-25-11.265-25-24.54v-41.56c-.32-14.47.34-65.5 37.2-101.03 42.857-41.311 110.784-37.929 159.976-15.827 1.6.719 1.558 3.01-.065 3.678l-12.831 5.282c-1.918.79-1.514 3.617.548 3.838l6.232.669c29.835 3.187 57.538 19.387 74.716 46.355z" fill="#42434d"></path><path d="m331.028 202.186c0 54.696-44.348 99-99 99-51.492 0-99-40.031-99-102.13v-61.77c0-26.51 21.49-48 48-48h102c26.51 0 48 21.49 48 48z" fill="#ffebd2"></path><path d="m313.028 447.056h-24c-4.418 0-8-3.582-8-8s3.582-8 8-8h24c4.418 0 8 3.582 8 8s-3.581 8-8 8z" fill="#fff"></path><path d="m209.612 266.114c16.277 10.183 3.442 35.156-14.376 28.004-36.634-14.704-62.208-50.404-62.208-91.932v-64.9c0-10.084 3.11-19.442 8.422-27.168 6.514-9.473 21.578-5.288 21.578 7.168v64.9c0 36.51 19.192 66.79 46.584 83.928z" fill="#fff3e4"></path><path d="m271.158 310.476c-24.637 10.313-51.712 11.113-78.26 0 1.356-5.626 1.13-9.27 1.13-16.42l.15-.37c24.082 9.996 51.571 10.016 75.7 0l.15.37c0 7.153-.226 10.796 1.13 16.42z" fill="#ffd6a6"></path><path d="m192.91 366.383c-3.698 1.163-7.664 1.804-11.916 1.841-41.296.364-74.966 33.017-74.966 74.315v7.517c0 7.732-6.268 14-14 14h-6c-4.418 0-8-3.582-8-8v-39.26c0-41.191 33.395-74.555 74.585-74.57 14.564-.005 27.387-7.504 34.765-18.86 2.974 2.54 6.158 4.823 9.512 6.822 14.753 8.791 12.402 31.044-3.98 36.195z" fill="#ff6d7a"></path><path d="m271.146 366.383c3.698 1.163 7.664 1.804 11.916 1.841 41.296.364 74.966 33.017 74.966 74.315v7.517c0 7.732 6.268 14 14 14h6c4.418 0 8-3.582 8-8v-39.26c0-41.191-33.395-74.555-74.585-74.57-14.564-.005-27.387-7.504-34.765-18.86-2.974 2.54-6.158 4.823-9.512 6.822-14.752 8.791-12.402 31.044 3.98 36.195z" fill="#e84857"></path><path d="m305.138 19.776c-11.758 4.839-13.434 5.906-17.508 5.274-65.674-10.18-123.294 16.993-142.862 80.786v.01c-7.32 8.42-11.74 19.42-11.74 31.44v37.523c0 16.188-25 17.315-25-.293v-41.56c-.32-14.47.34-65.5 37.2-101.03 42.86-41.31 110.78-37.93 159.98-15.83 1.6.72 1.55 3.01-.07 3.68z" fill="#4d4e59"></path></svg>
                            </a>
                            <div class="dropdown dropdown-menu" aria-labelledby="dropdown03">
                                <a class="dropdown-item" href="{{route('user.profile',$customer->id)}}">{{ Auth::user()->name }}</a>

                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            {{--nav bar ends--}}
        </div>
    </div>
</header>

@yield('content')

{{--footer section--}}

<footer class="footer mt-auto py-5">
    <div class="container">
        <div class="d-flex flex-wrap justify-content-between">
            <div class="logo">
                <img src="{{asset('img/clockwreknepal.png')}}" alt="ClockWrek Nepal">
            </div>
            <div class="contact-info">
                <h3>About Us</h3>
                <ul class="list-unstyled">
                    <li>Clockwrek Nepal</li>
                    <li>Office: Tahachal, Kathmandu</li>
                    <li>Email: info@clockwreknepal.com</li>
                    <li>Corporate: +977-980000000</li>
                </ul>
            </div>
            <div class="social-links">
                <h3>Social Network</h3>
                <ul class="nav">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="company-rights">
        <p> &#169; Clockwerk Nepal 2021 All Rights Reserved. </p>
    </div>
</footer>


{{--footer section ends--}}

{{--scripts called--}}

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<script src="{{asset('User_Frontend/userProfile.js')}}"></script>
<script src="{{asset('User_Frontend/ServiceCenterProfile.js')}}"></script>
</body>
</html>
