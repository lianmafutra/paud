<?php

namespace App\Http\Controllers\Frontend;

use App\Berita;
use App\Http\Controllers\Controller;


class HomeController extends Controller
{
    public function index(){
        $berita = Berita::all();
        return view('frontend.index', compact('berita'));
    }

    public function visiMisi(){
        return view('frontend.visi_misi');
    }

    public function artikel(){
        $berita = Berita::all();
        return view('frontend.artikel', compact('berita'));
    }

    public function strukturOrganisasi(){
        return view('frontend.struktur_organisasi');
    }

    public function  latarBelakang(){
        return view('frontend.latar_belakang');
    }

    public function  galeri(){
        return view('frontend.galeri');
    }

    public function  pendaftaran(){
        return view('frontend.pendaftaran');
    }

    
}
