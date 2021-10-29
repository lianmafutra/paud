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
@include('sweetalert::alert')
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
                  <form id="form_pendaftaran" method="POST" action="{{ url('pendaftaran/kirim') }}">
					  @csrf
					<div class="container">
						<p> <strong>A. Isi Data calon peserta didik pada kolom di bawah ini :</strong>  </p>
						<br>
						<div class="form-group">
							<input hidden name="jenis_pendaftaran" type="text" class="form-control" value="{{ $jenis }}">
						</div> 
						<div class="form-group">
							<p>Nama Lengkap Anak <span class="simbol_wajib">*</span></p>
							<input name="nama_lengkap" type="text" class="form-control">
						</div> 
						<div class="form-group">
							<p>Nama Panggilan<span class="simbol_wajib">*</span></p>
							<input name="nama_panggilan" type="text" class="form-control">
						</div>   
						<div class="form-group">
							<p>Tempat Lahir<span class="simbol_wajib">*</span></p>
							<input name="tempat_lahir" type="text" class="form-control">
						</div>   
						<div class="form-group">
							<p>Tanggal Lahir<span class="simbol_wajib">*</span></p>
							<input name="tanggal_lahir" type="date" class="form-control">
						</div>   
						<div class="form-group">
							<p>Anak ke-<span class="simbol_wajib">*</span></p>
							<input name="anak_ke" type="number" class="form-control">
						</div>  
					
						<div class="form-group">
							<p for="exampleFormControlSelect1">Jenis Kelamin <span class="simbol_wajib">*</span> </p>
							<select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
								<option hidden>Pilih</option>
							  <option value="L">Laki-Laki</option>
							  <option value="P">Perempuan</option>
							</select>
						  </div> 
						<div class="form-group">
							<p for="exampleFormControlSelect1">Agama<span class="simbol_wajib">*</span> </p>
							<select name="agama" class="form-control" id="exampleFormControlSelect1">
								<option hidden>Pilih</option>
							  <option value="islam">Islam</option>
							  <option value="protestan">Protestan</option>
							  <option value="katolik">Katolik</option>
							  <option value="hindu">Hindu</option>
							  <option value="buddha">Buddha</option>
							  <option value="khonghucu">Khonghucu</option>
							</select>
						  </div> 
					
						  <div class="form-group">
							<p>Jumlah Saudara Kandung<span class="simbol_wajib">*</span></p>
							<input name="jumlah_saudara" type="number" class="form-control">
						</div> 
						<div class="form-group">
							<p>Status Dalam Keluarga<span class="simbol_wajib">*</span></p>
							<input name="status_dalam_keluarga" type="text" class="form-control">
						</div>
						<div class="form-group">
							<p>Kewarganegaraan<span class="simbol_wajib">*</span></p>
							<input name="kewarganegaraan" type="text" class="form-control">
						</div>  
						<div class="form-group">
							<p>Alamat<span class="simbol_wajib">*</span></p>
							<input name="alamat" type="text" class="form-control">
						</div> 
						
						  	<br>
							  <p> <strong>B. Data Orang Tua/Wali (Ayah)</strong>  </p>
							  <br>
							  <div class="form-group">
								
								<p>Nama Ayah <span class="simbol_wajib">*</span></p>
								<input name="nama_ayah" type="text" class="form-control">
							</div> 
							<div class="form-group">
								<p for="exampleFormControlSelect1">Status Ayah<span class="simbol_wajib">*</span> </p>
								<select name="status_ayah" class="form-control" id="exampleFormControlSelect1">
									<option hidden>Pilih</option>
								  <option value="kandung">Kandung</option>
								  <option value="tiri">Tiri</option>
								  <option value="angkat">Angkat</option>
								  <option value="wali">Wali</option>
								</select>
							  </div> 
							  <div class="form-group">
								<p>Tempat Lahir<span class="simbol_wajib">*</span></p>
								<input name="tempat_lahir_ayah" type="text" class="form-control">
							</div>   
							<div class="form-group">
								<p>Tanggal Lahir<span class="simbol_wajib">*</span></p>
								<input name="tanggal_lahir_ayah" type="date" class="form-control">
							</div>  
							<div class="form-group">
								<p for="exampleFormControlSelect1">Agama<span class="simbol_wajib">*</span> </p>
								<select name="agama_ayah" class="form-control" id="exampleFormControlSelect1">
									<option hidden>Pilih</option>
									<option value="islam">Islam</option>
									<option value="protestan">Protestan</option>
									<option value="katolik">Katolik</option>
									<option value="hindu">Hindu</option>
									<option value="buddha">Buddha</option>
									<option value="khonghucu">Khonghucu</option>
								</select>
							  </div>  
							  <div class="form-group">
								<p>Kewarganegaraan<span class="simbol_wajib">*</span></p>
								<input name="kewarganegaraan_ayah" type="text" class="form-control">
							</div> 
							<div class="form-group">
								<p>Pekerjaan<span class="simbol_wajib">*</span></p>
								<input name="pekerjaan_ayah" type="text" class="form-control">
							</div> 
							<div class="form-group">
								<p>Pendidikan<span class="simbol_wajib">*</span></p>
								<input name="pendidikan_ayah" type="text" class="form-control">
							</div> 
							<div class="form-group">
								<p>Alamat<span class="simbol_wajib">*</span></p>
								<input aria-label="alamat_ayah" type="text" class="form-control">
							</div> 
							<div class="form-group">
								<p>No. Hp<span class="simbol_wajib">*</span></p>
								<input name="no_hp_ayah" type="text" class="form-control">
							</div> 
							<div class="form-group">
								<p>Gaji Perbulan<span class="simbol_wajib">*</span></p>
								<input name="gaji_perbulan_ayah" type="text" class="form-control">
							</div> 
							<br>
							<p> <strong>B. Data Orang Tua/Wali (Ibu)</strong>  </p>
							<br>
							<div class="form-group">
								
								<p>Nama Ibu <span class="simbol_wajib">*</span></p>
								<input name="nama_ibu" type="text" class="form-control">
							</div> 
							<div class="form-group">
								<p for="exampleFormControlSelect1">Status Ibu<span class="simbol_wajib">*</span> </p>
								<select name="status_ibu" class="form-control" id="exampleFormControlSelect1">
									<option hidden>Pilih</option>
									<option value="kandung">Kandung</option>
									<option value="tiri">Tiri</option>
									<option value="angkat">Angkat</option>
									<option value="wali">Wali</option>
								</select>
							  </div> 
							  <div class="form-group">
								<p>Tempat Lahir<span class="simbol_wajib">*</span></p>
								<input name="tempat_lahir_ibu" type="text" class="form-control">
							</div>   
							<div class="form-group">
								<p>Tanggal Lahir<span class="simbol_wajib">*</span></p>
								<input name="tanggal_lahir_ibu" type="date" class="form-control">
							</div>  
							<div class="form-group">
								<p for="exampleFormControlSelect1">Agama<span class="simbol_wajib">*</span> </p>
								<select name="agama_ibu" class="form-control" id="exampleFormControlSelect1">
									<option hidden>Pilih</option>
									<option value="islam">Islam</option>
									<option value="protestan">Protestan</option>
									<option value="katolik">Katolik</option>
									<option value="hindu">Hindu</option>
									<option value="buddha">Buddha</option>
									<option value="khonghucu">Khonghucu</option>
								</select>
							  </div>  
							  <div class="form-group">
								<p>Kewarganegaraan<span class="simbol_wajib">*</span></p>
								<input name="kewarganegaraan_ibu" type="text" class="form-control">
							</div> 
							<div class="form-group">
								<p>Pekerjaan<span class="simbol_wajib">*</span></p>
								<input name="pekerjaan_ibu" type="text" class="form-control">
							</div> 
							<div class="form-group">
								<p>Pendidikan<span class="simbol_wajib">*</span></p>
								<input name="pendidikan_ibu" type="text" class="form-control">
							</div> 
							<div class="form-group">
								<p>Alamat<span class="simbol_wajib">*</span></p>
								<input name="alamat_ibu" type="text" class="form-control">
							</div> 
							<div class="form-group">
								<p>No. Hp<span class="simbol_wajib">*</span></p>
								<input name="no_hp_ibu" type="text" class="form-control">
							</div> 
							<div class="form-group">
								<p>Gaji Perbulan<span class="simbol_wajib">*</span></p>
								<input name="gaji_perbulan_ibu" type="text" class="form-control">
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
							<button type="submit" id="btn_daftar" class="btn btn-lg  btn-success" href="#">Daftar</button>
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
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{ URL::asset('plugins/filepond/filepond-plugin-image-preview.js') }}"></script>
<script src="{{ URL::asset('plugins/filepond/filepond.js') }}"></script>
<script src="{{ URL::asset('plugins/qrcode/qrcode.js') }}"></script>
<script src="{{ URL::asset('plugins/filepond/filepond-plugin-file-metadata.js') }}"></script>
<script src="{{ URL::asset('plugins/filepond/filepond-plugin-file-encode.js') }}"></script>
<script src="{{ URL::asset('plugins/filepond/filepond-plugin-file-validate-type.js') }}"></script>
<script src="{{ URL::asset('plugins/filepond/filepond-plugin-file-validate-size.js') }} "></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.2/html2canvas.min.js" integrity="sha512-tVYBzEItJit9HXaWTPo8vveXlkK62LbA+wez9IgzjTmFNLMBO1BEYladBw2wnM3YURZSMUyhayPCoLtjGh84NQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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



$( "#btn_daftar" ).click(function(e) {
	e.preventDefault();
 let timerInterval
Swal.fire({
  title: 'Mohon Tunggu',
  html: 'Sedang Mengirim Data...',
  timer: 2000,
  timerProgressBar: true,
  didOpen: () => {
    Swal.showLoading()
  },
  willClose: () => {
    clearInterval(timerInterval)
  }
}).then((result) => {
  if (result.dismiss === Swal.DismissReason.timer) {
	$( "#form_pendaftaran" ).submit();
  }
})
});


Swal.fire({
  title: '<strong>Anda Telah Berhasil Mendaftar</strong>',
  icon: 'info',
  width: 450,
  padding: '3em',
  html: 'Berikut adalah Nomor Pendaftaran Anda :<br><br>'+ '<span style="font-size: 40px">'+  {!! json_encode(session()->get('kode_pendaftaran')) !!}+'</span>'+
  ' <center><div style="margin-top: 10px;" id="qrcode"></div> <center>'
  +' <br><br> <strong>Pastikan Simpan bukti pendaftaran anda untuk verifikasi daftar ulang berikutnya</strong></strong>',
  showCloseButton: false,
  allowOutsideClick : false,
  showCancelButton: false,
  focusConfirm: false,
  confirmButtonColor : '#42ba96',
  cancelButtonColor : '#ffc107',
  confirmButtonText:
    '<i  id="btn_download fa fa-thumbs-up"></i> Download',
  cancelButtonText:
  '<i class="fa fa-thumbs-up"></i> Cetak',
}).then((result) => {
		
		if (result.isConfirmed) {
			
		} 
		});


var qrcode = new QRCode(document.getElementById("qrcode"), {
	text: "http://jindo.dev.naver.com/collie",
	width: 180,
	height: 180,
	colorDark : "#000000",
	colorLight : "#ffffff",
	
});
</script>


@endpush
