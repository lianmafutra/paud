@extends('layouts.master')

@push('css')
<link href="{{ URL::asset('plugins/filepond/filepond.css') }}" rel="stylesheet" />
<link href="{{ URL::asset('plugins/filepond/filepond-plugin-image-preview.css') }} " rel="stylesheet"/>
<style>
    img {
  border: 1px solid #555;
}

.gambar{
    object-fit: none; /* Do not scale the image */
  object-position: center; /* Center the image within the element */
  width: 100%;
  max-height: 250px;
  margin-bottom: 1rem;
}
</style>
@endpush()

<meta name="csrf-token" content="{{ csrf_token() }}">
@section('title') Admin Dashboard @endsection
@section('content')<div style="padding-top: 20px" class="row">


    <button  class="btn_delete btn btn-danger waves-effect waves-light" style="position: fixed;   bottom:0;
    right:0; display: none; margin-right:10px; margin-bottom:10px; float:right ;right: 10px; z-index: 40">Delete</button>


  <section class="col-lg-12 ">
    <div class="card">
      <div class="card-header">
        <h3 style="padding-top: 10px" class="card-title">
          <i class="fas fa-chart-pie mr-1"></i> Edit Album
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
        <form action="{{ route('galeri-album.update', $galeri_album->id)  }}" method="POST" enctype="multipart/form-data">
            @csrf
             @method('PUT')
             <div class="form-group">
           <input name="id" value="{{ $galeri_album->id }}" hidden>
          </div>
          

                <div class="col-lg-6 form-group">
                    <label for="example-text-input" class="col-form-label">Nama Album</label>
                    <input  value="{{ $galeri_album->nama }}"  placeholder="Nama Album" name="nama" type="text" id="nama" class="input form-control">
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label>Isi Konten <span style="color: rgb(230, 67, 67)">*</span></label>
                    <textarea id="deskripsi" name="deskripsi" class="ckeditor form-control" rows="3" placeholder=""
                        style="margin-top: 0px; margin-bottom: 0px; height: 99px;">{{old("deskripsi")}}</textarea>
                </div>
                </div>
           

            <div class="col-lg-6">
              <div class="form-group">
                <label>Upload Poster Album<span style="font-size: 10px; color:#ff7272; font-style : italic"> (Jenis
                        file : jpg, png | Max : 1 MB)</span> </label>
                <input type="file" data-max-file-size="1 MB" class="filepond" accept="image/jpeg, image/png"
                    name="gambar">
            </div>
            <div class="card-footer">
                <a class="btn btn-success waves-effect waves-light" style="margin-right:10px; float:left ;right: 10px; z-index: 40" href="{{ route('galeri-album.index') }}">Kembali</a>
          <button type="submit" class="btn_update btn btn-primary waves-effect waves-light" style="float:left ;right: 10px; z-index: 40">Update</button>

      </div>
        </form>

       </div>
            </div>

      </div>

      <div class="card">
        <div class="card-header">
            <h3 style="padding-top: 10px" class="card-title">
              <i class="fas fa-chart-pie mr-1"></i>File Foto
            </h3>
            <button  class="btn_upload btn btn-success waves-effect waves-light" style="float:right ;right: 10px; z-index: 40">Upload</button>
           </div>
        <div class="card-body">
            <div class="row">
                @foreach ($galeri_album->galeri as $item)
                <div class="col-md-3">
                    <figure class="" style="margin-bottom:30px;">
                        <a href="#"><img class="gambar" style="width: 250px; height:250px;" src="{{URL::asset('/uploads/'.$item->gambar)}}" alt="img"></a>
                        <figcaption style="margin-top: 0px">
                            <input type="checkbox" class="cek_gambar" id="{{ $item->id }}">
                        </figcaption>
                      </figure>
                </div>

                @endforeach

            </div>
        </div>
      </div>
    </div>
  </section>
</div>
<div class="col-sm-6 col-md-4 col-xl-3">
    <div class="modal_upload modal fade" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true"
      tabindex="-1">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title mt-0" id="modal_layanan_title">Upload File</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">

          

              <div class="col-12">
                  <form id="form_upload" action="{{ route('galeri-album.store') }}" enctype="multipart/form-data" method="POST">
                    @csrf

                    <input name="galeri_album_id" value="{{ $galeri_album->id }}" hidden>
                    <div class="form-group">
                        <label>Upload Poster <span style="font-size: 10px; color:#ff7272; font-style : italic"> (Jenis
                                file : jpg, png | Max : 1 MB)</span> </label>
                        <input  multiple type="file" data-max-file-size="1 MB" class="filepond" accept="image/jpeg, image/png"
                            name="gambar[]">
                    </div>

                    <div class="modal-footer justify-content-between">
                        <button type="button" data-dismiss="modal" class="btn_kembali btn btn-secondary">Batal</button>
                        <button style="submit" value="Validate" class="btn btn-primary">Upload</button>
                      </div>
                  </form>

              </div>
              <!-- end col -->

          </div>

        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
  </div>
@endsection
@push('js')

<script src="{{ URL::asset('js/ckeditor/ckeditor.js')}}"></script>
<script src="{{ URL::asset('plugins/filepond/filepond-plugin-image-preview.js') }}"></script>
<script src="{{ URL::asset('plugins/filepond/filepond.js') }}"></script>
<script src="{{ URL::asset('plugins/filepond/filepond-plugin-file-metadata.js') }}"></script>
<script src="{{ URL::asset('plugins/filepond/filepond-plugin-file-encode.js') }}"></script>
<script src="{{ URL::asset('plugins/filepond/filepond-plugin-file-validate-type.js') }}"></script>
<script src="{{ URL::asset('plugins/filepond/filepond-plugin-file-validate-size.js') }} "></script>
<script type="text/javascript">

$(function(){

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $array_id_galeri=[];
 

    var editor = CKEDITOR.instances.deskripsi;
    editor.setData({!! json_encode($galeri_album->deskripsi) !!});

    $('.btn_upload').click(function(e) {
        e.preventDefault();
        $('.modal_upload').modal('show');
    });

    $(document).on('change', '.cek_gambar', function() {
        if($("input[type=checkbox]").is(":checked")){
            $('.btn_delete').css('display', 'block');
        }else{
            $('.btn_delete').css('display', 'none');
        }
    });

      //destroy
      $(document).on('click', '.btn_delete', function (e) {
            e.preventDefault();
            $array_id_galeri=[];
            $( ".cek_gambar" ).each(function( index ) {
                if(document.getElementById( $(this).attr('id')).checked == true){
                   $array_id_galeri.push( $(this).attr('id'));
                }
            });
            // console.log($array_id_galeri);
            Swal.fire({
                title: 'Apakah anda yakin Menghapus Data ?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Hapus',
                cancelButtonText: 'Batal'
                }).then((result) => {
                if (result.value) {
                    $.ajax({
                        data: {
                            "id" :  $array_id_galeri
                        },
                        url:"{{ url('admin/galeri/destroy-multi') }}",
                        type: 'POST',
                        success: function(data, textStatus, jqXHR) {
                          location.reload();
                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                            toastr.success('Data Gagal Dihapus'+errorThrown);
                        }
                    });
                }
                })
            });

    FilePond.registerPlugin(
    FilePondPluginFileMetadata,
    FilePondPluginFileEncode,
    FilePondPluginImagePreview,
    FilePondPluginFileValidateType,
    FilePondPluginFileValidateSize);

    const pond = FilePond.create( document.querySelector('input[name="gambar"]'),{
        storeAsFile: true,
        files: [
        {
            source: '/uploads/'+{!! json_encode($galeri_album->gambar) !!},
        },
    ],

    });


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





});



  </script>
  @endpush
