<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Clockwerk Nepal</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    {{--    icon --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n"
            crossorigin="anonymous"></script>


    {{--    Text Editor CSS--}}
    <link rel="stylesheet" href="{{asset('css/richtext.css')}}">
    {{--    Text Editor JS--}}
    <script type="text/javascript" src="{{asset('js/jquery.richtext.js')}}"></script>
    <script>
        jQuery(document).ready(function() {
            jQuery('.content').richText();
        });
    </script>
</head>
<body class="d-flex flex-column h-100">
    <div id="app">
        <header class="site-header bg-white shadow-sm">
            <div class="container">
                <div class="d-flex flex-wrap justify-content-between py-3">
                    <a class="navbar-brand" href="{{ url('/') }}"><img src="{{asset('img/clockwreknepal.png')}}" alt="ClockWrek Nepal" title="Clockwerk Nepal"></a>
                    {{--nav bar section--}}
                    <nav class="navbar navbar-toggleable-md">
                        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleCenteredNav" aria-controls="navbarsExampleCenteredNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse navbar-collapse justify-content-md-end" id="navbarsExampleCenteredNav">
                            <ul class="nav">
                                 <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register as user') }}</a>
                            </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('service-center.register') }}">{{ __('Register as Service Center') }}</a>
                                </li>

                        @endif
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('login')}}">Home Page</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
{{--                        <li>--}}
{{--                            @if(\Illuminate\Support\Facades\Auth::user()->user_type == 'service center')--}}
{{--                                <a href="{{route('service-center.home')}}"></a>--}}
{{--                            @endif--}}
{{--                        </li>--}}
                    @endguest
                            </ul>
                        </div>
                    </nav>
                    {{--nav bar ends--}}
                </div>
            </div>
        </header>
        <main>
            @if(session()->has('error'))
                <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                    {{session('error')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">x</span>
                    </button>
                </div>
            @endif
            @yield('content')
        </main>
    </div>
</body>
</html>
