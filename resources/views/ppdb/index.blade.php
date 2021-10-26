@extends('layouts.frontend.app',[
'title' => 'List Pengumuman',
])
@section('content')

<style>
    /* Jumbotron */
    .jumbotron {
        height: 87.5vh;
        background-image: url('{{ asset('img/bg/bg1.jpg') }}');
        background-size: cover;
        background-repeat: no-repeat;
        border-radius: 0;
    }

    .jumbotron .bg-white-50:hover {
        background: rgb(255, 255, 255, .15);
    }

    @media (max-width: 575.98px) {
        .jumbotron .btn.rounded {
            width: 100% !important;
        }

        .jumbotron .display-4 {
            font-size: 42px;
        }
    }

    /* Info Campaign */
    @media (max-width: 575.98px) {
        .info-campaign .fa-2x.text {
            font-size: 24px;
        }
    }

    /* Dana Tersalurkan */
    .dana-tersalurkan .card {
        border: 0;
        box-shadow: 0 1rem 3rem rgb(0, 0, 0, .1) !important;
        transition: 1s;
    }

    .dana-tersalurkan .card:hover,
    .dana-tersalurkan .card:focus {
        transform: translateY(-5px);
    }

    /* Galang Dana2 */
    @media (max-width: 575.98px) {
        .galang-dana2 .fa-3x {
            font-size: 32px;
        }

        .galang-dana2 h3 {
            font-size: 18px;
        }
    }

    /* The actual timeline (the vertical ruler) */
    .timeline {
        position: relative;
        max-width: 1200px;
        margin: 0 auto;
    }

    /* The actual timeline (the vertical ruler) */
    .timeline::after {
        content: '';
        position: absolute;
        width: 6px;
        background-color: #AB5CAF;
        top: 0;
        bottom: 0;
        left: 50%;
        margin-left: -3px;
    }

    /* Container around content */
    .wadah {
        padding: 10px 40px;
        position: relative;
        background-color: inherit;
        width: 50%;
    }

    /* The circles on the timeline */
    .wadah::after {
        content: '';
        position: absolute;
        width: 25px;
        height: 25px;
        right: -17px;
        background-color: white;
        border: 4px solid #FF9F55;
        top: 15px;
        border-radius: 50%;
        z-index: 1;
    }

    /* Place the container to the left */
    .left {
        left: 0;
    }

    /* Place the container to the right */
    .right {
        left: 50%;
    }

    /* Add arrows to the left container (pointing right) */
    .left::before {
        content: " ";
        height: 0;
        position: absolute;
        top: 22px;
        width: 0;
        z-index: 1;
        right: 30px;
        border: medium solid #33015A;
        border-width: 10px 0 10px 10px;
        border-color: transparent transparent transparent #33015A;
    }

    /* Add arrows to the right container (pointing left) */
    .right::before {
        content: " ";
        height: 0;
        position: absolute;
        top: 22px;
        width: 0;
        z-index: 1;
        left: 30px;
        border: medium solid #33015A;
        border-width: 10px 10px 10px 0;
        border-color: transparent #33015A transparent transparent;
    }

    /* Fix the circle for containers on the right side */
    .right::after {
        left: -16px;
    }

    /* The actual content */
    .content {
        padding: 20px 30px;
        position: relative;
        border-radius: 6px;
    }

    /* Media queries - Responsive timeline on screens less than 600px wide */
    @media screen and (max-width: 600px) {

        /* Place the timelime to the left */
        .timeline::after {
            left: 31px;
        }

        /* Full-width containers */
        .wadah {
            width: 100%;
            padding-left: 70px;
            padding-right: 25px;
        }

        /* Make sure that all arrows are pointing leftwards */
        .wadah::before {
            left: 60px;
            border: medium solid #33015A;
            border-width: 10px 10px 10px 0;
            border-color: transparent #33015A transparent transparent;
        }

        /* Make sure all circles are at the same spot */
        .left::after,
        .right::after {
            left: 15px;
        }

        /* Make all right containers behave like the left ones */
        .right {
            left: 0%;
        }
    }
</style>

<!-- Peta Jalan -->
<div class="container" style="padding-top: 5rem; padding-bottom: 4rem;">
    <div align="center" style="padding-bottom: 4rem;">
        <h2 style="color: #33015A"><b>Informasi PPDB</b> SMP HANGTUA 5 SIDOARJO</h2>
        <hr>
    </div>
    <div class="timeline">
        <div class="wadah left">
            <div class="content" style="background-color: #F78320; color: #FFFFFF">
                <i class="fas fa-city fa-2x" style="margin-bottom: 10px;"></i>
                <h5><b>1. Pembangunan Lorem ipsum dolor sit amet</b></h5>
                <p>Laraschool adalah Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse </p>
            </div>
        </div>
        <div class="wadah right">
            <div class="content" style="background-color: #42B745; color: #FFFFFF">
                <i class="fas fa-desktop fa-2x" style="margin-bottom: 10px;"></i>
                <h5><b>2. Pembangunan Lorem ipsum dolor sit amet</b></h5>
                <p>PLaraschool adalah Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</p>
            </div>
        </div>
    </div>
</div>
</div>

@stop