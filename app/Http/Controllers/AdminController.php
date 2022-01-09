<?php

namespace App\Http\Controllers;

use App\AdminSetting;
use Illuminate\Http\Request;
class AdminController extends Controller
{
    public function index(){
        return view('admin.dashboard.index');
    }

    public function SettingNoWhatsapp(){
        $admin_setting = AdminSetting::first();
        return view('admin.pengaturan.index', compact('admin_setting'));
    }

    public function UpdateNoWhatsapp(Request $request){

        $admin_setting = AdminSetting::find(1);
        $admin_setting->update(["no_wa"=> $request->no_wa]);
        toastr()->success('Nomor WhatsApp Berhasil Diperbarui!');
        return redirect()->back();
        
    }


}
