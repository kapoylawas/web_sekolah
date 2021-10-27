@extends('layouts.frontend.app',[
    'title' => 'Home',
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
        .left::after, .right::after {
        left: 15px;
        }
        
        /* Make all right containers behave like the left ones */
        .right {
        left: 0%;
        }
        .videowrapper { 
            float: none; 
            clear: both; 
            width: 100%; 
            position: relative; 
            padding-bottom: 56.25%; 
            padding-top: 25px; 
            height: 0; 
        } 
        .videowrapper iframe { 
            position: absolute; 
            top: 0; 
            left: 0; 
            width: 100%; 
            height: 100%; 
        }
    }
</style>
<!-- ##### Hero Area Start ##### -->
{{-- <p class="mt-3 lead text-capitalize">Untuk Menuju Sekolah Yang Baik</p> --}}
{{-- <div class="mb-0 jumbotron d-flex justify-content-center align-items-center">
    <div class="p-3 rounded shadow-sm bg-white-50">
        <div class="p-4 text-center border card">
            <h1 class="display-5 font-weight-bold">SMP 6 HANGTUAH</h1>
            <p class="mt-3 lead text-capitalize-bold">SIDOARJO</p>
            <a href="{{ url('/ppdb') }}" class="m-auto rounded btn btn-primary btn-lg w-50">Info PPDB</a>
        </div>
    </div>
</div> --}}
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        @foreach ($banner as $bnr)
            <li data-target="#carouselExampleIndicators" data-slide-to="{{ $loop->iteration }}" class={{ ($loop->iteration == 1) ? "active" : ""; }}></li>  
        @endforeach
        {{-- <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="7"></li> --}}
    </ol>
    <div class="carousel-inner">
        @foreach ($banner as $bnr)
            <div data-slide="{{ $loop->iteration }}" class='{{ ($loop->iteration == 1) ? "carousel-item active" : "carousel-item"; }}'>
                <img src="{{ asset('img/bg/'.$bnr->img) }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <div class="p-3 rounded shadow-sm bg-white-50">
                        <div class="p-4 text-center border card">
                            <h1 class="display-5 font-weight-bold">SMP 6 HANGTUAH</h1>
                            <p class="mt-3 lead text-capitalize-bold">SIDOARJO</p>
                            <a href="{{ url('/ppdb') }}" class="m-auto rounded btn btn-primary btn-lg w-50">Info PPDB</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        {{-- <div class="carousel-item">
            <img src="{{ asset('img/bg/bg3.jpg') }}" class="d-block w-100" alt="..." style="background-image: url(img/bg-img/bg1.jpg);">
            <div class="carousel-caption d-none d-md-block">
                <div class="p-3 rounded shadow-sm bg-white-50">
                    <div class="p-4 text-center border card">
                        <h1 class="display-5 font-weight-bold">SMP 6 HANGTUAH</h1>
                        <p class="mt-3 lead text-capitalize-bold">SIDOARJO</p>
                        <a href="{{ url('/ppdb') }}" class="m-auto rounded btn btn-primary btn-lg w-50">Info PPDB</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('img/bg/bg4.jpg') }}" class="d-block w-100" alt="..."  style="background-image: url(img/bg-img/bg1.jpg);">
            <div class="carousel-caption d-none d-md-block">
                <div class="p-3 rounded shadow-sm bg-white-50">
                    <div class="p-4 text-center border card">
                        <h1 class="display-5 font-weight-bold">SMP 6 HANGTUAH</h1>
                        <p class="mt-3 lead text-capitalize-bold">SIDOARJO</p>
                        <a href="{{ url('/ppdb') }}" class="m-auto rounded btn btn-primary btn-lg w-50">Info PPDB</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('img/bg/bg5.jpg') }}" class="d-block w-100" alt="..."  style="background-image: url(img/bg-img/bg1.jpg);">
            <div class="carousel-caption d-none d-md-block">
                <div class="p-3 rounded shadow-sm bg-white-50">
                    <div class="p-4 text-center border card">
                        <h1 class="display-5 font-weight-bold">SMP 6 HANGTUAH</h1>
                        <p class="mt-3 lead text-capitalize-bold">SIDOARJO</p>
                        <a href="{{ url('/ppdb') }}" class="m-auto rounded btn btn-primary btn-lg w-50">Info PPDB</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('img/bg/bg6.jpg') }}" class="d-block w-100" alt="..."  style="background-image: url(img/bg-img/bg1.jpg);">
            <div class="carousel-caption d-none d-md-block">
                <div class="p-3 rounded shadow-sm bg-white-50">
                    <div class="p-4 text-center border card">
                        <h1 class="display-5 font-weight-bold">SMP 6 HANGTUAH</h1>
                        <p class="mt-3 lead text-capitalize-bold">SIDOARJO</p>
                        <a href="{{ url('/ppdb') }}" class="m-auto rounded btn btn-primary btn-lg w-50">Info PPDB</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('img/bg/bg7.jpg') }}" class="d-block w-100" alt="..."  style="background-image: url(img/bg-img/bg1.jpg);">
            <div class="carousel-caption d-none d-md-block">
                <div class="p-3 rounded shadow-sm bg-white-50">
                    <div class="p-4 text-center border card">
                        <h1 class="display-5 font-weight-bold">SMP 6 HANGTUAH</h1>
                        <p class="mt-3 lead text-capitalize-bold">SIDOARJO</p>
                        <a href="{{ url('/ppdb') }}" class="m-auto rounded btn btn-primary btn-lg w-50">Info PPDB</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('img/bg/bg8.jpg') }}" class="d-block w-100" alt="..."  style="background-image: url(img/bg-img/bg1.jpg);">
            <div class="carousel-caption d-none d-md-block">
                <div class="p-3 rounded shadow-sm bg-white-50">
                    <div class="p-4 text-center border card">
                        <h1 class="display-5 font-weight-bold">SMP 6 HANGTUAH</h1>
                        <p class="mt-3 lead text-capitalize-bold">SIDOARJO</p>
                        <a href="{{ url('/ppdb') }}" class="m-auto rounded btn btn-primary btn-lg w-50">Info PPDB</a>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
        </a>
    </div>
<!-- ##### Hero Area End ##### -->

{{-- Info Campaign --}}
<div class="info-campaign bg-dark">
    <div class="container py-5 text-white">
        <div class="text-center row">
            <div class="col-lg-3 col-md-6">
                <p class="icon">
                    <i class="fas fa-smile fa-3x"></i>
                </p>
                <p class="fa-2x font-weight-bold">4</p>
                <p class="mb-0 fa-2x text text-uppercase text-white-80">Testing</p>
            </div>
            <div class="col-lg-3 col-md-6">
                <p class="icon">
                    <i class="fas fa-rocket fa-3x"></i>
                </p>
                <p class="fa-2x font-weight-bold">4</p>
                <p class="mb-0 fa-2x text text-uppercase text-white-80">Misi Sukses</p>
            </div>
            <div class="col-lg-3 col-md-6">
                <p class="icon">
                    <i class="fas fa-user-plus fa-3x"></i>
                </p>
                <p class="fa-2x font-weight-bold">4</p>
                <p class="mb-0 fa-2x text text-uppercase text-white-80">Siswa</p>
            </div>
            <div class="col-lg-3 col-md-6">
                <p class="icon">
                    <i class="fas fa-globe fa-3x"></i>
                </p>
                <p class="fa-2x font-weight-bold">4</p>
                <p class="mb-0 fa-2x text text-uppercase text-white-80">Projek</p>
            </div>
        </div>
    </div>
</div>

<div class="dana-tersalurkan">
    <div class="container py-5">
        <div class="row">
            <div class="text-center col-lg-12">
                <h2 class="mb-4 fa-3x">ARTIKEL</h2>
                <h3 class="mb-3 font-weight-normal">
                    Jika Anda dapat bergabung dengan kami sekarang, <br>
                    maka semakin banyak yang terbantu
                </h3>
            </div>

            @foreach ($artikel as $art)
                <div class="col-lg-4 col-md-6">
                <div class="mt-4 card">
                    <img src="{{ asset('uploads/img/artikel/'.$art->thumbnail) }}" style="height: 200px" class="card-img-top" alt="">
                    <div class="p-2 card-body">
                        <div class="d-flex justify-content-between text-dark">
                            {{-- <p class="mb-0">Terkumpul: <strong>1jt</strong></p>
                            <p class="mb-0">Goal: <strong>10jt</strong></p> --}}
                        </div>
                    </div>
                    <div class="p-2 card-body border-top">
                        <h5 class="card-title">{!! Str::substr($art->judul, 0, 33) !!} ...</h5>
                        <p class="card-text">{{ date('d / m / Y', strtotime($art->created_at)) }}</p>
                    </div>
                    <div class="p-2 card-footer bg-light">
                        <a href="{{ url('artikel/'.$art->slug) }}" class="rounded btn btn-primary d-block">
                            <i class="mr-2 fas fa-eye"></i>
                            lihat Sekarang
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <br>
        <div class="row text-center">
            <div class="col align-self-center">
                <a href="{{ url('artikel') }}" class="btn btn-outline-primary">Lihat Selengkapnya</a>
            </div>
        </div>
    </div>
</div>

{{-- @if($pengumuman->count() > 0)
<section class="upcoming-events section-padding-100-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading">
                    <h3>Pengumuman Terbaru</h3>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach($pengumuman as $pn)
            <div class="col-12 col-md-4 col-lg-4">
                <div class="single-upcoming-events mb-50 wow fadeInUp" data-wow-delay="250ms">
                    <!-- Events Thumb -->
                    <div class="events-thumb">
                        <img src="{{ asset('img/bg') }}/pengumuman.png" alt="">
                        <h6 class="event-date">{{ $pn->tgl }} | BY : {{ $pn->user->name }}</h6>
                        <h4 class="event-title">{{ $pn->judul }}</h4>
                    </div>
                    <div>
                        <a href="{{ route('pengumuman.show',$pn->slug) }}" class="btn btn-primary col-lg">Detail</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row">
            <a href="{{ route('pengumuman') }}" class="alert alert-success alert-link mx-auto">Lihat Semua Pengumuman</a>
        </div>
    </div>
</section>
@endif

@if($artikel->count() > 0)
<!-- ##### Artikel ##### -->
<section class="blog-area section-padding-100-0 mb-50">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading">
                    <h3>Artikel Terbaru</h3>
                </div>
            </div>
        </div>

        <div class="row">
            
            @foreach($artikel as $art)
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            {{ $art->judul }}

                            <span class="badge badge-danger float-right">Author : {{ $art->user->name }}</span>
                        </div>
                        <div class="card-body">
                            <img src="{{ asset($art->getThumbnail()) }}" width="100%" style="height: 300px; object-fit: cover; object-position: center;">

                            <div class="card-text mt-3">
                                {!! Str::limit($art->deskripsi) !!}
                            </div>

                            <a href="{{ route('artikel.show',$art->slug) }}" class="btn btn-primary btn-sm">Selengkapnya</a>
                        </div>
                        <div class="card-footer">
                                <span class="badge badge-primary float-right">kategori : {{ $art->kategoriArtikel->nama_kategori }}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row mt-3">
            <a href="{{ route('artikel') }}" class="alert alert-success alert-link mx-auto mt-3">Lihat Semua Artikel</a>
        </div>
    </div>
</section>
@endif --}}

<!-- Peta Jalan -->
<div class="container" style="padding-top: 5rem; padding-bottom: 4rem;">
    <div align="center" style="padding-bottom: 4rem;">
        <h2 style="color: #33015A"><b>Visi Misi</b> SMP HANGTUA 5 SIDOARJO</h2>
        <hr>
    </div>
    <div class="timeline">
        <div class="wadah left">
            <div class="content" style="background-color: #F78320; color: #FFFFFF">
            <i class="fas fa-city fa-2x" style="margin-bottom: 10px;"></i>
            <h5><b>1. Pembangunan Data Center</b></h5>
            <p>Pembangunan ruang data center (dimana nantinya akan menjadi pusat data seluruh SKPD/unit di Kabupaten) yang sesuai memenuhi syarat, seperti diletakkan pada lokasi yang tidak rawan bencana dan dibangun berdasarkan standar tier yang ada, dsb.</p>
            </div>
        </div>
        <div class="wadah right">
            <div class="content" style="background-color: #42B745; color: #FFFFFF">
            <i class="fas fa-desktop fa-2x" style="margin-bottom: 10px;"></i>
            <h5><b>2. Pengadaan Perangkat Aktif pada Data Center</b></h5>
            <p>Pengadaan perangkat aktif yang dibutuhkan untuk mendukung pengadaan data center, seperti server, switch, router, pc personal, dsb.</p>
            </div>
        </div>
        <div class="wadah left">
            <div class="content" style="background-color: #008DD1; color: #FFFFFF">
            <i class="fas fa-network-wired fa-2x" style="margin-bottom: 10px;"></i>
            <h5><b>3. Pembangunan Jaringan FO SKPD, Kec, Desa</b></h5>
            <p>Pembangunan infrastruktur jaringan Fiber Optik untuk menghubungkan SKPD- SKPD yang ada dengan Data Center untuk sentralisasi TIK dan data.</p>
            </div>
        </div>
        <div class="wadah right">
            <div class="content" style="background-color: #F54C8F; color: #FFFFFF">
            <i class="fas fa-users fa-2x" style="margin-bottom: 10px;"></i>
            <h5><b>4. Pembangunan Command Center</b></h5>
            <p>Pembangunan command center sebagai pusat control yang akan terintegrasi dengan Aplikasi dan Dashboard pemerintahan.</p>
            </div>
        </div>
        <div class="wadah left">
            <div class="content" style="background-color: #AA66B1; color: #FFFFFF">
            <i class="fas fa-columns fa-2x" style="margin-bottom: 10px;"></i>
            <h5><b>5. Inventarisasi Aplikasi & Pembuatan Dashboard Aplikasi Internal</b></h5>
            <p>Penginventarisasian aplikasi yang sudah ada atau perlu diadakan baik pada PEMKAB  dan SKPD/unit yang ada pada  Kabupaten yang perlu diintegrasikan dengan Data Center. Pembuatan dashboard untuk big data aplikasi internal yang sudah berjalan atau running pada Data Center untuk memudahkan decision maker dalam proses monitoring dan pengambilan keputusan.</p>
            </div>
        </div>
        <div class="wadah right">
            <div class="content" style="background-color: #FE2826; color: #FFFFFF;">
            <i class="fas fa-photo-video fa-2x" style="margin-bottom: 10px;"></i>
            <h5><b>6. Pembuatan Dashboard Media Eksternal</b></h5>
            <p>Pembuatan dashboard untuk big data media eksternal terkait performansi Pemerintah Kabupaten beserta SKPD/unitnya (seperti opini yang beredar pada media sosial facebook atau twitter terkait performansi kinerja Pemerintah Kabupaten) untuk memudahkan decision maker dalam proses monitoring dan pengambilan keputusan.</p>
            </div>
        </div>
        <div class="wadah left">
            <div class="content" style="background-color: #2297A1; color: #FFFFFF">
            <i class="fas fa-mobile-alt fa-2x" style="margin-bottom: 10px;"></i>
            <h5><b>7. Pembuatan Mobile Application</b></h5>
            <p>Pembuatan aplikasi mobile disesuaikan dengan kebutuhan Pemerintah Kabupaten guna memudahkan decision maker untuk memantau kinerja terkait performansi Pemerintah Kabupaten (misal : pembuatan aplikasi mobile untuk dashboard big data aplikasi internal).</p>
            </div>
        </div>
    </div>
</div>
</div>

<div class="bg-white galang-dana2">
    <div class="container py-5">
        <div class="row">
            <div class="text-center col-lg-12">
                <h2 class="mb-4 fa-3x">SMP 6 HANGTUAH SIDOARJO</h2>
                {{-- <h3 class="mb-4 font-weight-normal">
                    Selamat Datang di Website SMP HANG TUAH 5 CANDI SIDOARJO. Terima Kasih Kunjungannya <br>
                    Terima Kasih Kunjungannya
                </h3> --}}
                <div class="videowrapper">
                    <iframe width="660" height="350" src="https://www.youtube.com/embed/Nu6AQaDI7U4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <br>
                <a href="https://www.youtube.com/channel/UCqSOncP3AH1ly53vc1uS4nQ" class="m-auto rounded btn btn-primary btn-lg"><i class="mr-2 fab fa-youtube"></i>Youtube</a>
            </div>
        </div>
    </div>
</div>

@stop