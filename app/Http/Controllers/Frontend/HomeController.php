<?php

namespace App\Http\Controllers\Frontend;

use App\Berita;
use App\DataPaud;
use App\Http\Controllers\Controller;
use App\Slider;
use Symfony\Component\VarDumper\Cloner\Data;

class HomeController extends Controller
{
    public function index(){
        $berita = Berita::all();
        $slider = Slider::all();
        return view('frontend.index', compact(['berita','slider']));
    }

    public function visiMisi(){
        $data_paud = DataPaud::first();
        return view('frontend.visi_misi', compact('data_paud'));
    }

    public function artikel(){
        $berita = Berita::all();
        return view('frontend.artikel', compact('berita'));
    }

    public function artikelDetail($id){
        $berita = Berita::find($id);
        return view('frontend.artikel_detail', compact('berita'));
    }

    public function strukturOrganisasi(){
        return view('frontend.struktur_organisasi');
    }

    public function latarBelakang(){
        $data_paud = DataPaud::first();
        return view('frontend.latar_belakang',  compact('data_paud'));
    }

    public function galeri(){
        return view('frontend.galeri');
    }

    public function pendaftaran(){
        return view('frontend.pendaftaran');
    }




}
