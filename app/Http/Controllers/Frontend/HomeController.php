<?php

namespace App\Http\Controllers\Frontend;

use App\Berita;
use App\DataPaud;
use App\Http\Controllers\Controller;
use App\Slider;


class HomeController extends Controller
{
    public function index(){
        $berita = Berita::all();
        $slider = Slider::all();


        return view('frontend.index', compact(['berita','slider']));
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
