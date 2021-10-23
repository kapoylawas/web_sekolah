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
</style>
<!-- ##### Hero Area Start ##### -->
<div class="mb-0 jumbotron d-flex justify-content-center align-items-center">
    <div class="p-3 rounded shadow-sm bg-white-50">
        <div class="p-4 text-center border card">
            <h1 class="display-4 font-weight-bold">Lara Schoool Terbaik</h1>
            <p class="mt-3 lead text-capitalize">Untuk Menuju Sekolah Yang Baik</p>
            <a href="" class="m-auto rounded btn btn-primary btn-lg w-50">Sekolah Sekarang</a>
        </div>
    </div>
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
                <h2 class="mb-4 fa-3x">Agenda</h2>
                <h3 class="mb-3 font-weight-normal">
                    Jika Anda dapat bergabung dengan kami sekarang, <br>
                    maka semakin banyak yang terbantu
                </h3>
            </div>

            @for ($i = 0; $i < 6; $i++) <div class="col-lg-4 col-md-6">
                <div class="mt-4 card">
                    <img src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22286%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20286%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_17affada31b%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A14pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_17affada31b%22%3E%3Crect%20width%3D%22286%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22107.1953125%22%20y%3D%2295.5265625%22%3E286x180%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E"
                        class="card-img-top" alt="...">
                    <div class="p-2 card-body">
                        <div class="d-flex justify-content-between text-dark">
                            {{-- <p class="mb-0">Terkumpul: <strong>1jt</strong></p>
                            <p class="mb-0">Goal: <strong>10jt</strong></p> --}}
                        </div>
                    </div>
                    <div class="p-2 card-body border-top">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque iure iste
                            dolorum eius perspiciatis suscipit in veniam sed consectetur eos.</p>
                    </div>
                    <div class="p-2 card-footer bg-light">
                        <a href="" class="rounded btn btn-primary d-block">
                            <i class="mr-2 fas fa-eye"></i>
                            lihat Sekarang
                        </a>
                    </div>
                </div>
        </div>
        @endfor
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

<div class="bg-white galang-dana2">
    <div class="container py-5">
        <div class="row">
            <div class="text-center col-lg-12">
                <h2 class="mb-4 fa-3x">SMP HANG TUAH</h2>
                <h3 class="mb-4 font-weight-normal">
                    Selamat Datang di Website SMP HANG TUAH 5 CANDI SIDOARJO. Terima Kasih Kunjungannya <br>
                    Terima Kasih Kunjungannya
                </h3>
                <a href="" class="m-auto rounded btn btn-primary btn-lg">Testing</a>
            </div>
        </div>
    </div>
</div>

@stop