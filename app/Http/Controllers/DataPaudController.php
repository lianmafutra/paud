<?php

namespace App\Http\Controllers;

use App\DataPaud;
use Illuminate\Http\Request;

class DataPaudController extends Controller
{

    public function index(){
        $data_paud = DataPaud::first();
        return view('admin.pengaturan.index', compact('data_paud'));
    }



    public function UpdateNoWhatsapp(Request $request){

        $data_paud = DataPaud::find(1);
        $data_paud->update($request->all());
        toastr()->success('Data Berhasil Diperbarui!');
        return redirect()->back();


    }

    public function indexVisiMisi(){
        $data_paud = DataPaud::first();
        return view('admin.visi_misi', compact('data_paud'));
    }

    public function updateVisiMisi(Request $request){

        $data_paud = DataPaud::find(1);
        $data_paud->update($request->all());
        toastr()->success('Data Berhasil Diperbarui!');
        return redirect()->back();
    }


    public function indexPaketPaud(Request $request){
        $paket_paud = DataPaud::first();
        return view('admin.paket_paud', compact('paket_paud'));
    }

    public function updatePaketPaud(Request $request){

        $data_paud = DataPaud::find(1);
        $data_paud->update($request->all());
        toastr()->success('Data Berhasil Diperbarui!');
        return redirect()->back();
    }

    public function indexLatarBelakang(){
        $data_paud = DataPaud::first();
        return view('admin.latar_belakang', compact('data_paud'));
    }

    public function updateLatarBelakang(Request $request){

        $data_paud = DataPaud::find(1);
        $data_paud->update($request->all());
        toastr()->success('Data Berhasil Diperbarui!');
        return redirect()->back();

    }
}
