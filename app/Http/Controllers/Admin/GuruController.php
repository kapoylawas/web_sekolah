<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Guru;
use App\Models\Jabatan;
use App\Services\UploadService;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    private $uploadService;

    public function __construct(UploadService $uploadService)
    {
        $this->uploadService = $uploadService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guru = Guru::get();
        return view('admin.guru.index', compact('guru'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jabatan = Jabatan::get();
        return view('admin.guru.create',compact('jabatan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Guru::create([
            'nama' => $request->nama,
            'nip' => $request->nip,
            'nuptk' => $request->nuptk,
            'jabatan_id' => $request->jabatan_id,
            'pelajaran' => $request->pelajaran,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tempat_lahir' => strtoupper($request->tempat_lahir),
            'tanggal_lahir' => $request->tanggal_lahir,
            'pangkat_gol' => $request->pangkat_gol,
            'email' => $request->email,
            'telp' => $request->telp,
            'alamat' => $request->alamat,
            'foto' => $this->uploadService->fotoGuru('artikel'),
        ]);
        return redirect()->route('admin.guru.index')->with('success', 'Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $guru = Guru::where('id', $id)->first();
        return view('admin.guru.show', compact('guru'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $guru = Guru::where('id', $id)->first();
        $jabatan = Jabatan::get();
        return view('admin.guru.edit', compact(['guru','jabatan']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Guru::where('id', $id)->update([
            'nama' => $request->nama,
            'nip' => $request->nip,
            'nuptk' => $request->nuptk,
            'jabatan_id' => $request->jabatan_id,
            'pelajaran' => $request->pelajaran,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tempat_lahir' => strtoupper($request->tempat_lahir),
            'tanggal_lahir' => $request->tanggal_lahir,
            'pangkat_gol' => $request->pangkat_gol,
            'email' => $request->email,
            'telp' => $request->telp,
            'alamat' => $request->alamat,
            'foto' => $this->uploadService->fotoGuru('artikel'),
        ]);
        return redirect()->route('admin.guru.index')->with('success', 'Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $file = Guru::select('foto')->where('id', '=', $id)->first();
        unlink(public_path("foto/guru/artikel/" . $file->foto));
        Guru::where('id', '=', $id)->delete();
        return redirect()->route('admin.guru.index')->with('success', 'Data berhasil dihapus');
    }
}
