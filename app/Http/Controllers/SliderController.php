<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slider = Slider::latest();
        if (request()->ajax()) {
            return datatables()->of($slider)
                ->addIndexColumn()
                ->addColumn('action', function($slider){
                    return view('admin.slider.action', compact('slider'));
                 })
                 ->addColumn('poster', function ($slider) {
                        $poster = '<img src="'.$slider->getPoster().'" height="150px">';
                        return $poster;
                })
                ->rawColumns(["action","poster"])
                ->make(true);
        }
      
        return view('admin.slider.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.slider.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
                
                   $array=['poster'];
                    foreach ($array as $key => $value) {
                        if($request->has($value)){
                                $files = $request->file($value);  
                                $name_uniqe =  uniqid().'-'.now()->timestamp.'.'.$files->getClientOriginalExtension();
                                $files->move('uploads', $name_uniqe);
                                $input[$value] = $name_uniqe;
                        }
                   }        
                    Slider::create($input);
                    toastr()->success('Data Berhasil Disimpan!');
                    return redirect()->route('slider.index');
                
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $slider =  Slider::find($id);
        return view("admin.slider.detail", compact('slider'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            Slider::destroy($id);
        } catch (\Throwable $th) {
            return $this->errorResponse("Terjadi Kesalahan" . $th, 400);
        }
    }
}
