@extends('frontend.layouts.master')
<meta name="csrf-token" content="{{ csrf_token() }}">
@push('css')
<link href="{{ URL::asset('plugins/filepond/filepond.css') }}" rel="stylesheet" />
<link href="{{ URL::asset('plugins/filepond/filepond-plugin-image-preview.css') }} " rel="stylesheet"/>


@endpush()
<style>
	.simbol_wajib{
		color: red;
	}

	/**
 * FilePond Custom Styles
 */
.filepond--drop-label {
	color: #4c4e53;
}

.filepond--file-wrapper.filepond--file-wrapper {

    font-size: 15px;
}

.filepond--drop-label {
	background-color: #edf0f4  !important;
    border-radius: 2em;
}





</style>
@section('content')
<section id="mu-page-breadcrumb">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-page-breadcrumb-area">
			  @if ($jenis == "tk"){
				<h2>Pendaftaran TK (Taman Kanak-Kanak)</h2>
			  }
			  @elseif($jenis == "kb"){
				<h2>Pendaftaran KB (Kelompok Bermain)</h2>
			  }
			  @elseif($jenis == "tpa"){
				<h2>Pendaftaran TPA (Taman Pendidikan Anak)</h2>
			  }
				  
			  @endif
         
            <ol class="breadcrumb">
             <li><a href="{{ url('/') }}">Home</a></li>            
             <li class="active">Pendaftaran</li>
           </ol>
          </div>
        </div>
      </div>
    </div>
  </section>

  

  <section id="mu-about-us">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
        
            <div class="row">
              <div class="col-lg-12 col-md-12">
                <div class="mu-title">
                  {{-- <h3>Pilih Jenis Pendaftaran</h3><br> --}}
                </div>
                <div style="margin-top: 20px" >
                  <form method="POST" action="{{ url('pendaftaran/kirim') }}">
					  @csrf
					<div class="container">
						<p> <strong>A. Isi Data calon peserta didik pada kolom di bawah ini :</strong>  </p>
						<br>
						<div class="form-group">
							<p>Nama Lengkap Anak <span class="simbol_wajib">*</span></p>
							<input type="text" class="form-control">
						</div> 
						<div class="form-group">
							<p>Nama Panggilan<span class="simbol_wajib">*</span></p>
							<input type="text" class="form-control">
						</div>   
						<div class="form-group">
							<p>Tempat Lahir<span class="simbol_wajib">*</span></p>
							<input type="text" class="form-control">
						</div>   
						<div class="form-group">
							<p>Tanggal Lahir<span class="simbol_wajib">*</span></p>
							<input type="date" class="form-control">
						</div>   
						<div class="form-group">
							<p for="exampleFormControlSelect1">Jenis Kelamin <span class="simbol_wajib">*</span> </p>
							<select class="form-control" id="exampleFormControlSelect1">
								<option hidden>Pilih</option>
							  <option>Laki-Laki</option>
							  <option>Perempuan</option>
							</select>
						  </div> 
						<div class="form-group">
							<p for="exampleFormControlSelect1">Agama<span class="simbol_wajib">*</span> </p>
							<select class="form-control" id="exampleFormControlSelect1">
								<option hidden>Pilih</option>
							  <option>Islam</option>
							  <option>Protestan</option>
							  <option>Katolik</option>
							  <option>Hindu</option>
							  <option>Buddha</option>
							  <option>Khonghucu</option>
							</select>
						  </div> 
						<div class="form-group">
							<p>Anak ke-<span class="simbol_wajib">*</span></p>
							<input type="number" class="form-control">
						</div>  
					
						  <div class="form-group">
							<p>Jumlah Saudara Kandung<span class="simbol_wajib">*</span></p>
							<input type="number" class="form-control">
						</div> 
						<div class="form-group">
							<p>Status Dalam Keluarga<span class="simbol_wajib">*</span></p>
							<input type="text" class="form-control">
						</div>
						<div class="form-group">
							<p>Kewarganegaraan<span class="simbol_wajib">*</span></p>
							<input type="text" class="form-control">
						</div>  
						<div class="form-group">
							<p>Alamat<span class="simbol_wajib">*</span></p>
							<input type="text" class="form-control">
						</div> 
						
						  	<br>
							  <p> <strong>B. Data Orang Tua/Wali (Ayah)</strong>  </p>
							  <br>
							  <div class="form-group">
								
								<p>Nama Ayah <span class="simbol_wajib">*</span></p>
								<input type="text" class="form-control">
							</div> 
							<div class="form-group">
								<p for="exampleFormControlSelect1">Status Ayah<span class="simbol_wajib">*</span> </p>
								<select class="form-control" id="exampleFormControlSelect1">
									<option hidden>Pilih</option>
								  <option>Kandung</option>
								  <option>Tiri</option>
								  <option>Angkat</option>
								  <option>Wali</option>
								</select>
							  </div> 
							  <div class="form-group">
								<p>Tempat Lahir<span class="simbol_wajib">*</span></p>
								<input type="text" class="form-control">
							</div>   
							<div class="form-group">
								<p>Tanggal Lahir<span class="simbol_wajib">*</span></p>
								<input type="date" class="form-control">
							</div>  
							<div class="form-group">
								<p for="exampleFormControlSelect1">Agama<span class="simbol_wajib">*</span> </p>
								<select class="form-control" id="exampleFormControlSelect1">
									<option hidden>Pilih</option>
								  <option>Islam</option>
								  <option>Protestan</option>
								  <option>Katolik</option>
								  <option>Hindu</option>
								  <option>Buddha</option>
								  <option>Khonghucu</option>
								</select>
							  </div>  
							  <div class="form-group">
								<p>Kewarganegaraan<span class="simbol_wajib">*</span></p>
								<input type="text" class="form-control">
							</div> 
							<div class="form-group">
								<p>Pekerjaan<span class="simbol_wajib">*</span></p>
								<input type="text" class="form-control">
							</div> 
							<div class="form-group">
								<p>Pendidikan<span class="simbol_wajib">*</span></p>
								<input type="text" class="form-control">
							</div> 
							<div class="form-group">
								<p>Alamat<span class="simbol_wajib">*</span></p>
								<input type="text" class="form-control">
							</div> 
							<div class="form-group">
								<p>No. Hp<span class="simbol_wajib">*</span></p>
								<input type="text" class="form-control">
							</div> 
							<div class="form-group">
								<p>Gaji Perbulan<span class="simbol_wajib">*</span></p>
								<input type="text" class="form-control">
							</div> 
							<br>
							<p> <strong>B. Data Orang Tua/Wali (Ibu)</strong>  </p>
							<br>
							<div class="form-group">
								
								<p>Nama Ibu <span class="simbol_wajib">*</span></p>
								<input type="text" class="form-control">
							</div> 
							<div class="form-group">
								<p for="exampleFormControlSelect1">Status Ibu<span class="simbol_wajib">*</span> </p>
								<select class="form-control" id="exampleFormControlSelect1">
									<option hidden>Pilih</option>
								  <option>Kandung</option>
								  <option>Tiri</option>
								  <option>Angkat</option>
								  <option>Wali</option>
								</select>
							  </div> 
							  <div class="form-group">
								<p>Tempat Lahir<span class="simbol_wajib">*</span></p>
								<input type="text" class="form-control">
							</div>   
							<div class="form-group">
								<p>Tanggal Lahir<span class="simbol_wajib">*</span></p>
								<input type="date" class="form-control">
							</div>  
							<div class="form-group">
								<p for="exampleFormControlSelect1">Agama<span class="simbol_wajib">*</span> </p>
								<select class="form-control" id="exampleFormControlSelect1">
									<option hidden>Pilih</option>
								  <option>Islam</option>
								  <option>Protestan</option>
								  <option>Katolik</option>
								  <option>Hindu</option>
								  <option>Buddha</option>
								  <option>Khonghucu</option>
								</select>
							  </div>  
							  <div class="form-group">
								<p>Kewarganegaraan<span class="simbol_wajib">*</span></p>
								<input type="text" class="form-control">
							</div> 
							<div class="form-group">
								<p>Pekerjaan<span class="simbol_wajib">*</span></p>
								<input type="text" class="form-control">
							</div> 
							<div class="form-group">
								<p>Pendidikan<span class="simbol_wajib">*</span></p>
								<input type="text" class="form-control">
							</div> 
							<div class="form-group">
								<p>Alamat<span class="simbol_wajib">*</span></p>
								<input type="text" class="form-control">
							</div> 
							<div class="form-group">
								<p>No. Hp<span class="simbol_wajib">*</span></p>
								<input type="text" class="form-control">
							</div> 
							<div class="form-group">
								<p>Gaji Perbulan<span class="simbol_wajib">*</span></p>
								<input type="text" class="form-control">
							</div> 
							<br>

						  <p> <strong>C. Upload Berkas</strong>  </p>

						  <br>
						  <div  class="form-group">
							<p>Upload File Akte Kelahiran<span style="font-size: 10px; color:#ff7272; font-style : italic"> (Jenis
									file : jpg, png | Max : 5 MB)</span> </p>
							<input type="file" data-max-file-size="5 MB" class="filepond" accept="image/jpeg, image/png"
								name="file_akte">
						</div>
						<br>
						<br><br>
						<div class="form-group">
							<p>Upload File KK (Kartu Keluarga)<span style="font-size: 10px; color:#ff7272; font-style : italic"> (Jenis
									file : jpg, png | Max : 5 MB)</span> </p>
							<input type="file" data-max-file-size="5 MB" class="filepond " accept="image/jpeg, image/png" name="file_kk">
						</div>
						<div style="margin-top: 120px" class="form-group">
							<button type="submit" class="btn btn-lg  btn-success" href="#">Daftar</button>
						</div>
						
                  </div>
				  </form>
					
				 
				 
                </div>
              </div>

            </div>
          
        </div>
      </div>
    </div>
  </section>
  <section id="mu-about-us">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-about-us-area">           
            <div class="row">
              <div class="col-lg-6 col-md-6">
                <div class="mu-about-us-left">
                  <!-- Start Title -->
                
                  <!-- End Title -->
                 
                </div>
              </div>
            
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
@push('js')
<script src="{{ URL::asset('plugins/filepond/filepond-plugin-image-preview.js') }}"></script>
<script src="{{ URL::asset('plugins/filepond/filepond.js') }}"></script>
<script src="{{ URL::asset('plugins/filepond/filepond-plugin-file-metadata.js') }}"></script>
<script src="{{ URL::asset('plugins/filepond/filepond-plugin-file-encode.js') }}"></script>
<script src="{{ URL::asset('plugins/filepond/filepond-plugin-file-validate-type.js') }}"></script>
<script src="{{ URL::asset('plugins/filepond/filepond-plugin-file-validate-size.js') }} "></script>

<script type="text/javascript">

// FilePond.parse(document.body);

FilePond.registerPlugin(
    FilePondPluginFileMetadata,
    FilePondPluginFileEncode,
  
    FilePondPluginFileValidateType,
    FilePondPluginFileValidateSize);


	const inputElements = document.querySelectorAll('input.filepond');
	Array.from(inputElements).forEach(inputElement => {
		FilePond.create(inputElement, {
			storeAsFile: true,
		});
});

</script>
@endpush
