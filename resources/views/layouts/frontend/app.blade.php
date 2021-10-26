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
        width: 40px;
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *Must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>SMP Hangtuah | {{ $title ?? '' }}</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('templates/frontend/clever') }}/img/core-img/smp.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ asset('templates/frontend/clever') }}/style.css">
    {{-- @stack('css') --}}
</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="spinner"></div>
    </div>

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
                    <a href="{{ url('/ppdb') }}" class="py-0 btn btn-sm btn-light rounded-0">PPDB</a>
                    <a href="{{ url('/login') }}" class="py-0 btn btn-sm btn-light rounded-0">Admin</a>
                </div>
            </div>
        </div>
    </div>

        <!-- Navbar Area -->
        @include('layouts.frontend.navbar')
    </header>
    <!-- ##### Header Area End ##### -->

    @yield('content')

    <!-- ##### Footer Area Start ##### -->
    @include('layouts.frontend.footer')
    <!-- ##### Footer Area End ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="{{ asset('templates/frontend/clever') }}/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="{{ asset('templates/frontend/clever') }}/js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="{{ asset('templates/frontend/clever') }}/js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="{{ asset('templates/frontend/clever') }}/js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="{{ asset('templates/frontend/clever') }}/js/active.js"></script>
    @stack('js')
</body>
</html>