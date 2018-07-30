<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">

        <title>RS BETHESDA LEMPUYANGWANGI </title>
        <link rel="icon" type="image/png" href="{{ asset('assets/images/logo.PNG')}}">
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!--LINK BODY-->
        <!--===============================================================================================-->
        <link rel="icon" type="image/png" href="{{asset('assets_login/images/icons/favicon.ico')}}"/>
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{asset('assets_login/vendor/bootstrap/css/bootstrap.min.css')}}">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{asset('assets_login/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{asset('assets_login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{asset('assets_login/vendor/animate/animate.css')}}">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{asset('assets_login/vendor/css-hamburgers/hamburgers.min.css')}}">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{asset('assets_login/vendor/select2/select2.min.css')}}">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{asset('assets_login/css/util.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets_login/css/main.css')}}">
        <!--===============================================================================================-->

        <!--LINK HEADER FOOTER -->
        <link href="{{asset('assets/css/mainbar.css')}}" rel="stylesheet" />
    </head>
        <body>
    
        <!-- Header -->
        <header id="header" class="inner-body" style="background-color:#2b3b4b">
            <div class="logo"><a href="/"><img src="{{asset('assets/images/logo_rs.png')}}"/></a></div>
            <a href="#menu">Menu</a>
        </header>

        <!-- Nav -->
        <nav id="menu" style="background-color:#2b3b4b">
            <ul class="links">
                <li><a href="index.html">Login</a></li>
                <li><a href="generic.html">Lihat Data</a></li>
                <!--<li><a href="elements.html">Elements</a></li>-->
            </ul>
        </nav>

        <!-- Banner -->
        <section class="">
            <div class="limiter">
                <div class="container-login100">
                    <div class="wrap-login100 p-t-190 p-b-30">
                        <form class="login100-form validate-form">
                            <div class="login100-form-avatar">
                                <img src="{{asset('assets/images/user.png')}}" alt="AVATAR">
                            </div>

                            <div class="container-login100-form-btn p-t-10">
                             <a href="{{ route('index') }}">
                                    Login
                             </a><br>

                                <a href="Pasien/create.blade.php">
                                    Buat
                                </a>
                            </div>

                            <div class="text-center w-full p-t-25 p-b-230">
                                <a href="#" class="txt1">
                                    Forgot Username / Password?
                                </a><br>
                                <a class="txt1" href="#">
                                    Create new account
                                    <i class="fa fa-long-arrow-right"></i>
                                </a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>   
        </section>

        <!--SCRIPT LOGIN -->
        <!--===============================================================================================-->
        <script src="{{asset('assets_login/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
        <!--===============================================================================================-->
        <script src="{{asset('assets_login/vendor/bootstrap/js/popper.js')}}"></script>
        <script src="{{asset('assets_login/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
        <!--===============================================================================================-->
        <script src="{{asset('assets_login/vendor/select2/select2.min.js')}}"></script>
        <!--===============================================================================================-->
        <script src="{{asset('assets_login/js/main.js')}}"></script>


        <!-- Footer -->
        <footer id="footer" style="background-color:#2b3b4b">
            <div class="copyright">
                COPYRIGHT &copy; TEKNIK INFORMATIKA UNIVERSITAS SANATA DHARMA (YULIUS & OSMOND)
            </div>
        </footer>

        <!-- SCRIPT HEADER FOOTER -->
        <script src="{{asset('assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.scrollex.min.js')}}"></script>
        <script src="{{asset('assets/js/skel.min.js')}}"></script>
        <script src="{{asset('assets/js/util.js')}}"></script>
        <script src="{{asset('assets/js/main.js')}}"></script>
    </body>
</html>
