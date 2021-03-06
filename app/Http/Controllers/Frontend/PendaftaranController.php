<?php

namespace App\Http\Controllers\Frontend;

use App\DataPaud;
use App\Http\Controllers\Controller;
use App\PaketTPA;
use App\Pendaftaran;
use App\TahunAjaran;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class PendaftaranController extends Controller
{
    public function pilihPendaftaran(){
     
       $paket_tpa = PaketTPA::all();
       $paket_paud = DataPaud::find(1);
        return view('frontend.pendaftaran_pilih', compact(['paket_tpa','paket_paud']));
    }

    public function prosesPendaftaran($jenis, $paket_tpa=""){

        $data = PaketTPA::find($paket_tpa);
   
        $tahun_ajaran = TahunAjaran::latest()->first();

        return view('frontend.pendaftaran_proses', compact(['jenis','data', 'tahun_ajaran']));
    }

    public function kirimPendaftaran(Request $request){

        try {


            $input = $request->all();
         

            $last_id = Pendaftaran::latest()->first();
            if($last_id!=null){
                $last_id = $last_id->id+1;
            }else{
                $last_id = 1;
            }
          
            $kode_pendaftaran = $request->jenis_pendaftaran.'-'.$last_id.'-'.Carbon::now()->format('d').Carbon::now()->format('m').Carbon::now()->format('y');

           //upload file

            $file_akte =  $request->file('file_akte');
            $file_kk =  $request->file('file_kk');

            $name_uniqe_akte =  uniqid().'-'.now()->timestamp.'.'.$file_akte->getClientOriginalExtension();
            $name_uniqe_kk =  uniqid().'-'.now()->timestamp.'.'.$file_kk->getClientOriginalExtension();

            $file_akte->move('uploads', $name_uniqe_akte);
            $file_kk->move('uploads', $name_uniqe_kk);

            $input['file_akte'] = $name_uniqe_akte;
            $input['file_kk'] = $name_uniqe_kk;

            $input['kode_pendaftaran'] = $kode_pendaftaran;

            $pendaftaran = Pendaftaran::create($input);



            return redirect()->back()->with( ['kode_pendaftaran' => $kode_pendaftaran, 'jenis_pendaftaran' => $request->jenis_pendaftaran] );


        } catch(QueryException $e){
            $errorCode = $e->errorInfo[1];
            if($errorCode == '1062'){
                $last_id = Pendaftaran::latest()->first();
                $last_id = $last_id->id+1;
                $kode_pendaftaran = $request->jenis_pendaftaran.'-'.$last_id.'-'.Carbon::now()->format('d').Carbon::now()->format('m').Carbon::now()->format('y');
                $request->request->add(['kode_pendaftaran' =>  $kode_pendaftaran]);
                $pendaftaran = Pendaftaran::create($request->all());
                return redirect()->back()->with( ['kode_pendaftaran' => $kode_pendaftaran, 'jenis_pendaftaran' => $request->jenis_pendaftaran] );
            }else{
                return back()->with('error', $e->getMessage());
            }
        } catch(Exception $e){
            return back()->with('error', $e->getMessage());
        }
    }

    public function pengumuman(){
        $tahun_ajaran = TahunAjaran::latest()->get();
        return view('frontend.pengumuman', compact(['tahun_ajaran']));
    }

    public function pengumumanDetail(Request $request, $id){
        $tahun_ajaran = TahunAjaran::find($request->segment(4));
        $pendaftaran = Pendaftaran::where('status_pendaftaran','diterima')->where('tahun_ajaran_id', $request->segment(4))->latest()->get();
        return view('frontend.pengumuman_detail', compact('pendaftaran','tahun_ajaran'));
    }

    public function cekQR($kode_pendaftaran){
       $pendaftaran = Pendaftaran::where('kode_pendaftaran', $kode_pendaftaran)->first();
       
        return view('frontend.cekQR', compact('pendaftaran'));
    }
}
