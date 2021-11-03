<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\PaketTPA;
use App\Pendaftaran;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;


class PendaftaranController extends Controller
{
    public function pilihPendaftaran(){
       $paket_tpa = PaketTPA::all();
        return view('frontend.pendaftaran_pilih', compact('paket_tpa'));
    }

    public function prosesPendaftaran($jenis, $paket_tpa=""){

        $data = PaketTPA::find($paket_tpa);

        return view('frontend.pendaftaran_proses', compact(['jenis','data']));
    }

    public function kirimPendaftaran(Request $request){

        try {
            $last_id = Pendaftaran::latest()->first();
            $last_id = $last_id->id+1;
            $kode_pendaftaran = $request->jenis_pendaftaran.'-'.$last_id.'-'.Carbon::now()->format('d').Carbon::now()->format('m').Carbon::now()->format('y');
            $request->request->add(['kode_pendaftaran' =>  $kode_pendaftaran]);
            $pendaftaran = Pendaftaran::create($request->all());

            return redirect()->back()->with( ['kode_pendaftaran' => $kode_pendaftaran, 'jenis_pendaftaran' => $request->jenis_pendaftaran] );
        } catch(\Illuminate\Database\QueryException $e){
            $errorCode = $e->errorInfo[1];
            if($errorCode == '1062'){
                $last_id = Pendaftaran::latest()->first();
                $last_id = $last_id->id+1;
                $kode_pendaftaran = $request->jenis_pendaftaran.'-'.$last_id.'-'.Carbon::now()->format('d').Carbon::now()->format('m').Carbon::now()->format('y');
                $request->request->add(['kode_pendaftaran' =>  $kode_pendaftaran]);
                $pendaftaran = Pendaftaran::create($request->all());

                return redirect()->back()->with( ['kode_pendaftaran' => $kode_pendaftaran, 'jenis_pendaftaran' => $request->jenis_pendaftaran] );
            }
            
        }


    }
}
