<?php

namespace App\Http\Controllers;

use App\Berita;
use App\Http\Requests\BeritaStoreRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $berita = Berita::latest();
        if (request()->ajax()) {
            return datatables()->of($berita)
                ->addIndexColumn()
                ->addColumn('action', function($berita){
                    return view('admin.berita.action', compact('berita'));
                 })
                ->rawColumns(["action"])
                ->make(true);
        }
      
        return view("admin.berita.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.berita.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BeritaStoreRequest $request)
    {
        $input = $request->all();
                $validated = $request->validated();
                if($validated){  
                   $array=['poster'];
                    foreach ($array as $key => $value) {
                        if($request->has($value)){
                                $files = $request->file($value);  
                                $name_uniqe =  uniqid().'-'.now()->timestamp.'.'.$files->getClientOriginalExtension();
                                $files->move('uploads', $name_uniqe);
                                $input[$value] = $name_uniqe;
                        }
                   }        
                    Berita::create($input);
                    toastr()->success('Data Berhasil Disimpan!');
                    return redirect()->route('berita.index')->with('success','Data Berhasil Disimpan');
                }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $berita =  Berita::find($id);
        return view("admin.berita.detail", compact('berita'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $berita =  Berita::find($id);
        return view("admin.berita.edit", compact('berita'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function update(BeritaStoreRequest $request)
    {
        try {

            $berita = Berita::find($request->id);
            if($request->poster->getClientOriginalName() == $berita->poster){
                $berita->update([
                    'judul' => $request->judul,
                    'isi' => $request->isi,
                    'poster' =>  $berita->poster
                ]);
            }else{
                $files = $request->file('poster');  
             
                $name_uniqe =  uniqid().'-'.now()->timestamp.'.'.$files->getClientOriginalExtension();
              
                $files->move('uploads', $name_uniqe);
              
                $filepath = public_path("/uploads".$berita->poster);
        
                if (File::exists($filepath)) {
                   File::delete(  $filepath);
                }
           
                $berita->update([
                    'judul' => $request->judul,
                    'isi' => $request->isi,
                    'poster' => $name_uniqe
                ]);
            }
          
        toastr()->info('Berita Berhasil diperbarui');
        return redirect()->route('berita.index');
        } catch (\Throwable $th) {
            toastr()->error('Gagal Mengupdate Data');
        }
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            Berita::destroy($id);
        } catch (\Throwable $th) {
            return $this->errorResponse("Terjadi Kesalahan" . $th, 400);
        }
    }
}
