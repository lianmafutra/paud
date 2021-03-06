@extends('layouts.master')

@push('css')
<link href="{{ URL::asset('plugins/filepond/filepond.css') }}" rel="stylesheet" />
<link href="{{ URL::asset('plugins/filepond/filepond-plugin-image-preview.css') }} " rel="stylesheet"/>


@endpush()
<meta name="csrf-token" content="{{ csrf_token() }}">
@section('title') Admin Dashboard @endsection
@section('content')<div style="padding-top: 20px" class="row">
  <section class="col-lg-12 ">
      <div class="card">
          <div class="card-header">
              <h3 style="padding-top: 10px" class="card-title">
                  <i class="fas fa-chart-pie mr-1"></i> Buat Artikel Baru
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
              <form action="{{ route('berita.store') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="col-lg-6 ">
                      <div class="form-group">
                          <label for="example-text-input" class="col-form-label">Judul <span style="color: rgb(230, 67, 67)">*</span></label>
                          <input value="{{old("judul ") }}" placeholder="" name="judul" type="text" id="judul"
                              class="input form-control">
                      </div>
                      <div class="form-group">
                          <label>Isi Konten <span style="color: rgb(230, 67, 67)">*</span></label>
                          <textarea id="isi" name="isi" class="ckeditor form-control" rows="3" placeholder=""
                              style="margin-top: 0px; margin-bottom: 0px; height: 99px;">{{old("isi")}}</textarea>
                      </div>
                      <div class="form-group">
                          <label>Upload Poster <span style="font-size: 10px; color:#ff7272; font-style : italic"> (Jenis
                                  file : jpg, png | Max : 5 MB)</span> </label>
                          <input type="file" data-max-file-size="5 MB" class="filepond" accept="image/jpeg, image/png"
                              name="poster">
                      </div>
                  </div>

          </div>
          <div class="card-footer">
              <a class="btn btn-success waves-effect waves-light"
                  style="margin-right:10px; float:left ;right: 10px; z-index: 40"
                  href="{{ route('berita.index') }}">Kembali</a>
              <button type="submit" class="btn_save btn btn-primary waves-effect waves-light"
                  style="float:left ;right: 10px; z-index: 40">Simpan</button>
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
<script src="{{ URL::asset('js/ckeditor/ckeditor.js')}}"></script>
<script type="text/javascript">

// FilePond.parse(document.body);

FilePond.registerPlugin(
    FilePondPluginFileMetadata,
    FilePondPluginFileEncode,
    FilePondPluginImagePreview,
    FilePondPluginFileValidateType,
    FilePondPluginFileValidateSize);

const inputElements = document.querySelectorAll('input.filepond');

Array.from(inputElements).forEach(inputElement => {
    FilePond.create(inputElement, {
    imageCropAspectRatio: '1:1',
    allowImagePreview: true,
    imagePreviewHeight: 150,
    imagePreviewWidth: 50,
    storeAsFile: true,
    fileMetadataObject: {
        'markup': [
            [
                'rect', {
                    left: 0,
                    right: 0,
                    bottom: 0,
                    height: '400px',
                    backgroundColor: 'rgba(0,0,0,.5)'
                },
            ],

        ]
    }

    });
});


</script>
@endpush
