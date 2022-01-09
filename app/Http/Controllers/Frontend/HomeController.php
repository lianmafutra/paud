<?php

namespace App\Http\Controllers\Frontend;

use App\Berita;
use App\DataPaud;
use App\Galeri;
use App\GaleriAlbum;
use App\Http\Controllers\Controller;
use App\Slider;


class HomeController extends Controller
{
    public function index(){
        $berita = Berita::all();
        $slider = Slider::all();
        $data_paud = DataPaud::first();
        return view('frontend.index', compact(['berita','slider','data_paud']));
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
    
    public function fasilitas(){
        $data_paud = DataPaud::first();
        return view('frontend.fasilitas', compact('data_paud'));
    }
    

    public function latarBelakang(){
        $data_paud = DataPaud::first();
        return view('frontend.latar_belakang',  compact('data_paud'));
    }

    public function galeri(){
        $galeri = GaleriAlbum::with('galeri')->get();
        return view('frontend.galeri', compact('galeri'));
    }

    public function galeriDetail($id){
        $galeri = Galeri::where('galeri_album_id', $id)->get();
        $galeri_album = GaleriAlbum::find($id);
        return view('frontend.galeri_detail', compact('galeri','galeri_album'));
    }

  




}
