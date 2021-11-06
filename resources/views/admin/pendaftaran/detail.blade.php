@extends("layouts.master")

@push("css")
  <link rel="stylesheet" href="{{ URL::asset("plugins/datatables-bs4/css/dataTables.bootstrap4.min.css") }}">
  <link rel="stylesheet" href="{{ URL::asset("plugins/datatables-responsive/css/responsive.bootstrap4.min.css") }}">
  <link rel="stylesheet" href="{{ URL::asset("plugins/datatables-buttons/css/buttons.bootstrap4.min.css") }}">
  <link rel="stylesheet"href="{{ URL::asset("plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css") }}">
  <link rel="stylesheet" href="{{ URL::asset("plugins/select2/css/select2.min.css")}}">
  <link rel="stylesheet" href="{{ URL::asset("plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css")}}">

  <link rel="stylesheet" href="{{ URL::asset('plugins/lightgallery/css/lightgallery.min.css') }}">
@endpush()
<meta name="csrf-token" content="{{ csrf_token() }}">
@section("title") Admin Dashboard @endsection
@section("content")

<div style="padding-top: 20px" class="row">
    <section class="col-lg-12 ">
        <div class="card">
            <div class="card-header">
                <h3 style="padding-top: 10px" class="card-title">
                    <i class="fas fa-chart-pie mr-1"></i>Detail Pendaftaran <strong> ( {{ $pendaftaran->kode_pendaftaran }} )</strong></h3>
           
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                       
                        <div class="card">
                            <div class="card-header bg-secondary">
                                <h3 style="padding-top: 10px" class="card-title">
                                    <i class="fa fa-user mr-1"></i>Data Pendaftaran</h3>
                            </div>
                           
                            <div style="font-size: 15px" class="card-body">
                                Kode Pendaftaran : {{ $pendaftaran->kode_pendaftaran }} <br></p>
                                Tanggal Pendaftaran : {{ $pendaftaran->created_at }} <br>
                                Jenis Pendaftaran   : {{ $pendaftaran->jenis_pendaftaran }} <br>
                                Status Pendaftaran  : {{ $pendaftaran->status_pendaftaran }} <br> 
                                File Akte Kelahiran :  <a href="{{ url('admin/pendaftaran/detail', $pendaftaran->id) }}"><button data-file="akte" type="button" class="btn_preview btn btn-success waves-effect waves-light "><i class="fas fa-edit"> Detail</i></i></button></a> <br> 
                                File KK (Kartu Keluarga) :   <a  href="{{ url('admin/pendaftaran/detail', $pendaftaran->id) }}"><button  data-file="kk" style="margin-top: 2px" type="button" class="btn_preview btn btn-success waves-effect waves-light "><i class="fas fa-edit"> Detail</i></i></button></a>
                            </div>
                        </div>
                      </div>
                </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header bg-secondary">
                                    <h3 style="padding-top: 10px" class="card-title">
                                        <i class="fa fa-user mr-1"></i>Data Siswa</h3>
                                </div>
                                <div  style="font-size: 15px" class="card-body">
                                    Nama Lengkap : {{ $pendaftaran->nama_lengkap }} <br>
                                    Nama Panggilan : {{ $pendaftaran->nama_panggilan }} <br>
                                    Tempat Lahir : {{ $pendaftaran->tempat_lahir }} <br>
                                    Tanggal Lahir : {{ $pendaftaran->tanggal_lahir }} <br>
                                    anak_ke : {{ $pendaftaran->anak_ke }} <br>
                                    Jenis Kelamin : {{ $pendaftaran->jenis_kelamin }} <br>
                                    Agama : {{ $pendaftaran->agama }} <br>
                                    Jumlah Saudara : {{ $pendaftaran->jumlah_saudara }} <br>
                                    Status Dalam Keluarga : {{ $pendaftaran->status_dalam_keluarga }} <br>
                                    Kewarganegaraan : {{ $pendaftaran->kewarganegaraan }} <br>
                                    Alamat : {{ $pendaftaran->alamat }} <br>
                                </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="card">
                                <div class="card-header bg-secondary">
                                    <h3 style="padding-top: 10px" class="card-title">
                                        <i class="fa fa-user mr-1"></i>Data Ayah</h3>
                                  
                                </div>
                                <div style="font-size: 15px" class="card-body">
                                    Nama Lengkap : {{ $pendaftaran->nama_ayah }} <br>
                                    Status : {{ $pendaftaran->status_ayah }} <br>
                                    Tempat Lahir : {{ $pendaftaran->tempat_lahir_ayah }} <br>
                                    Tanggal Lahir : {{ $pendaftaran->tanggal_lahir_ayah }} <br>
                                    Agama : {{ $pendaftaran->agama_ayah }} <br>
                                    Kewarganegaraan : {{ $pendaftaran->kewarganegaraan_ayah }} <br>
                                    Pekerjaan : {{ $pendaftaran->pekerjaan_ayah }} <br>
                                    Pendidikan : {{ $pendaftaran->pendidikan_ayah }} <br>
                                    Alamat : {{ $pendaftaran->alamat_ayah }} <br>
                                    No Hp : {{ $pendaftaran->no_hp_ayah }} <br>
                                    Gaji Perbulan: {{ $pendaftaran->gaji_perbulan_ayah }} <br>
                                </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="card">
                                <div class="card-header bg-secondary">
                                    <h3 style="padding-top: 10px" class="card-title">
                                        <i class="fa fa-user mr-1"></i>Data Ibu</h3>
                                  
                                </div>
                                <div style="font-size: 15px" class="card-body">
                                    Nama Lengkap : {{ $pendaftaran->nama_ibu }} <br>
                                    Status : {{ $pendaftaran->status_ibu }} <br>
                                    Tempat Lahir : {{ $pendaftaran->tempat_lahir_ibu }} <br>
                                    Tanggal Lahir : {{ $pendaftaran->tanggal_lahir_ibu }} <br>
                                    Agama : {{ $pendaftaran->agama_ibu }} <br>
                                    Kewarganegaraan : {{ $pendaftaran->kewarganegaraan_ibu }} <br>
                                    Pekerjaan : {{ $pendaftaran->pekerjaan_ibu }} <br>
                                    Pendidikan : {{ $pendaftaran->pendidikan_ibu }} <br>
                                    Alamat : {{ $pendaftaran->alamat_ibu }} <br>
                                    No Hp : {{ $pendaftaran->no_hp_ibu }} <br>
                                    Gaji Perbulan: {{ $pendaftaran->gaji_perbulan_ibu }} <br>
                    
                                </div>
                            </div>
                          </div>
                    </div>

                    <div style="display: none" id="lightgallery">
                        <a  href="{{URL::asset('/uploads/'.$pendaftaran->file_akte)}}">
                            <img class="file_akte" src="{{URL::asset('/uploads/'.$pendaftaran->file_akte)}}" />
                        </a>
                        <a  href="{{URL::asset('/uploads/'.$pendaftaran->file_kk)}}">
                            <img class="file_kk" src="{{URL::asset('/uploads/'.$pendaftaran->file_kk)}}" />
                        </a>
                    </div>
              
           

            </div>
        </div>
    </section>
</div>



<!-- Modal -->
<div class="modal fade" id="modalPreview" tabindex="-1" role="dialog" aria-labelledby="modalPreviewTitle"
	aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="modalPreviewTitle"></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
                <iframe src="" width="100%" height="500px">
                </iframe>
				<ul>
				</ul>
			</div>
			<div class="modal-footer">
				<button aria-haspopup="true" aria-expanded="false" type="button"
					class="btn btn-secondary" data-dismiss="modal">Tutup</button>
				{{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
			</div>
		</div>
	</div>
</div>

@endsection
@push("js")
<script src="{{ URL::asset("plugins/datatables/jquery.dataTables.min.js") }}"></script>
<script src="{{ URL::asset("plugins/datatables-bs4/js/dataTables.bootstrap4.min.js") }}"></script>
<script src="{{ URL::asset("plugins/datatables-responsive/js/dataTables.responsive.min.js") }}"></script>
<script src="{{ URL::asset("plugins/datatables-responsive/js/responsive.bootstrap4.min.js") }}"></script>
<script src="{{ URL::asset("plugins/bs-custom-file-input/bs-custom-file-input.min.js") }}"></script>
<script src="{{ URL::asset("plugins/jquery-validation/jquery.validate.min.js")}}"></script>
<script src="{{ URL::asset("plugins/jquery-validation/additional-methods.min.js")}}"></script>
<script src="{{ URL::asset("plugins/select2/js/select2.full.min.js")}}"></script>
<script src="{{ URL::asset("plugins/moment/moment.min.js") }}"></script>
<script src="{{ URL::asset("plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js") }}"></script>

<script src="{{ URL::asset('plugins/lightgallery/js/lightgallery.min.js') }}"></script>
<script src="{{ URL::asset('plugins/lightgallery/js/lg-pager.min.js') }}"></script>
<script src="{{ URL::asset('plugins/lightgallery/js/lg-autoplay.min.js')}}"></script>
<script src="{{ URL::asset('plugins/lightgallery/js/lg-fullscreen.min.js')}}"></script>
<script src="{{ URL::asset('plugins/lightgallery/js/lg-zoom.min.js')}}"></script>
<script src="{{ URL::asset('plugins/lightgallery/js/lg-hash.min.js')}}"></script>
<script src="{{ URL::asset('plugins/lightgallery/js/lg-share.min.js')}}"></script>
<script src="{{ URL::asset('plugins/lightgallery/js/lg-rotate.min.js')}}"></script>
<script>
    
    $(".btn_preview").click(function(e) {
        e.preventDefault();
     
        let jenis_file = $(this).data("file");

        if(jenis_file=="akte"){
            $(".file_akte").trigger("click");
        }
        else if(jenis_file== "kk"){
            $(".file_kk").trigger("click");
        }
    });

    lightGallery(document.getElementById('lightgallery'), {
        selector: 'a' 
    });

</script>
@endpush