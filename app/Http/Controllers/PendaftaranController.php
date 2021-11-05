<?php

namespace App\Http\Controllers;

use App\Pendaftaran;


class PendaftaranController extends Controller
{
    public function index(){
        $pendaftaran = Pendaftaran::latest();
        if (request()->ajax()) {
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
}
