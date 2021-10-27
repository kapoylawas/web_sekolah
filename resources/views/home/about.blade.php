@extends('layouts.frontend.app',[
    'title' => 'About',
])
@section('content')
<div class="regular-page-area section-padding-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="page-content">
                    <h4 class="text-center">Tentang Kami</h4>
                    <p>Laraschool adalah Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum..</p>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="page-content">
                    <h4 class="text-center">Galery</h4>
                    <div class="container">
                        <div class="row row-cols-4">
                            @foreach ($galeri as $gl)
                                <div class="col"><img src="{{ asset('img/galeri/'.$gl->img) }}" style="height: 200px" class="card-img-top" alt=""></div>
                            @endforeach
                        </div>
                        <br>
                        <div class="col-lg pagination pagination-center justify-content-center">
                            {{ $galeri->appends(Request::all())->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop