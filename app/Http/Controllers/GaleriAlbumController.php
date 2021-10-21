<?php

namespace App\Http\Controllers;

use App\Galeri;
use App\GaleriAlbum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
class GaleriAlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $galeri_album = GaleriAlbum::with('galeri')->latest();

        if (request()->ajax()) {
            return datatables()->of($galeri_album)
                ->addIndexColumn()
                ->addColumn('action', function($galeri_album){
                    return view('admin.galeri_album.action', compact('galeri_album'));
                 })
                ->rawColumns(["action"])
                ->make(true);
        }
        return view('admin.galeri_album.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $input = $request->all();

        foreach($request->file('gambar') as $file)
            {
                $name_uniqe =  uniqid().'-'.now()->timestamp.'.'.$file->getClientOriginalExtension();
                $file->move('uploads', $name_uniqe);
                $input['gambar'] = $name_uniqe;
                $input['galeri_album_id'] = $request->galeri_album_id;
                $galeri = Galeri::create($input);
            }

        toastr()->success('File Berhasil Diupload!');
        return redirect()->back();
        } catch (\Throwable $th) {
            toastr()->success('Gagal upload file');
            return redirect()->back();
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(GaleriAlbum $galeri_album)
    {
        return view('admin.galeri_album.edit', compact('galeri_album'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $galeri_album = GaleriAlbum::find($id)->update([
            "deskripsi" => $request->deskripsi
        ]);
        toastr()->success('File Berhasil Diupload!');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
