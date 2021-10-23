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
            width: 170px;
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
    </style>

    @stack('css')
</head>
<div class="footer bg-dark">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-3 text-white-80">
                <div class="mb-4 footer-logo">
                    <img src="{{ asset('img/icons') }}/smp.jpeg" alt="" style="width: 50px;">
                </div>
                <p class="text-white-80 text-decoration-none" >
                    Jl. Sukodono <br>
                    Sidoarjo, Jawa Timur
                </p>
                <p class="text-white-80 text-decoration-none mb-1"><i class="mr-2 fas fa-phone-alt"></i> 0813-0394-2343</p>
                <p class="text-white-80 text-decoration-none mb-1"><i class="mr-2 fas fa-envelope"></i> support@w2charity.com</p>
                <p class="text-white-80 text-decoration-none mb-1"><i class="mr-2 fas fa-globe"></i> www.w2charity.com</p>
            </div>
            <div class="col-lg-3 text-white-80">
                <h5 class="mb-2 mb-lg-4">Testing</h5>
                <p class="mb-1 mb-lg-3">
                    <a href="" class="text-white-80 text-decoration-none">Testing1</a> <br>
                    {{-- <small class="text-muted">{{ tanggal_indonesia(now()) }}</small> --}}
                </p>
                <p class="mb-1 mb-lg-3">
                    <a href="" class="text-white-80 text-decoration-none">Testing2</a> <br>
                    {{-- <small class="text-muted">{{ tanggal_indonesia(now()) }}</small> --}}
                </p>
            </div>
            <div class="col-lg-3 text-white-80">
                <h5 class="mb-2 mb-lg-4">Testing</h5>
                <p class="mb-1 mb-lg-3"><a href="" class="text-white-80 text-decoration-none">Tentang Kami</a></p>
                <p class="mb-1 mb-lg-3"><a href="" class="text-white-80 text-decoration-none">Syarat dan
                        Ketentuan</a></p>
                <p class="mb-1 mb-lg-3"><a href="" class="text-white-80 text-decoration-none">Kebijakan dan
                        Privasi</a></p>
            </div>
            <div class="col-lg-3 text-white-80">
                <h5 class="mb-2 mb-lg-4">Mari Berbagi</h5>
                <form action="" class="mb-3 input-group">
                    <input type="text" class="form-control" placeholder="Masukan email">
                    <div class="input-group-append">
                        <button class="px-3 btn btn-primary"><i class="fas fa-paper-plane"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>