<!DOCTYPE html>
<html lang="bn">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title') | Travels-Admin</title>
        <link type="text/css" href="{{asset('public/admin/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <link type="text/css" href="{{asset('public/admin/bootstrap/css/bootstrap-responsive.min.css')}}" rel="stylesheet">
        <link type="text/css" href="{{asset('public/admin/css/theme.css')}}" rel="stylesheet">
        <link type="text/css" href="{{asset('public/admin/images/icons/css/font-awesome.css')}}" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>
    </head>
    <body>
        @include('shared.admin.admin_header')
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span3">
                       @include('shared.admin.admin_sidebar')
                        <!--/.sidebar-->
                    </div>
                    <!--/.span3-->
                    <div class="span9">
                      @yield('content')
                        <!--/.content-->
                    </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.wrapper-->
         @include('shared.admin.admin_footer')
        <script src="{{asset('public/admin/scripts/jquery-1.9.1.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/admin/scripts/jquery-ui-1.10.1.custom.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/admin/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/admin/scripts/flot/jquery.flot.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/admin/scripts/flot/jquery.flot.resize.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/admin/scripts/datatables/jquery.dataTables.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/admin/scripts/common.js')}}" type="text/javascript"></script>
      @yield('script')
    </body>
</html>