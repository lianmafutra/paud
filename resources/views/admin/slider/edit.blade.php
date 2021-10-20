@extends('layouts.master')

@push('css')

<link href="{{ URL::asset('plugins/filepond/filepond.css') }}" rel="stylesheet" />
<link href="{{ URL::asset('plugins/filepond/filepond-plugin-image-preview.css') }} " rel="stylesheet"/>
<link href="{{ URL::asset('plugins/filepond/filepond-plugin-get-file.css')}}" rel="stylesheet" />
<link href="{{ URL::asset('plugins/filepond/filepond-plugin-file-poster.css')}}" rel="stylesheet"
/>

@endpush()
<meta name="csrf-token" content="{{ csrf_token() }}">
@section('title') Admin Dashboard @endsection
@section('content')<div style="padding-top: 20px" class="row">
  <section class="col-lg-12 ">
    <div class="card">
      <div class="card-header">
        <h3 style="padding-top: 10px" class="card-title">
          <i class="fas fa-chart-pie mr-1"></i> Edit Data slider
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
        <form action="{{ route('slider.update', $slider->id)  }}" method="POST" enctype="multipart/form-data">
            @csrf
             @method('PUT')
             <div class="form-group">
           <input name="id" value="{{ $slider->id }}" hidden>
          </div>

          <div class="col-lg-6 ">
            <div class="form-group">
                <label for="example-text-input" class="col-form-label">Judul <span style="color: rgb(230, 67, 67)">*</span></label>
                <input required value="{{ $slider->judul }}" placeholder="" name="judul" type="text" id="judul"
                    class="input form-control">
            </div>


            <div class="form-group">
              <label for="example-text-input" class="col-form-label">Text 1 <span style="color: rgb(230, 67, 67)">*</span></label>
              <input required value="{{ $slider->text1 }}" placeholder="" name="text1" type="text" id="text1"
                  class="input form-control">
          </div>


          <div class="form-group">
              <label for="example-text-input" class="col-form-label">Text 2 <span style="color: rgb(230, 67, 67)">*</span></label>
              <input required value="{{ $slider->text2 }}" placeholder="" name="text2" type="text" id="text2"
                  class="input form-control">
          </div>


          <div class="form-group">
              <label for="example-text-input" class="col-form-label">Text 3 <span style="color: rgb(230, 67, 67)">*</span></label>
              <input required value="{{ $slider->text3 }}" placeholder="" name="text3" type="text" id="text3"
                  class="input form-control">
          </div>


              <div class="form-group">
                <label>Upload Poster <span style="font-size: 10px; color:#ff7272; font-style : italic"> (Jenis
                        file : jpg, png | Max : 1 MB)</span> </label>
                <input required type="file" data-max-file-size="1 MB" class="filepond" accept="image/jpeg, image/png"
                    name="poster">
            </div>
        </div>


             </div>

       </div>
            </div>

      </div>
      <div class="card-footer">
                <a class="btn btn-success waves-effect waves-light" style="margin-right:10px; float:left ;right: 10px; z-index: 40" href="{{ route('slider.index') }}">Kembali</a>
          <button type="submit" class="btn_update btn btn-primary waves-effect waves-light" style="float:left ;right: 10px; z-index: 40">Update</button>

      </div>
       </form>
    </div>
  </section>
</div>

@endsection
@push('js')


<script src="{{ URL::asset('plugins/filepond/filepond-plugin-image-preview.js') }}"></script>
<script src="{{ URL::asset('plugins/filepond/filepond.js') }}"></script>
<script src="{{ URL::asset('plugins/filepond/filepond-plugin-file-metadata.js') }}"></script>
<script src="{{ URL::asset('plugins/filepond/filepond-plugin-file-encode.js') }}"></script>
<script src="{{ URL::asset('plugins/filepond/filepond-plugin-file-validate-type.js') }}"></script>
<script src="{{ URL::asset('plugins/filepond/filepond-plugin-file-validate-size.js') }} "></script>
<script src="{{ URL::asset('plugins/filepond/filepond-plugin-get-file.js')}}"></script>
<script src="{{ URL::asset('js/ckeditor/ckeditor.js')}}"></script>
<script src="{{ URL::asset('plugins/filepond/filepond-plugin-file-poster.js')}}"></script>
<script type="text/javascript">

$(function(){


  FilePond.registerPlugin(FilePondPluginImagePreview,
      FilePondPluginFileValidateType,FilePondPluginGetFile,
      FilePondPluginFileValidateSize,FilePondPluginFilePoster ,FilePondPluginFileEncode );

    const pond = FilePond.create(document.querySelector('input[name="poster"]'),{
        storeAsFile: true,
        files: [
        {
            source: '/uploads/'+{!! json_encode($slider->poster) !!},
        }
    ]

    });



});



  </script>
  @endpush
