<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>{{ config('app.name') }} - @yield('title')</title>

    <link rel="icon" href="{{ asset('/img/favicon.png') }}" type="image/*">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap"
        rel="stylesheet">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

        <style>
        .nav-brand img {
            width: 60px;
        }
        .left::before {
            content: " ";
            height: 0;
            position: absolute;
            top: 22px;
            width: 0;
            z-index: 1;
            right: 30px;
            /* border: medium solid #33015A; */
            border-width: 10px 0 10px 10px;
            /* border-color: transparent transparent transparent #33015A; */
        }
        .classy-navbar {
            justify-content: flex-start;
        }
        @media only screen and (max-width: 768px) {
            img.card-img-top.img-responsive {
                margin: 5px;
            }
            .classy-navbar {
                justify-content: space-between;
            }
        }
        .nav-link.active {
            color: #007bff !important;
        }
        </style>

    {{-- <style>
        body {
            font-family: 'Roboto', sans-serif;
            font-size: 1rem;
        }

        /* Utilities */
        .bg-white-50 {
            background: rgba(255, 255, 255, .5);
            transition: .5s;
        }

        .bg-dark-50 {
            background: rgba(0, 0, 0, .5);
        }

        .bg-light {
            background: #f4f6f9;
        }

        .text-white-80 {
            color: rgba(255, 255, 255, .8);
        }

        .text-lg {
            font-size: 1.25rem;
        }

        a.text-white-80:hover {
            color: rgba(255, 255, 255, .5);
        }

        /* Header & Navbar */
        .header {
            font-size: 14px;
        }

        .navbar-brand img {
            width: 30px;
            position: absolute;
            top: 4px;
        }

        #navbar1 .nav-link {
            padding: .35rem 1.25rem;
            border-radius: 25px;
            color: #333333;
            transition: .3s;
        }

        #navbar1 .nav-link:hover,
        #navbar1 .nav-link:focus,
        #navbar1 .nav-link.active {
            background: var(--primary);
            color: var(--white);
        }

        #navbar1 .dropdown-menu {
            padding: 0;
            border-radius: 0;
            border: 0;
            margin-top: 0;
        }

        #navbar1 .dropdown-item {
            transition: .3s;
        }

        #navbar1 .dropdown-item:hover,
        #navbar1 .dropdown-item:focus {
            background: var(--primary);
            color: var(--white);
        }

        .navbar-toggler {
            border: 0;
            background: transparent !important;
        }

        .navbar-toggler:focus {
            outline: 0;
            background: transparent !important;
        }

        .navbar-toggler .icon-bar {
            background-color: rgba(0, 0, 0, .7);
            transform: rotate(0deg) translate(0px, 0px);
            transition: ease all .2s;
            display: block;
            width: 22px;
            height: 2px;
            border-radius: 1px;
        }

        .navbar-toggler .icon-bar+.icon-bar {
            margin-top: 4px;
        }

        .icon-bar:nth-child(2) {
            width: 16px;
            transition: ease all .2s;
        }

        .navbar-toggler:hover>.icon-bar:nth-child(2) {
            width: 22px;
            transition: ease all .2s;
        }

        .navbar-toggler:active>.icon-bar:nth-child(2) {
            width: 22px;
            transition: ease all .2s;
        }

        .navbar-toggler:not(.collapsed):not(.first-load) .icon-bar:nth-child(1) {
            transform: rotate(45deg) translate(5px, 4px);
            transition: ease all .2s;
        }

        .navbar-toggler:not(.collapsed):not(.first-load) .icon-bar:nth-child(2) {
            opacity: 0;
            transition: ease all .2s;
        }

        .navbar-toggler:not(.collapsed):not(.first-load) .icon-bar:nth-child(3) {
            transform: rotate(-45deg) translate(4px, -4px);
            transition: ease all .2s;
        }

        @media (max-width: 992px) {
            .header .social {
                text-align: center;
                margin-bottom: 1rem;
            }

            .header .office-info {
                margin-bottom: 1rem;
            }

            .header .office-info a {
                white-space: nowrap;
            }

            .header .action {
                text-align: center;
            }
        }

         /* Banner */
         .banner {
            min-height: 280px;
            display: flex;
            align-items: flex-end;
            padding-bottom: 10px;
            position: relative;
        }
        .banner.bg-charity2 {
            background-image: url('{{ asset("/img/bgcharity2.png") }}');
            background-size: contain;
            background-repeat: no-repeat;
            background-position: bottom;
        }
        .banner.bg-charity2 h2 {
            text-shadow: 1px 1px 3px rgba(0, 0, 0, .8);
        }

        @media (max-width: 768px) {
            #navbar1 .nav-link:first-child:not(.dropdown-toggle) {
                display: none;
            }
        }

        @media (max-width: 575.98px) {
            #navbar1 .nav-link {
                border-radius: 0;
            }

            #navbar1 .nav-link:first-child:not(.dropdown-toggle) {
                display: block;
            }

            .navbar-collapse {
                margin-top: 1rem;
                transition: .3s;
            }

            .navbar-brand {
                padding-top: 1.25rem;
                padding-bottom: 1.25rem;
            }

            .navbar-brand img {
                top: 7.5px;
            }
        }
    </style> --}}

    @stack('css')
</head>

<body class="bg-light">
    {{-- Header --}}


    {{-- Navbar --}}
    {{-- <nav class="bg-white navbar navbar-expand-sm sticky-top navbar-light border-bottom" style="top: -1px;">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('/img/icons/smp.jpeg') }}" alt="" class="navbar-brand img">
            </a>
            <button class="navbar-toggler first-load" type="button" data-toggle="collapse" data-target="#navbar1"
                aria-controls="navbar1" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar top-bar"></span>
                <span class="icon-bar middle-bar"></span>
                <span class="icon-bar bottom-bar"></span>
                <span class="sr-only">Toggle navigation</span>
            </button>

            <div class="collapse navbar-collapse" id="navbar1">
                <ul class="ml-auto navbar-nav">
                    <a class="nav-link @if(request()->is('/')) active @endif" href="{{ url('/') }}">Home</a>
                    <a class="nav-link @if(request()->is('contact')) active @endif" href="{{ url('/contact') }}">Kontak</a>
                    <a class="nav-link @if(request()->is('artikel')) active @endif" href="{{ url('/artikel') }}">Artikel</a>
                    <a class="nav-link @if(request()->is('about')) active @endif" href="{{ url('/about') }}">Tentang Kami</a>
                </ul>
            </div>
        </div>
    </nav> --}}

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="py-2 text-white header bg-primary">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-3 social">
                        <a href="" class="text-white"><i class="fab fa-linkedin-in"></i></a>
                        <a href="" class="ml-4 text-white"><i class="fab fa-twitter"></i></a>
                        <a href="" class="ml-4 text-white"><i class="fab fa-google"></i></a>
                        <a href="" class="ml-4 text-white"><i class="fab fa-facebook-f"></i></a>
                    </div>
                    <div class="text-center col-lg-7 office-info">
                        <a href="" class="text-white text-decoration-none">
                            <i class="fas fa-phone-alt"></i>
                            <span class="ml-1">0813-0394-2343</span>
                        </a>
                        <a href="" class="ml-3 text-white text-decoration-none">
                            <i class="far fa-clock"></i>
                            <span class="ml-1">Senin - Jum'at, 08:00 s/d 16:00</span>
                        </a>
                        <a href="" class="ml-3 text-white text-decoration-none">
                            <i class="fa fa-envelope"></i>
                            <span class="ml-1">info@smpht5sidoarjo.sch.id</span>
                        </a>
                    </div>
                    <div class="col-ml-5 action" style="white-space: nowrap;">
                        {{-- <a href="{{ url('/ppdb') }}" class="btn btn-light btn-sm">PPDB</a>
                        <a href="{{ url('/login') }}" class="btn btn-light btn-sm">Admin</a> --}}
                        {{-- <a href="{{ url('/ppdb') }}" class="py-0 btn btn-sm btn-light rounded-0">PPDB</a>
                        <a href="{{ url('/login') }}" class="py-0 btn btn-sm btn-light rounded-0">Admin</a> --}}
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="clever-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <!-- Menu -->
                <nav class="classy-navbar" id="cleverNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="{{ url('/') }}"><img src="{{ asset('/img/icons/smp.jpeg') }}" alt=""></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    {{-- <div class="classy-menu" style="width: 60%"> --}}
                    <div class="classy-menu" style="margin: auto;">

                        <!-- Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        {{-- <div class="classynav" style="margin-left:40% !important;"> --}}
                        <div class="classynav">
                            <ul>
                                <li><a class="nav-link @if(request()->is('/')) active @endif" href="{{ url('/') }}">Home</a></li>
                                <li><a class="nav-link @if(request()->is('contact')) active @endif" href="{{ url('/contact') }}">Kontak</a></li>
                                <li><a class="nav-link @if(request()->is('artikel')) active @endif" href="{{ url('/artikel') }}">Artikel</a></li>
                                <li><a class="nav-link @if(request()->is('ppdb')) active @endif" href="{{ url('/ppdb') }}">PPDB</a></li>
                                <li><a class="nav-link @if(request()->is('about') || request()->is('about/about-guru')) active @endif" href="#">Tentang Kami</a>
                                    <ul class="dropdown">
                                        <li><a href="{{ url('/about') }}">Profil Sekolah</a></li>
                                        <li><a href="{{ url('/about/about-guru') }}">Profil Guru</a></li>
                                    </ul>
                                </li>
                            </ul>

                            <!-- Search Button -->
                            {{-- <div class="search-area">
                                <form action="#" method="post">
                                    <input type="search" name="search" id="search" placeholder="Search">
                                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </form>
                            </div> --}}

                            <!-- Register / Login -->
                            {{-- <div class="register-login-area">
                                <a href="#" class="btn">Register</a>
                                <a href="index-login.html" class="btn active">Login</a>
                            </div> --}}

                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->



    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>

    <script>
        $('.navbar-toggler').on('click', function () {
            $(this).removeClass('first-load');
        })
    </script>

    @stack('scripts')
</body>

</html>