<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Pendaftaran;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use RealRashid\SweetAlert\Facades\Alert;

class PendaftaranController extends Controller
{
    public function pilihPendaftaran(){
        return view('frontend.pendaftaran_pilih');
    }

    public function prosesPendaftaran($jenis){

        return view('frontend.pendaftaran_proses', compact('jenis'));
    }

    public function kirimPendaftaran(Request $request){
       
        try {
            $last_id = Pendaftaran::latest()->first();
            $last_id = $last_id->id+1;
            $kode_pendaftaran = $request->jenis_pendaftaran.'-'.$last_id.'-'.Carbon::now()->format('d').Carbon::now()->format('m').Carbon::now()->format('y');
            $request->request->add(['kode_pendaftaran' =>  $kode_pendaftaran]); 
            $pendaftaran = Pendaftaran::create($request->all());
       
            return redirect()->back()->with( ['kode_pendaftaran' => $kode_pendaftaran] );
        } catch(\Illuminate\Database\QueryException $e){
            $errorCode = $e->errorInfo[1];
            if($errorCode == '1062'){
                $last_id = Pendaftaran::latest()->first();
                $last_id = $last_id->id+1;
                $kode_pendaftaran = $request->jenis_pendaftaran.'-'.$last_id.'-'.Carbon::now()->format('d').Carbon::now()->format('m').Carbon::now()->format('y');
                $request->request->add(['kode_pendaftaran' =>  $kode_pendaftaran]); 
                $pendaftaran = Pendaftaran::create($request->all());
             
                return redirect()->back()->with( ['kode_pendaftaran' => $kode_pendaftaran] );
            }
        }

      
    }
}
