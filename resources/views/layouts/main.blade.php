
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title') || Travello</title>
    <!-- load stylesheets -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">  <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="{{asset('public/asset/')}}/font-awesome-4.7.0/css/font-awesome.min.css">                <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('public/asset/')}}/css/bootstrap.min.css">                                      <!-- Bootstrap style -->
    <link rel="stylesheet" type="text/css" href="{{asset('public/asset/')}}/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="{{asset('public/asset/')}}/slick/slick-theme.css"/>
    <link rel="stylesheet" type="text/css" href="{{asset('public/asset/')}}/css/datepicker.css"/>
    <link rel="stylesheet" href="{{asset('public/asset/')}}/css/tooplate-style.css">                                   <!-- Templatemo style -->
</head>

    <body>
        <div class="tm-main-content" id="top">
            <div class="tm-top-bar-bg"></div>
            <div class="tm-top-bar" id="tm-top-bar">
                <!-- Top Navbar -->
                <div class="container">
                    <div class="row">
                        
                        @include('shared.user.header')
                                  
                    </div>
                </div>
            </div>
            @yield('content')
            
            @include('shared.user.footer')
        </div>
        
        <!-- load JS files -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        {{-- <script src="{{asset('public/asset/')}}/js/jquery-1.11.3.min.js"></script>             <!-- jQuery (https://jquery.com/download/) --> --}}
        <script src="{{asset('public/asset/')}}/js/popper.min.js"></script>                    <!-- https://popper.js.org/ -->       
        <script src="{{asset('public/asset/')}}/js/bootstrap.min.js"></script>                 <!-- https://getbootstrap.com/ -->
        <script src="{{asset('public/asset/')}}/js/datepicker.min.js"></script>                <!-- https://github.com/qodesmith/datepicker -->
        <script src="{{asset('public/asset/')}}/js/jquery.singlePageNav.min.js"></script>      <!-- Single Page Nav (https://github.com/ChrisWojcik/single-page-nav) -->
        <script src="{{asset('public/asset/')}}/slick/slick.min.js"></script>                  <!-- http://kenwheeler.github.io/slick/ -->
        <script src="{{asset('public/asset/')}}/custom.js"></script>             
        @yield('script')
</body>
</html>

