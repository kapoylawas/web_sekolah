@extends('layouts.frontend.app',[
'title' => 'Contact',
])
@section('content')

<style>
    @media (max-width: 575.98px) {
        .text-lg {
            font-size: 18px;
        }
    }
</style>
<section class="contact-area">
    <div class="container">
        <div class="row">

            <div class="bg-white punya-pertanyaan">
                <div class="container py-5">
                    <div class="row">
                        <div class="text-center col-lg-12">
                            <h2 class="mb-4 display-5">Punya Pertanyaan?</h2>
                            <p class="mb-5 text-lg">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, sunt.
                                <br>
                                amet consectetur adipisicing elit. Quibusdam, neque!
                            </p>
                        </div>
                        <div class="text-center col-lg-4">
                            <p class="icon">
                                <i class="fas fa-phone fa-2x"></i>
                            </p>
                            <p class="mb-1 font-weight-bold">Hubungi Kami</p>
                            <p class="mb-0 text">0813-3243-3434</p>
                        </div>
                        <div class="text-center col-lg-4">
                            <p class="icon">
                                <i class="fas fa-map-marker-alt fa-2x"></i>
                            </p>
                            <p class="mb-1 font-weight-bold">Alamat</p>
                            <p class="mb-0 text">Jl. Sukodono <br>Sidoarjo, Jawa Timur</p>
                        </div>
                        <div class="text-center col-lg-4">
                            <p class="icon">
                                <i class="fas fa-envelope fa-2x"></i>
                            </p>
                            <p class="mb-1 font-weight-bold">Email</p>
                            <p class="mb-0 text">support@w2charity.com</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Contact Info -->
            {{-- <div class="col-12 col-lg-6">
                <div class="contact--info mt-50">
                    <h4>Info Kontak</h4>
                    <ul class="contact-list">
                        <li>
                            <h6><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i> Jam Masuk</h6>
                            <h6>9:00 WIB - 17:00 WIB</h6>
                        </li>
                        <li>
                            <h6><i class="fa fa-phone fa-fw" aria-hidden="true"></i> No Telp</h6>
                            <h6>+1 123 321 456 654</h6>
                        </li>
                        <li>
                            <h6><i class="fa fa-envelope fa-fw" aria-hidden="true"></i> Email</h6>
                            <h6>laraschool@examlpe.com</h6>
                        </li>
                        <li>
                            <h6><i class="fa fa-map-pin fa-fw" aria-hidden="true"></i> Alamat</h6>
                            <h6>Berlin,Germany</h6>
                        </li>
                    </ul>
                </div>
            </div> --}}

            {{-- <div class="col-12 col-lg-6">
                <div class="contact--info mt-50 mb-50">
                    <h4>Tulis Pesan</h4>
                    <form method="POST" action="">
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="nama" id="text" placeholder="Nama">
                                    @error('nama')
                                    <div class="invalid-feedback">
                                        {{ $message }}
        </div>
        @enderror
    </div>
    </div>
    <div class="col-12 col-lg-6">
        <div class="form-group">
            <input type="email" class="form-control" name="email" id="email" placeholder="Email">
            @error('email')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <textarea class="form-control" name="isi" id="message" cols="30" rows="5" placeholder="Pesan"></textarea>
            <small id="emailHelp" class="form-text text-muted">Maksimal kirim 5 kali dengan
                email yang sama</small>
            @error('isi')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>
    @csrf
    <div class="col-12">
        <button class="btn clever-btn w-100" type="submit">Kirim</button>
    </div>
    </div>

    </form>
    </div>
    </div> --}}

   

    </div>
    </div>

     {{-- Form Kontak --}}
     <div class="form-kontak">
        <div class="container py-5">
            <div class="row">
                <div class="text-center col-lg-12">
                    <h2 class="mb-4 display-5">Kontak Kami</h2>
                    <p class="mb-5 text-lg">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, sunt.
                        <br>
                        amet consectetur adipisicing elit. Quibusdam, neque!
                    </p>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <form action="">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Masukan nama">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Masukan no telepon">
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Masukan email">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Masukan subjek">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea rows="5" class="form-control" placeholder="Masukan pesan"></textarea>
                        </div>
                        <div class="text-right form-group">
                            <button class="btn btn-primary">
                                <i class="fas fa-paper-plane"></i>
                                Kirim Pesan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.8801651585873!2d112.69723911424977!3d-7.478483094605356!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7e0db9fce31c7%3A0x928ca6bd5a39d601!2sSMP%20Hang%20Tuah%205%20Candi%20Sidoarjo!5e0!3m2!1sen!2sid!4v1634877661569!5m2!1sen!2sid"
        width="1420" height="500" style="border:0;" allowfullscreen="" loading="lazy">
    </iframe>
</section>
@stop