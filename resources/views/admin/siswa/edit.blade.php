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
          <i class="fas fa-chart-pie mr-1"></i> Edit Data Siswa
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
        <form action="{{ route('siswa.update', $siswa->id)  }}" method="POST" enctype="multipart/form-data">
            @csrf
             @method('PUT')
            <div class="col-lg-6 ">
                <div class="form-group">
                <label for="example-text-input" class="col-form-label">Nama</label>
                <input value="{{ $siswa->nama }}"  placeholder="Input nama" name="nama" type="text" id="nama" class="input form-control">
            </div>
<div class="form-group">
                <label>Desc</label>
                <textarea id="desc" name="desc" class="form-control" rows="3" placeholder="Enter ..." style="margin-top: 0px; margin-bottom: 0px; height: 99px;">{{ $siswa->desc }}</textarea>
              </div> 
              <div class="form-group">
                <label>Upload gambar <span style="font-size: 10px; color:#ff7272; font-style : italic"> (Jenis file : jpg, png | Max : 100kb)</span> </label>
                <input type="file" data-max-file-size="100kb" class="filepond" accept="image/jpeg, image/png" name="gambar" id="gambar1">
                 </div>

                 <div class="form-group">
                    <label>Upload gambar <span style="font-size: 10px; color:#ff7272; font-style : italic"> (Jenis file : jpg, png | Max : 100kb)</span> </label>
                    <input type="file" data-max-file-size="100kb" class="filepond" accept="image/jpeg, image/png" name="gambar2" id="gambar2">
                     </div>
             </div>
        
       </div>
            </div>
       
      </div>
      <div class="card-footer">
                <a class="btn btn-success waves-effect waves-light" style="margin-right:10px; float:left ;right: 10px; z-index: 40" href="{{ route('siswa.index') }}">Back</a>
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

<script src="https://unpkg.com/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.js"></script>
<script src="https://unpkg.com/filepond-plugin-file-validate-size/dist/filepond-plugin-file-validate-size.js"></script>
<script src="https://unpkg.com/filepond-plugin-file-poster/dist/filepond-plugin-file-poster.js"></script>
<script type="text/javascript">


  
  FilePond.registerPlugin(FilePondPluginImagePreview,
      FilePondPluginFileValidateType,FilePondPluginGetFile,
      FilePondPluginFileValidateSize,FilePondPluginFilePoster ,FilePondPluginFileEncode );
  
  let serverResponse = '';
  
  
//   FilePond.setOptions({
      
//       server: {
          
//           url: `{{ url('admin/siswa')  }}`,
//           timeout: 7000,
//           process: {
//               url: '/filepondUpload',
//               method: 'POST',
//               withCredentials: false,
//               onerror: (res) => {
//                   return serverResponse = JSON.parse(res).message;
//               },
//           },
          
        
//           revert: '/filepondCancel',
//           headers: {
//               'X-CSRF-TOKEN': "{{ @csrf_token() }}",
//           },
//       },
//       labelFileProcessingError: (res) => {
//           return serverResponse;
//       },
//   });

    // FilePond.parse(document.body);
   
    // const gambar1 = document.querySelector('input[id="gambar1"]');
    const gambar2 = document.querySelector('input[id="gambar2"]');

  
    const pond = FilePond.create( document.querySelector('input[id="gambar1"]'),{
        storeAsFile: true,
        files: [
        {
            // the server file reference
            source: '/uploads/'+{!! json_encode($siswa->gambar) !!},

           
        },
    ],
       
    });
        
    const pond2 = FilePond.create(gambar2,{
        storeAsFile: true,
    });
    // pond.addFile('/uploads/'+{!! json_encode($siswa->gambar) !!});
    pond2.addFile('/uploads/'+{!! json_encode($siswa->gambar2) !!});



    // Create the FilePond instance

    // pond.addFile('./nature.jpg');

    //     FilePond.create(gambar1, {
    //         files: [
    //             {
    //                 options: {
    //                     type: 'local',
    //                     allowImagePreview : true,
   
    //                     file: {
    //                         name: {!! json_encode($siswa->gambar) !!},
    //                     },
    //                     metadata: {
    //                         poster: '/uploads/'+{!! json_encode($siswa->gambar) !!}
    //                     }
    //                 }
    //             }
    //         ]
    //     });

    //  const gambar1_encode  = FilePond.create(gambar2, {
        //     files: [
        //         {
        //             options: {
        //                 file: {
        //                     name: {!! json_encode($siswa->gambar) !!},
                         
        //                 },
        //                 metadata: {
        //                     poster: '/uploads/'+{!! json_encode($siswa->gambar) !!}
        //                 }
        //             }
        //         }
        //     ]
        // });

            
            
        // alert(gambar1_encode.files[0].size);
        // console.log(gambar1_encode.metadata);         
            


      
  
  
  
  </script>
  @endpush