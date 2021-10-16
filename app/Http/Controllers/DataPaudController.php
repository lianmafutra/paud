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
}
