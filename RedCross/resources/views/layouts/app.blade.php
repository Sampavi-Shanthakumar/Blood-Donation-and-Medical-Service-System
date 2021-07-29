<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'LifeLine') }}</title>

  

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/RealtimeValidation.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/RealtimeValid.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
    <!--revolution slider-->
    <link rel="stylesheet" href="{{ URL::asset('css/settings.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/navigation.css') }}">
    <!--Font-Awesome Css-->
    <!--flat-icon-->
    <link rel="stylesheet" href="{{ URL::asset('css/flaticon.css') }}">
    <!--Owl-Carousel Css-->
    <link rel="stylesheet" href="{{ URL::asset('css/owl.carousel.css') }}">
    <!--Animate Css-->
    <link rel="stylesheet" href="{{ URL::asset('css/animate.css') }}">
    <!--Animate Css-->
    <link rel="stylesheet" href="{{ URL::asset('css/magnific-popup.css') }}">
    <!--Jquery Ui Css-->
    <link rel="stylesheet" href="{{ URL::asset('css/jquery-ui.min.css') }}">
    <!--Style Css-->
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <!--Responsive Css-->
    <link rel="stylesheet" href="{{ URL::asset('css/responsive.css') }}">
    <!--Modernizr Css-->
    <script src="{{ URL::asset('js/modernizr-2.8.3.min.js') }}"></script>


    {{--<!--[if lt IE 9]>--}}
    {{--<script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>--}}
    {{--<script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>--}}
    {{--<![endif]-->--}}

</head>
<body>

    <!--main-container-->
   
   
    <script data-cfasync="false" src="{{ URL::asset('js/email-decode.min.js') }}"></script><script src="{{ URL::asset('js/jquery-3.2.1.min.js') }}"></script>
    <!--Migrate Js-->
    <script src="{{ URL::asset('js/jquery-migrate.js') }}"></script>
    <!--Popper Js-->
    <script src="{{ URL::asset('js/popper-1.12.3.min.js') }}"></script>
    <!--Bootstrap Js-->
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    <!--Owl-Carousel Js-->
    <script src="{{ URL::asset('js/owl.carousel.min.js') }}"></script>
    <!--counter Js-->
    <script src="{{ URL::asset('js/jquery.counterup.min.js') }}"></script>
    <script src="{{ URL::asset('js/waypoints-jquery.js') }}"></script>
    <!--Isotop Js-->
    <script src="{{ URL::asset('js/isotope.pkgd.min.js') }}"></script>

    <!-- revolution slider js files start -->
    <script src="{{ URL::asset('js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ URL::asset('js/revolution.min.js') }}"></script>

    <script src="{{ URL::asset('js/revolution.extension.actions.min.js') }}"></script>
    <script src="{{ URL::asset('js/revolution.extension.carousel.min.js') }}"></script>
    <script src="{{ URL::asset('js/revolution.extension.kenburn.min.js') }}"></script>
    <script src="{{ URL::asset('js/revolution.extension.layeranimation.min.js') }}"></script>
    <script src="{{ URL::asset('js/revolution.extension.migration.min.js') }}"></script>
    <script src="{{ URL::asset('js/revolution.extension.navigation.min.js') }}"></script>
    <script src="{{ URL::asset('js/revolution.extension.parallax.min.js') }}"></script>
    <script src="{{ URL::asset('js/revolution.extension.slideanims.min.js') }}"></script>
    <script src="{{ URL::asset('js/revolution.extension.video.min.js') }}"></script>
    <!-- revolution slider js files end -->


 


    <!--magnific popup Js-->
    <script src="{{ URL::asset('js/jquery.magnific-popup.min.js') }}"></script>
    <!--scrollUp js-->
    <script src="{{ URL::asset('js/jquery.scrollUp.js') }}"></script>
    <!--Jquery Ui Js-->
    <script src="{{ URL::asset('js/jquery-ui.min.js') }}"></script>
    <!--Wow Js-->
    <script src="{{ URL::asset('js/wow.min.js') }}"></script>

    <!-- template main js file -->
    <script src="{{ URL::asset('js/main.js') }}"></script>
</head>
<body>
<div id="app">
<header class="header fixed-top">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
   
            <a class="navbar-brand" >
            <a href="/" style="color:white;font-size:20px"> <img src="{{ url('/images/logo1.jpg') }}" alt="Life Line">&nbsp;&nbsp;&nbsp;LifeLine</a>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    <li class="nav-item ">
                        <a class="nav-link " href="/">
                            home<span class="sr-only">(current)</span>
                        </a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link " href="/about">
                            about<span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="sendrequest">
                            firstaid camp request<span class="sr-only">(current)</span>
                        </a>
                    </li>
                   
                    <li class="nav-item">
                        <a class="nav-link " href="/awareness">
                            blood donation awareness<span class="sr-only">(current)</span>
                        </a>
                    </li>
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{Auth::user()->name}}<span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ URL::to(Auth::user()->type)}}"> Dashboard
                                </a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>

                    @endguest
                </ul>
            </div>
        </div>
</header>
<br>
<br>
<br>
<br>
    <main class="py-4">
        @yield('content')
    </main>
</div>
@auth
    <script src="{{ asset('js/enable-push.js') }}" defer></script>
@endauth
@include('static_pages.copyright');
</body>
</html>
