<!DOCTYPE html>
<!--
Template Name: Rubick - HTML Admin Dashboard Template
Author: Left4code
Website: http://www.left4code.com/
Contact: muhammadrizki@left4code.com
Purchase: https://themeforest.net/user/left4code/portfolio
Renew Support: https://themeforest.net/user/left4code/portfolio
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html>
<!-- BEGIN: Head -->

<head>
    <meta charset="utf-8">
    <link
            href="{{ Vite::asset('resources/images/logo.svg') }}"
            rel="shortcut icon"
    >
    <meta
            name="csrf-token"
            content="{{ csrf_token() }}"
    >
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title -->
    <title>Home - Jago Welfare </title>
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <!-- animate css -->
    <link rel="stylesheet" href="assets/css/animate.min.css" />
    <!-- Fontawesome css -->
    <link rel="stylesheet" href="assets/css/fontawesome.all.min.css" />
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
    <!-- owl.theme.default css -->
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css" />
    <!-- Magnific popup css -->
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css" />
    <!-- navber css -->
    <link rel="stylesheet" href="assets/css/navber.css" />
    <!-- meanmenu css -->
    <link rel="stylesheet" href="assets/css/meanmenu.css" />
    <!-- Style css -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <!-- Responsive css -->
    <link rel="stylesheet" href="assets/css/responsive.css" />
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/img/favicon.png">

@yield('head')

<!-- BEGIN: CSS Assets-->
    @vite('resources/css/app.css')
@stack('styles')
<!-- END: CSS Assets-->
</head>
<!-- END: Head -->

<body>
<!-- preloader Area -->
<div class="preloader">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="lds-spinner">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
</div>

<!-- Header Area -->
<header class="main_header_arae">
    <!-- Top Bar -->
    <div class="topbar-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <ul class="topbar-list">

                        <li><a href="#!"><i class="fa fa-envelope"></i><span>c4c4csinitiative@gmail.com</span></a>
                        </li>
                        <li><a href="#!"><i class="fa fa-phone"></i><span> +2348092855953, +2348099995750</span></a></li>
{{--                        <li><a href="#!"><span>Faqs</span></a></li>--}}
                    </ul>
                </div>
                <div class="col-lg-6 col-md-6">
                    <ul class="topbar-list-right">
                        <li>
                            <a href="#!"><i class="fab fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#!"><i class="fab fa-twitter-square"></i></a>
                        </li>
                        <li>
                            <a href="#!"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li>
                            <a href="#!"><i class="fab fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar Bar -->
    <div class="navbar-area">
        <div class="main-responsive-nav">
            <div class="container">
                <div class="main-responsive-menu">
                    <div class="logo">
                        <a href="{{route('home')}}">
                            <img src="assets/logo.png" alt="logo">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-navbar">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="{{route('home')}}">
                        <img src="assets/logo.png" alt="logo" width="80">
                    </a>
                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="{{route("home")}}" class="nav-link active">
                                    Home
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('about')}}" class="nav-item">
                                    About
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-item">
                                    Gallery
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('contact')}}" class="nav-link">Contact</a>
                            </li>
                        </ul>
                        <div class="others-options d-flex align-items-center">

                            <div class="option-item">
                                <a href="make-donation.html" class="btn btn_navber">Donate now</a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="others-option-for-responsive">
            <div class="container">
                <div class="dot-menu">
                    <div class="inner">
                        <div class="circle circle-one"></div>
                        <div class="circle circle-two"></div>
                        <div class="circle circle-three"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="option-inner">
                        <div class="others-options d-flex align-items-center">
                            <div class="option-item">
                                <a href="#" class="search-box"><i class="fas fa-search"></i></a>
                            </div>
                            <div class="option-item">
                                <a href="make-donation.html" class="btn  btn_navber">Donate now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- search -->
<div class="search-overlay">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="search-overlay-layer"></div>
            <div class="search-overlay-layer"></div>
            <div class="search-overlay-layer"></div>
            <div class="search-overlay-close">
                <span class="search-overlay-close-line"></span>
                <span class="search-overlay-close-line"></span>
            </div>
            <div class="search-overlay-form">
                <form>
                    <input type="text" class="input-search" placeholder="Search here...">
                    <button type="button"><i class="fas fa-search"></i></button>
                </form>
            </div>
        </div>
    </div>
</div>

@yield('content')

<div class="copyright_area">
    <div class="container">
        <div class="row align-items-center">
            <div class="co-lg-6 col-md-6 col-sm-12 col-12">
                <div class="copyright_left">
                    <p>Copyright © {{date("Y")}} All Rights Reserved</p>
                </div>
            </div>
            <div class="co-lg-6 col-md-6 col-sm-12 col-12">
                <div class="copyright_right">
                    <ul>
                        <li>
                            <a href="#!"><i class="fab fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#!"><i class="fab fa-twitter-square"></i></a>
                        </li>
                        <li>
                            <a href="#!"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li>
                            <a href="#!"><i class="fab fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Top To Bottom Area -->
<div class="go-top">
    <i class="fas fa-chevron-up"></i>
    <i class="fas fa-chevron-up"></i>
</div>
</body>


<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<!-- Bootstrap js -->
<script src="{{asset('assets/js/bootstrap.bundle.js')}}"></script>
<!-- Meanu js -->
<script src="{{asset('assets/js/jquery.meanmenu.js')}}"></script>
<!-- Magnific Popup js -->
<script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
<!-- owl carousel js -->
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<!-- wow.js -->
<script src="{{asset('assets/js/wow.min.js')}}"></script>
<!-- waypoints.js -->
<script src="{{asset('assets/js/waypoints.min.js')}}"></script>
<!-- counterup.js -->
<script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
<!-- Custom js -->
<script src="{{asset('assets/js/custom.js')}}"></script>
<script src="{{asset('assets/js/custom-progress-bar.js')}}"></script>
<script src="{{asset('assets/js/custom-scroll-count.js')}}"></script>
<script src="{{asset('assets/js/video.js')}}"></script>
</html>
