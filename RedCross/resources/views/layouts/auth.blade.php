<!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
         <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div id="app">
            <nav class="navbar navbar-expand-md navbar-light navbar-laravel"style="background-color:rgb(110, 7, 7);font-family: 'Cardo', serif;font-weight:bold;font-size:25px;color:#ddd;">
                <div class="container">
                <img src="{{ asset('images/logo.jpg') }}" style="width:100px; height:70px; margin-top:15px;border: 1px solid #ddd;border-radius: 4px;padding: 5px;">&nbsp;&nbsp;&nbsp;&nbsp;
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
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
                           <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                              Hi <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
                        </ul>
                    </div>
                </div>
            </nav>
            </nav><div class="sub-footer"style= "width:100%;
    height:40px;
    background-color: gray;
    color:black;
    font-size:25px;
    border: 3px solid black;"> <span style="font-family:ArmonelaBlack"> Blood Donation System of Sri Lanka Red Cross | Vavuniya </span></div>
            <main class="py-4">
                @yield('content')
            </main>
        </div>
        <div class="sub-footer"style="height:30px;
    background-color: gray;
   margin:0;
   padding:0;
   clear:none;  
   border: 3px solid black;"></div><div class="footer" style=" background-color:rgb(110, 7, 7);
    width:100%;
    height:150px;
    color:white;
    font-size:20px;
    margin:0;
    padding:0;
    clear:none;  
    overflow:hidden;">

                        <div class="container" style="margin-left:520px;margin-top:10px;padding-top:10px">
                            <p><a href="http://www.facebook.com/pages/Sri-Lanka-Red-Cross-Society/133902706641597"><i class="fab fa-facebook-f" style="font-size:20px;  margin-top:10px; color:blue"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="http://twitter.com/#!/SLRedCross" ><i class="fab fa-twitter" style="font-size:20px;  margin-top:10px; color:light-blue;"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="http://www.youtube.com/user/srilankanredcross"><i class="fab fa-youtube" style="font-size:20px;  margin-top:10px; color:red;"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="http://www.flickr.com/photos/srilankaredcross/"><i class="fab fa-flickr" style="font-size:20px;  margin-top:10px; color:blue;"></i></a></p>
                            <p class="copyright" style="margin-left:-220px;margin-top:10px;">&copy;<?php echo date("Y");?>&nbsp;Copyright Sri Lanka Red Cross | Vavuniya| All rights reserved</p>
</div>
</div>
    </body>
    </html>