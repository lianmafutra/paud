<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    public function pilihPendaftaran(){
        return view('frontend.pendaftaran_pilih');
    }

    public function prosesPendaftaran($jenis){

        return view('frontend.pendaftaran_proses', compact('jenis'));
    }

    public function kirimPendaftaran(Request $request){
        dd($request->all());
    }
}
