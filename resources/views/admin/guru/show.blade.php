@extends('layouts.backend.app',[
	'title' => 'Detail Data Guru',
	'contentTitle' => 'Detail Data Guru'
])

@section('content')

<div class="">    
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">
                <a href="{{ route('admin.guru.index') }}" class="btn btn-success btn-sm">Kembali</a>
            </h4>
        </div>
        <div class="card-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <img src="{{ asset('foto/guru/artikel/'.$guru->foto) }}" style="height: 200px;width: 200px" class="card-img-top" alt="">
                    </div>
                    <div class="col-md-6">
                        <table>
                            <tr>
                                <th>Nama</th>
                                <th>:</th>
                                <td>{{ $guru->nama }}</td>
                            </tr>
                            <tr>
                                <th>NIP</th>
                                <th>:</th>
                                <td>{{ $guru->nip }}</td>
                            </tr>
                            <tr>
                                <th>NUPTK</th>
                                <th>:</th>
                                <td>{{ $guru->nuptk }}</td>
                            </tr>
                            <tr>
                                <th>Jenis Kelamin</th>
                                <th>:</th>
                                <td>{{ $guru->jenis_kelamin }}</td>
                            </tr>
                            <tr>
                                <th>Tempat, Tanggal Lahir</th>
                                <th>:</th>
                                <td>{{ $guru->tempat_lahir }}, {{ date('d-m-Y', strtotime($guru->tanggal_lahir)); }}</td>
                            </tr>
                            <tr>
                                <th>Pelajaran</th>
                                <th>:</th>
                                <td>{{ $guru->pelajaran }}</td>
                            </tr>
                            <tr>
                                <th>Pangkat/Gol</th>
                                <th>:</th>
                                <td>{{ $guru->pangkat_gol }}</td>
                            </tr>
                            <tr>
                                <th>Jabatan</th>
                                <th>:</th>
                                <td>{{ $guru->jabatan->nama_jabatan }}</td>
                            </tr>
                            <tr>
                                <th>Telepon</th>
                                <th>:</th>
                                <td>{{ $guru->telp }}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <th>:</th>
                                <td>{{ $guru->email }}</td>
                            </tr>
                            <tr>
                                <th>Alamat</th>
                                <th>:</th>
                                <td>{{ $guru->alamat }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        </form>
    </div>
</div>
@stop