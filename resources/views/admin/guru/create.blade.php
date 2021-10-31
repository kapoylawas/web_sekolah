@extends('layouts.backend.app',[
	'title' => 'Tambah Guru',
	'contentTitle' => 'Tambah Guru'
])

@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/summernote') }}/summernote-bs4.min.css">
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/dropify') }}/dist/css/dropify.min.css">
@endpush

@section('content')

<div class="">    
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">
                <a href="{{ route('admin.guru.index') }}" class="btn btn-success btn-sm">Kembali</a>
            </h4>
        </div>
        <div class="card-body">
        <form method="POST" enctype="multipart/form-data" action="{{ route('admin.guru.store') }}">
            @csrf
            <div class="form-group">
                <label for="nama">Nama Lengkap</label>
                <input required="" type="text" name="nama" placeholder="" class="form-control" required> 
            </div>
            <div class="form-group">
                <label for="nip">NIP</label>
                <input required="" type="text" name="nip" placeholder="" class="form-control"> 
            </div>
            <div class="form-group">
                <label for="nuptk">NUPTK</label>
                <input required="" type="text" name="nuptk" placeholder="" class="form-control"> 
            </div>
            <div class="form-group">
                <label for="jabatan">Jabatan</label>
                <select required="" class="form-control" name="jabatan_id">
                    @foreach($jabatan as $jabatan)
                    <option value="{{ $jabatan->id }}">{{ $jabatan->nama_jabatan }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="pangkat_gol">Pangkat / Gol</label>
                <input required="" type="text" name="pangkat_gol" placeholder="" class="form-control"> 
            </div>
            <div class="form-group">
                <label for="pelajaran">Pelajaran</label>
                <input required="" type="text" name="pelajaran" placeholder="Guru Matematika" class="form-control" required> 
            </div>
            <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <select required="" class="form-control" name="jenis_kelamin">
                    <option value="laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="tempat_lahir">Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" class="form-control" required> 
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" class="form-control" required> 
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="telp">Telepon</label>
                <input type="text" name="telp" class="form-control" required> 
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" class="form-control" required> 
            </div>
            <div class="form-group">
                <label for="alamat">alamat</label>
                <textarea class="form-control" name="alamat" id="exampleFormControlTextarea1" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <label>foto</label>
                <input type="file" name="foto" class="dropify form-control" data-height="190" data-allowed-file-extensions="png jpg gif jpeg svg webp jfif" required>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">SIMPAN</button>
        </div>
        </form>
    </div>
</div>

@push('js')
<script type="text/javascript" src="{{ asset('plugins/dropify') }}/dist/js/dropify.min.js"></script>
<script type="text/javascript">
    $('.dropify').dropify({
        messages: {
            default: 'Drag atau Drop untuk memilih gambar',
            replace: 'Ganti',
            remove:  'Hapus',
            error:   'error'
        }
    });
</script>
@endpush
@stop