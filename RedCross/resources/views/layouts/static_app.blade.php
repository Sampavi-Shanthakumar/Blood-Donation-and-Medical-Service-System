<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Life Line</title>
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
 <link rel="stylesheet" type="text/css" href="foot.css">

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    

    <!--All Css Here-->

    <!--Bootstrap Css-->
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
    <!--revolution slider-->
    <link rel="stylesheet" href="{{ URL::asset('css/settings.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/navigation.css') }}">
    <!--Font-Awesome Css-->
    <link rel="stylesheet" href="{{ URL::asset('css/font-awesome.css') }}">
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
    <div class="main-container">
        @yield('content')

        <!--Footer start-->
            @include('static_pages.footer');
        <!--Footer end-->

    </div>
    <!--main-container-->
    
    <!--All Js Here-->
    <!-- jquery latest version -->
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


    @yield('js_styling')


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
</body>
</html>
