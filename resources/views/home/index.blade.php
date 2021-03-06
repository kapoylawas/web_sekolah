@extends('layouts.frontend.app',[
    'title' => 'Home',
])
@push('css')
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
        border: medium solid;
        border-width: 10px 0 10px 10px;
        border-color: transparent transparent transparent;
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
        .d-none {
            display: block!important;
        }

        /* Banner */
        #banner {
            position: relative;
            background-image: linear-gradient(to right, #1ea6ec, #2c92fb);
            color: #fff;
            padding-top: 5%;
        }
        .title-ban {
            font-weight: bolder;
            margin-top: 80px;
        }
        .row-banner{
            /* height: 100%; */
        }
        .pendaftaran {
            
        }
    }
</style>
@endpush
@section('content')

<section id="banner">
    <div class="banner" style="padding-bottom: 0;">
        <div class="container">
            <div class="row row-banner">
                <div class="col-md-6">
                    <!-- ##### Hero Area Start ##### -->
                    {{-- <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            @foreach ($banner as $bnr)
                                <li data-target="#carouselExampleIndicators" data-slide-to="{{ $loop->iteration }}" class={{ ($loop->iteration == 1) ? "active" : ""; }}></li>  
                            @endforeach
                        </ol>
                        <div class="carousel-inner">
                            @foreach ($banner as $bnr)
                                <div data-slide="{{ $loop->iteration }}" class='{{ ($loop->iteration == 1) ? "carousel-item active" : "carousel-item"; }}'>
                                    <img style="height: 380px" src="{{ asset('img/bg/'.$bnr->img) }}" class="d-block w-100 img-slider" alt="...">
                                </div>
                            @endforeach
                        </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                            </a>
                    </div> --}}
                    <!-- ##### Hero Area End ##### -->
                    <div class="pendaftaran">
                        <h1 class="title-ban">SMP HANGTUAH 6</h1>
                        <h2>Be Wise, Be Smart, Be Excellence</h2>
                        <p style="color: white;font-weight: bolder; text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;">Telah Dibuka Pendaftaran Siswa Baru Tahun Ajaran 2021-2022</p>
                        <a class="btn btn-warning" style="color: white" href="#">Daftar Sekarang</a>
                    </div>
                </div>

                <div class="col-md-6">
                    <img src="{{ asset('templates/banner-frontend/img/learning.png') }}" class="ban-img img-fluid" alt=""
                        style="position: relative;z-index: 100;"
                    >
                </div>
            </div>
        </div>
    </div>

    <svg class="wafe" xmlns="{{ asset('templates/banner-frontend/img/wave.svg') }}" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" 
        d="M0,160L48,149.3C96,139,192,117,288,133.3C384,149,480,203,576,218.7C672,235,768,213,864,
        218.7C960,224,1056,256,1152,266.7C1248,277,1344,267,1392,261.3L1440,256L1440,320L1392,320C1344,
        320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,
        320,96,320,48,320L0,320Z"
        style="position: absolute; bottom: 0%; left: 0;"></path>
    </svg> <!-- xmlns="http://www.w3.org/2000/svg" -->
</section>
<!-- ##### Hero Area Start ##### -->
{{-- <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        @foreach ($banner as $bnr)
            <li data-target="#carouselExampleIndicators" data-slide-to="{{ $loop->iteration }}" class={{ ($loop->iteration == 1) ? "active" : ""; }}></li>  
        @endforeach
    </ol>
    <div class="carousel-inner">
        @foreach ($banner as $bnr)
            <div data-slide="{{ $loop->iteration }}" class='{{ ($loop->iteration == 1) ? "carousel-item active" : "carousel-item"; }}'>
                <img src="{{ asset('img/bg/'.$bnr->img) }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <div class="p-3 rounded shadow-sm bg-white-50">
                        <div class="p-4 text-center border card card-ppdb">
                            <h1 class="display-5 font-weight-bold">SMP 6 HANGTUAH</h1>
                            <p class="mt-3 lead text-capitalize-bold">SIDOARJO</p>
                            <a href="{{ url('/ppdb') }}" class="m-auto rounded btn btn-primary btn-lg w-50">Info PPDB</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
        </a>
</div> --}}
<!-- ##### Hero Area End ##### -->

{{-- Info Campaign --}}
{{-- <div class="info-campaign" style="background-color: #fbf2eb"> --}}
<div class="info-campaign" style="background-color: #c7dbf5">
    <div class="container py-5 text-white">
        <h1 class="text-center">SAMBUTAN KEPALA SEKOLAH</h2><br>
        <div class="text-center row">
            <div class="col-lg-3">
                <img src="{{ url('img/kepsek.jpeg') }}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-9" style="color: black">
                <p class="text-justify">
                    Assalamu???alaikum warahmatullah wabarakatuh. Dengan rahmat Allah Subhanahu wa ta???ala. 
                    Kami mengucapkan selamat datang di website SMP Hang Tuah 6 Excellent Juanda. 
                    Besar harapan kami semoga website ini bermanfaat untuk memberi informasi tentang sekolah 
                    bagi siswa, guru, orang tua maupun masyarakat luas, memberi ruang untuk menyampaikan 
                    kegiatan-kegiatan sekolah, dan memotivasi untuk pengembangan sekolah. Kami akan berupaya 
                    untuk ikut mencerdaskan kehidupan bangsa dengan baik dalam rangka menyongsong era digital 
                    bagi anak-anak kita dan menjadikannya generasi islami yang berakhlak mulia, lulusan yang 
                    berkarakter, religius, menguasai IPTEK, berprestasi, berwawasan kemaritiman, berbudaya 
                    lingkungan, dan mampu bersaing di tingkat internasional.
                </p>

                Irra Fatukawati, S.Si., M.Si. - Kepala Sekolah SMP Hang Tuah 6 Excellent Juanda.
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