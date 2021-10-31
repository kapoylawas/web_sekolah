@extends('layouts.backend.app',[
	'title' => 'Tambah Jabatan',
	'contentTitle' => 'Tambah Jabatan'
])
@section('content')

<div class="">    
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">
                <a href="{{ route('admin.jabatan.index') }}" class="btn btn-success btn-sm">Kembali</a>
            </h4>
        </div>
        <div class="card-body">
        <form method="POST" enctype="multipart/form-data" action="{{ route('admin.jabatan.store') }}">
            @csrf
            <div class="form-group">
                <label for="nama_jabatan">Nama Jabatan</label>
                <input required="" type="" name="nama_jabatan" placeholder="" class="form-control"> 
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">SIMPAN</button>
        </div>
        </form>
    </div>
</div>

@stop