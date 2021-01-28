<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Login</title>

    <!--===============================================================================================-->
    <link rel="icon" type="image/jpeg" href="{{ asset('assets_login/images/rsubl.jpeg') }}"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets_login/vendor/bootstrap/css/bootstrap.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets_login/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets_login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets_login/vendor/animate/animate.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets_login/vendor/css-hamburgers/hamburgers.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets_login/vendor/select2/select2.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets_login/css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets_login/css/main.css') }}">
    <!--===============================================================================================-->
</head>

<body>
                <header id="header" class="alt">
                    <div class="logo"><span>Pendaftaran Fisioterapi RSU-Bethesda Lempuyangwangi</span></div>
                    <a href="#menu">Menu</a>
                </header>

                <!-- Nav -->
                <nav id="menu">
                    <ul class="links">
                        <li><a href="{{ route('index') }}"><span><i class="fa fa-calendar"></i></span> Lihat Jadwal</a></li>
                    </ul>
                </nav>

                <!-- Scripts -->
                <!--===============================================================================================-->
                <script src="{{ asset('assets_login/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
                <!--===============================================================================================-->
                <script src="{{ asset('assets_login/vendor/bootstrap/js/popper.js') }}"></script>
                <script src="{{ asset('assets_login/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
                <!--===============================================================================================-->
                <script src="{{ asset('assets_login/vendor/select2/select2.min.js') }}"></script>
                <!--===============================================================================================-->
                <script src="{{ asset('assets_login/js/jquery.min.js') }}"></script>
                <script src="{{ asset('assets_login/js/jquery.scrollex.min.js') }}"></script>
                <script src="{{ asset('assets_login/js/skel.min.js') }}"></script>
                <script src="{{ asset('assets_login/js/util.js') }}"></script>
                <script src="{{ asset('assets_login/js/main.js') }}"></script>



                @yield('content')

                <!-- Footer -->
                <footer class="group">
                    &copy; Copyright 2018 | Osmond Giovanni I & Yulius Elfrisa D | Teknik Informatika Universitas Sanata Dharma
                </footer>

                <!-- Scroll to Top Button-->
                <a class="scroll-to-top rounded" href="#page-top">
                    <i class="fa fa-angle-up"></i>
                </a>

                <div id="preloader">
                    <div id="loader">
                    </div>
                </div>




</body>
</html>

