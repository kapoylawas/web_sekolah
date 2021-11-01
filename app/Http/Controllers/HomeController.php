<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Agenda;
use App\Models\Artikel;
use App\Models\Banner;
use App\Models\Galeri;
use App\Models\Guru;
use App\Models\Pengumuman;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index_old',[
            'agenda' => Agenda::latest()->take(3)->get(),
            'artikel' => Artikel::with(['user','kategoriArtikel'])->latest()->take(6)->get(),
            'pengumuman' => Pengumuman::with(['user'])->latest()->take(2)->get(),
            'banner' => Banner::orderBy('created_at', 'asc')->get(),
        ]);
    }

    public function about()
    {
        $data['galeri'] = Galeri::paginate(4);
        return view('home.about',$data);
    }
    
    public function aboutGuru()
    {
        $data['guru'] = Guru::paginate(8);
        return view('home.aboutGuru',$data);
    }

    public function contact()
    {
        return view('home.contact');
    }
}
