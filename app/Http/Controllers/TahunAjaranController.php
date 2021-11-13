<?php

namespace App\Http\Controllers;

use App\Pendaftaran;
use App\TahunAjaran;
use Illuminate\Http\Request;

class TahunAjaranController extends Controller
{
    public function index(){

    
        if (request()->ajax()) {
            $tahun_ajaran = TahunAjaran::latest();

            return datatables()->of($tahun_ajaran)
                ->addIndexColumn()
                ->addColumn('action', function($tahun_ajaran){
                    return view('admin.tahun_ajaran.action', compact('tahun_ajaran'));
                 })
                 ->addColumn('pendaftaran_masuk', function($tahun_ajaran){
                    $pendaftaran_masuk = Pendaftaran::where('tahun_ajaran_id', $tahun_ajaran->id)->count(); 
                    return $pendaftaran_masuk." siswa";
                 })
                 ->addColumn('diproses', function($tahun_ajaran){
                    $diproses = Pendaftaran::where('tahun_ajaran_id', $tahun_ajaran->id)->where('status_pendaftaran', 'diproses')->count(); 
                    return $diproses." siswa";
                 })
                 ->addColumn('ditolak', function($tahun_ajaran){
                    $ditolak = Pendaftaran::where('tahun_ajaran_id', $tahun_ajaran->id)->where('status_pendaftaran', 'ditolak')->count(); 
                    return $ditolak." siswa";
                 })
                 ->addColumn('diterima', function($tahun_ajaran){
                    $diterima = Pendaftaran::where('tahun_ajaran_id', $tahun_ajaran->id)->where('status_pendaftaran', 'diterima')->count(); 
                    return $diterima." siswa";
                 })
                ->rawColumns(["action"])
                ->make(true);    
        }
        return view('admin.tahun_ajaran.index');
    }

    public function create()
    {
        return view("admin.tahun_ajaran.create");
    }

    
    public function edit(TahunAjaran $tahun_ajaran)
    {
        return view("admin.tahun_ajaran.edit", compact('tahun_ajaran'));
    }

    public function show(Request $request, $id)
    {   
        // $tahun_ajaran = TahunAjaran::with('pendaftaran')->get();
        // return view("admin.pendaftaran.detail", compact('tahun_ajaran'));
        $tahun_ajaran = TahunAjaran::find($id);
        
        if (request()->ajax()) {
            $pendaftaran = Pendaftaran::latest()
            ->where('tahun_ajaran_id', $id)
            ->where('jenis_pendaftaran', 'LIKE', '%' . $request->jenis_pendaftaran . '%')
            ->where('status_pendaftaran', 'LIKE', '%' . $request->status_pendaftaran . '%');
    
            return datatables()->of($pendaftaran)
                ->addIndexColumn()
                ->addColumn('action', function($pendaftaran){
                    return view('admin.pendaftaran.action', compact('pendaftaran'));
                 })
                 ->addColumn('status_pendaftaran', function($pendaftaran){
                    if($pendaftaran->status_pendaftaran=='diterima'){
                        return '<span class="badge badge-success right">'.$pendaftaran->status_pendaftaran.'</span>';
                     }
                     if($pendaftaran->status_pendaftaran=='diproses'){
                        return '<span class="badge badge-info right">'.$pendaftaran->status_pendaftaran.'</span>';
                    }
                    if($pendaftaran->status_pendaftaran=='ditolak'){
                         return '<span class="badge badge-danger right">'.$pendaftaran->status_pendaftaran.'</span>';
                    }
                 })
                ->rawColumns(['action','status_pendaftaran'])
                ->make(true);    
        }
        
        $jumlah_diterima = Pendaftaran::where('status_pendaftaran', 'diterima')->get()->count();
        $jumlah_ditolak = Pendaftaran::where('status_pendaftaran', 'ditolak')->get()->count();
        $jumlah_diproses = Pendaftaran::where('status_pendaftaran', 'diproses')->get()->count();
        $total = Pendaftaran::get()->count();

        return view('admin.pendaftaran.index', compact(['tahun_ajaran','jumlah_diterima','jumlah_ditolak','jumlah_diproses', 'total']));
    }


    
    public function store(Request $request)
    {
        $tahun_ajaran = TahunAjaran::create($request->all());
        toastr()->success('Pendaftaran Berhasil Dibuat!');
        return redirect()->route('tahun-ajaran.index');
    }

    public function update(Request $request,  $id)
    {
        $data = TahunAjaran::find($id);
        $data->update($request->all());
        toastr()->success('Pendaftaran Berhasil DiUpdate!');
        return redirect()->route('tahun-ajaran.index');
    }

    public function selesai(Request $request, $id)
    {  
        //cek dulu jika ditahun ajaran tersebut masih ada yang diproses maka belum bisa 
        try {
            $cek_proses = Pendaftaran::where('tahun_ajaran_id', $id)->where('status_pendaftaran', 'diproses')->get()->count();
            if($cek_proses==0){

            TahunAjaran::where('id', $id)
            ->update(['status_pengumuman' => $request->status_pengumuman]);


            if($request->status_pengumuman=="proses"){
                return response()->json([
                    'success'    => true,
                    'message'    => "Data Pengumuman berhasil dibatalkan"
                ], 200);
                return redirect()->back();
            }else if($request->status_pengumuman=="selesai"){
                return response()->json([
                    'success'    => true,
                    'message'    => "Data seleksi Pendaftaran berhasil di umumkan"
                ], 200);
                return redirect()->back();
            }

            }else{ 

                return response()->json([
                    'success'    => false,
                    'error_code' => '001',
                    'message'    => "Data pendaftaran masih ada yang belum di proses"
                ], 400);
               
            }
        
        } catch (\Throwable $th) {
            return $this->errorResponse("Terjadi Kesalahan" . $th, 400);
        }
    }


    public function destroy($id)
    {
        try {
            TahunAjaran::destroy($id);
        } catch (\Throwable $th) {
            return $this->errorResponse("Terjadi Kesalahan" . $th, 400);
        }
    }
}
