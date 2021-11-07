<?php

namespace App\Http\Controllers;

use App\Pendaftaran;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PendaftaranController extends Controller
{
    public function index(Request $request){

     

        if (request()->ajax()) {
            $pendaftaran = Pendaftaran::latest()
            ->where('jenis_pendaftaran', 'LIKE', '%' . $request->jenis_pendaftaran . '%')
            ->where('status_pendaftaran', 'LIKE', '%' . $request->status_pendaftaran . '%');;
            return datatables()->of($pendaftaran)
                ->addIndexColumn()
                ->addColumn('action', function($pendaftaran){
                    return view('admin.pendaftaran.action', compact('pendaftaran'));
                 })
                ->rawColumns(["action"])
                ->make(true);

             
        }
        
        $jumlah_diterima = Pendaftaran::where('status_pendaftaran', 'diterima')->get()->count();
        $jumlah_ditolak = Pendaftaran::where('status_pendaftaran', 'ditolak')->get()->count();
        $jumlah_diproses = Pendaftaran::where('status_pendaftaran', 'diproses')->get()->count();
        $total = Pendaftaran::get()->count();

        return view('admin.pendaftaran.index', compact(['jumlah_diterima','jumlah_ditolak','jumlah_diproses', 'total']));
    }

    public function destroy($id){
        try {
           $pendaftaran =  Pendaftaran::destroy($id);
        } catch (\Throwable $th) {
            return $this->errorResponse("Terjadi Kesalahan" . $th, 400);
        }
    }

    public function detail($id){
        $pendaftaran =  Pendaftaran::find($id);
        return view('admin.pendaftaran.detail', compact('pendaftaran'));
    }

    public function updateStatus(Request $request){

        $pendaftaran = Pendaftaran::find($request->id)->update([
            "status_pendaftaran"      =>$request->status_pendaftaran,
        ]);

        if($request->status_pendaftaran=="diterima"){
            Alert::success('Berhasil', 'Pendaftaran berhasil disetujui  ');
        }
        if($request->status_pendaftaran=="ditolak"){
            Alert::success('Berhasil', 'Pendaftaran berhasil ditolak  ');
        }

   
      
   
    }

}
