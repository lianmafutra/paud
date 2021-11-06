<?php

namespace App\Http\Controllers;

use App\Pendaftaran;
use Illuminate\Http\Request;

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
        return view('admin.pendaftaran.index');
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
}
