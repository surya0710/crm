<!DOCTYPE html >
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="icon" href="{{ asset('assets/images/skyteam_travel_icon.webp ') }}" type="image/x-icon"/>
        <link rel="shortcut icon" href="{{ asset('assets/images/skyteam_travel_icon.webp ') }}" type="image/x-icon"/>
        <!-- Google font-->
        <link rel="preconnect" href="https://fonts.googleapis.com/"/>
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin=""/>
        <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,200;6..12,300;6..12,400;6..12,500;6..12,600;6..12,700;6..12,800;6..12,900;6..12,1000&amp;display=swap" rel="stylesheet"/>
        <!-- Flag icon css -->
        <link rel="stylesheet" href="{{ asset('assets/css/vendors/flag-icon.css ') }}"/>
        <!-- iconly-icon-->
        <link rel="stylesheet" href="{{ asset('assets/css/iconly-icon.css ') }}"/>
        <link rel="stylesheet" href="{{ asset('assets/css/bulk-style.css ') }}"/>
        <!-- iconly-icon-->
        <link rel="stylesheet" href="{{ asset('assets/css/themify.css ') }}"/>
        <!--fontawesome-->
        <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-min.css ') }}"/>
        <!-- Whether Icon css-->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/weather-icons/weather-icons.min.css ') }}"/>
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/scrollbar.css ') }}"/>
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/slick.css ') }}"/>
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/slick-theme.css ') }}"/>
        <!-- App css -->
        <link id="color" rel="stylesheet" href="{{ asset('assets/css/color-1.css ') }}" media="screen"/>
        <link rel="stylesheet" href="{{ asset('assets/css/style.css ') }}"/>
    </head>
    <body>
        <div class="tap-top"><i class="iconly-Arrow-Up icli"></i></div>
        <div class="page-wrapper compact-wrapper" id="pageWrapper">
            @include('layouts.navigation')
            <div class="page-body-wrapper">
                @include('layouts.sidebar')
                <!-- Page Content -->
                <main>
                    {{ $slot }}
                </main>
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 footer-copyright">
                                <p class="mb-0">Copyright {{ date('Y') }} © by <a target="_blank" href="https://www.linkedin.com/in/surya-kant-4b6134198/">Developer</a>.</p>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </body>
    <!-- jquery-->
    <script src="{{ asset('assets/js/vendors/jquery/jquery.min.js ') }}"></script>
    <!-- bootstrap js-->
    <script src="{{ asset('assets/js/vendors/bootstrap/dist/js/bootstrap.bundle.min.js ') }}" defer=""></script>
    <script src="{{ asset('assets/js/vendors/bootstrap/dist/js/popper.min.js ') }}" defer=""></script>
    <!--fontawesome-->
    <script src="{{ asset('assets/js/vendors/font-awesome/fontawesome-min.js ') }}"></script>
    <!-- feather-->
    <script src="{{ asset('assets/js/vendors/feather-icon/feather.min.js ') }}"></script>
    <script src="{{ asset('assets/js/vendors/feather-icon/custom-script.js ') }}"></script>
    <!-- sidebar -->
    <script src="{{ asset('assets/js/sidebar.js ') }}"></script>
    <!-- height_equal-->
    <script src="{{ asset('assets/js/height-equal.js ') }}"></script>
    <!-- config-->
    <script src="{{ asset('assets/js/config.js ') }}"></script>
    <!-- apex-->
    <script src="{{ asset('assets/js/chart/apex-chart/apex-chart.js ') }}"></script>
    <script src="{{ asset('assets/js/chart/apex-chart/stock-prices.js ') }}"></script>
    <!-- scrollbar-->
    <script src="{{ asset('assets/js/scrollbar/simplebar.js ') }}"></script>
    <script src="{{ asset('assets/js/scrollbar/custom.js ') }}"></script>
    <!-- slick-->
    <script src="{{ asset('assets/js/slick/slick.min.js ') }}"></script>
    <script src="{{ asset('assets/js/slick/slick.js ') }}"></script>
    <!-- data_table-->
    <script src="{{ asset('assets/js/js-datatables/datatables/jquery.dataTables.min.js ') }}"></script>
    <!-- page_datatable-->
    <script src="{{ asset('assets/js/js-datatables/datatables/datatable.custom.js ') }}"></script>
    <!-- page_datatable1-->
    <script src="{{ asset('assets/js/js-datatables/datatables/datatable.custom1.js ') }}"></script>
    <!-- page_datatable-->
    <script src="{{ asset('assets/js/datatable/datatables/datatable.custom.js ') }}"></script>
    <!-- tilt-->
    <script src="{{ asset('assets/js/animation/tilt/tilt.jquery.js ') }}"></script>
    <!-- page_tilt-->
    <script src="{{ asset('assets/js/animation/tilt/tilt-custom.js ') }}"></script>
    <!-- dashboard_1-->
    <script src="{{ asset('assets/js/dashboard/dashboard_1.js ') }}"></script>
    <!-- custom script -->
    <script src="{{ asset('assets/js/script.js ') }}"></script>
</html>
