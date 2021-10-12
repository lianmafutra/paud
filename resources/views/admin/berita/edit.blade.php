@extends('layouts.master')

@push('css')
<link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet" />
<link href="https://nielsboogaard.github.io/filepond-plugin-get-file/dist/filepond-plugin-get-file.css" rel="stylesheet" />

<link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css"
    rel="stylesheet"/>
    <link
    href="https://unpkg.com/filepond-plugin-file-poster/dist/filepond-plugin-file-poster.css"
    rel="stylesheet"
/>

@endpush()
<meta name="csrf-token" content="{{ csrf_token() }}">
@section('title') Admin Dashboard @endsection
@section('content')<div style="padding-top: 20px" class="row">
  <section class="col-lg-12 ">
    <div class="card">
      <div class="card-header">
        <h3 style="padding-top: 10px" class="card-title">
          <i class="fas fa-chart-pie mr-1"></i> Edit Data berita
        </h3>

      </div>
      <div class="card-body">
        @if ($errors->any())
          <div class="alert alert-danger">
              <strong>Gagal,</strong> Terjadi Kesalahan, Periksa inputan dengan benar<br><br>
              <ul>
                
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
        @endif
        <form action="{{ route('berita.update', $berita->id)  }}" method="POST" enctype="multipart/form-data">
            @csrf
             @method('PUT')
             <div class="form-group">
           <input name="id" value="{{ $berita->id }}" hidden>
          </div>
            <div class="col-lg-6 ">
                <div class="form-group">
                <label for="example-text-input" class="col-form-label">Judul</label>
                <input value="{{ $berita->judul }}"  placeholder="Input Judul Berita" name="judul" type="text" id="judul" class="input form-control">
            </div>
            <div class="form-group">
              <label>Isi Konten</label>
              <textarea id="isi" name="isi" class="ckeditor form-control" rows="3" placeholder=""
                  style="margin-top: 0px; margin-bottom: 0px; height: 99px;">{{old("isi")}}</textarea>
          </div>
          <div class="form-group">
            <label>Upload Poster <span style="font-size: 10px; color:#ff7272; font-style : italic"> (Jenis
                    file : jpg, png | Max : 1 MB)</span> </label>
            <input type="file" data-max-file-size="1 MB" class="filepond" accept="image/jpeg, image/png"
                name="poster">
        </div>

             </div>
        
       </div>
            </div>
       
      </div>
      <div class="card-footer">
                <a class="btn btn-success waves-effect waves-light" style="margin-right:10px; float:left ;right: 10px; z-index: 40" href="{{ route('berita.index') }}">Kembali</a>
          <button type="submit" class="btn_update btn btn-primary waves-effect waves-light" style="float:left ;right: 10px; z-index: 40">Update</button>

      </div>
       </form>
    </div>
  </section>
</div>

@endsection
@push('js')
<script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
<script src="https://unpkg.com/filepond-plugin-file-encode/dist/filepond-plugin-file-encode.js"></script>
<script src="https://unpkg.com/filepond/dist/filepond.js"></script>
<script src="https://nielsboogaard.github.io/filepond-plugin-get-file/dist/filepond-plugin-get-file.js"></script>
<script src="{{ URL::asset('js/ckeditor/ckeditor.js')}}"></script>
<script src="https://unpkg.com/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.js"></script>
<script src="https://unpkg.com/filepond-plugin-file-validate-size/dist/filepond-plugin-file-validate-size.js"></script>
<script src="https://unpkg.com/filepond-plugin-file-poster/dist/filepond-plugin-file-poster.js"></script>
<script type="text/javascript">

$(function(){
  var editor = CKEDITOR.instances.isi;
    editor.setData({!! json_encode($berita->isi) !!}); 
  
  FilePond.registerPlugin(FilePondPluginImagePreview,
      FilePondPluginFileValidateType,FilePondPluginGetFile,
      FilePondPluginFileValidateSize,FilePondPluginFilePoster ,FilePondPluginFileEncode );


    const pond = FilePond.create( document.querySelector('input[name="poster"]'),{
        storeAsFile: true,
        files: [
        {
            source: '/uploads/'+{!! json_encode($berita->poster) !!},
        },
    ],
       
    });
        
 

});


  
  </script>
  @endpush