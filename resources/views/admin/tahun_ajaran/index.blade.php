@extends("layouts.master")

@push("css")
  <link rel="stylesheet" href="{{ URL::asset("plugins/datatables-bs4/css/dataTables.bootstrap4.min.css") }}">
  <link rel="stylesheet" href="{{ URL::asset("plugins/datatables-responsive/css/responsive.bootstrap4.min.css") }}">
  <link rel="stylesheet" href="{{ URL::asset("plugins/datatables-buttons/css/buttons.bootstrap4.min.css") }}">
  <link rel="stylesheet"href="{{ URL::asset("plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css") }}">
  <link rel="stylesheet" href="{{ URL::asset("plugins/select2/css/select2.min.css")}}">
  <link rel="stylesheet" href="{{ URL::asset("plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css")}}">
@endpush()
<meta name="csrf-token" content="{{ csrf_token() }}">
@section("title") Admin Dashboard @endsection
@section("content")

<div style="padding-top: 20px" class="row">
    <section class="col-lg-12 ">
        {{-- <div class="card card-default">
            <div class="card-header">
              <h3 class="card-title">
                <i class="fas fa-bullhorn"></i>
                Informasi Pendaftaran
              </h3>
            </div>
            </div> --}}
        <div class="card">
            <div class="card-header">
                <h3 style="padding-top: 10px" class="card-title">
                    <i class="fas fa-chart-pie mr-1"></i>Data Pendaftaran</h3>
               <a href="{{ route('tahun-ajaran.create') }}"><button type="button" class="btn_tambah btn btn-primary waves-effect waves-light"
                    style="float:right ;right: 10px; z-index: 40">Buat Pendaftaran</button></a>
            </div>
         
            <div class="card-body">
          
                <div class="tbl_tahun_ajaran">
                    <table id="tbl_tahun_ajaran" class="table-bordered table table-hover row-border nowrap"
                      style="border-collapse: collapse; cursor:pointer; border-spacing: 0; width: 100%;">
                      <thead style="background-color: #f1f1f1">
                        <tr>
                             <th   rowspan="2" style="max-width: 40px; vertical-align : middle;">No</th>
                              <th  rowspan="2" style="text-align: center;  vertical-align : middle; max-width: 20px" >Tahun </th>
                              <th  rowspan="2" style=" vertical-align : middle;">Priode Bulan</th>
                              <th  rowspan="2"  style=" vertical-align : middle;">Kuota KB</th>
                              <th  rowspan="2" style=" vertical-align : middle;">Kuota TK</th>
                              <th  colspan="4"  style="text-align: center">Pendaftaran Masuk</th>
                              
                          
                          
                              <th  rowspan="2" style="max-width: 40px; text-align: center;  vertical-align : middle;">Action</th>
                        </tr>

                        <tr>
                           
                         
                         
                          
                            <th  style="">Total</th>
                             <th  style="">Diproses</th>
                             <th  style="">Ditolak</th>
                             <th  style="">Diterima</th>
                            
                       </tr>
                      </thead>
                      <tbody style="text-align: center">
                      </tbody>
                    </table>
                  </div>

                  

            </div>
        </div>
    </section>
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
<script>
     $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
   
    

    let tbl_tahun_ajaran = $("#tbl_tahun_ajaran").DataTable({
            processing: true,
            deferRender: true,
            serverSide: true,
            ajax:  "{{ route('tahun-ajaran.index')}}",
            columns: [{
                    data: "DT_RowIndex",
                    orderable: false,
                    searchable: false
                },
                {data : 'priode_tahun'},
                {data : 'priode_bulan'},
                {data: 'kuota_tk'},
                {data: 'kuota_kb'},
                {data: 'pendaftaran_masuk'},
                {data: 'diproses'},
                {data: 'ditolak'},
                {data: 'diterima'},
                
                {
                    data: "action",
                    orderable: false,
                    searchable: false,
                    width: "40px"

                },
            ]

        });

        

        $(document).on('click', '.btn_selesai', function (e) {
            e.preventDefault();
            let data =  $('#tbl_tahun_ajaran').DataTable().row( $(this).parents('tr')).data();
            let tahun_ajaran_id = $(this).data('id');
            let url = $(this).data('url');
            Swal.fire({
                title: 'Apakah anda yakin ingin mengumumkan hasil pendaftaran tahun ajaran '+data.priode_tahun+' ?',
                html: "<span style='color:red'>Pastikan seluruh pendaftaran masuk telah di verifikasi</span>",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Lanjutkan',
                cancelButtonText: 'Batal'
                }).then((result) => {
                if (result.value) {
                    // alert(tahun_ajaran_id);
                    $.ajax({
                        url: url,
                        data:{
                            status_pengumuman : "selesai"
                        },
                        type: 'POST',
                        success: function(data, textStatus, jqXHR) {

                            Swal.fire({
                                icon: 'success',
                                title: "Berhasil",
                                text: jqXHR.responseJSON.message,
                                showCancelButton: true,
                                allowOutsideClick: false,
                                confirmButtonText: 'Lihat Halaman Pengumuman',
                                cancelButtonText: 'Ok'
                                }).then((result) => {
                                if (result.isConfirmed) {
                                    window.open("/pendaftaran/pengumuman", '_blank').focus();
                                }else{
                                    location.reload();
                                }
                                })
                          
                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                            if(jqXHR.responseJSON.error_code=='001'){
                                Swal.fire({
                                icon: 'error',
                                title: "Gagal",
                                text: jqXHR.responseJSON.message,
                             });
                            }else{
                                Swal.fire({
                                icon: 'error',
                                title: jqXHR.responseJSON.message,
                                text: 'Something went wrong!',
                             });
                            }
                          
                        }
                    });
                }
                })
        });

        $(document).on('click', '.btn_batalkan', function (e) {
            e.preventDefault();
            let data =  $('#tbl_tahun_ajaran').DataTable().row( $(this).parents('tr')).data();
            let tahun_ajaran_id = $(this).data('id');
            let url = $(this).data('url');
            Swal.fire({
                title: 'Apakah anda yakin ingin membatalkan pengumuman hasil pendaftaran tahun ajaran '+data.priode_tahun+' ?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Batalkan',
                cancelButtonText: 'Batal'
                }).then((result) => {
                if (result.value) {
                    $.ajax({
                        url: url,
                        data:{
                            status_pengumuman : "proses"
                        },
                        type: 'POST',
                        success: function(data, textStatus, jqXHR) {
                            Swal.fire({
                                icon: 'success',
                                title: "Berhasil",
                                text: jqXHR.responseJSON.message,
                                showCancelButton: true,
                                allowOutsideClick: false,
                                confirmButtonText: 'Lihat Halaman Pengumuman',
                                cancelButtonText: 'Ok'
                                }).then((result) => {
                                if (result.isConfirmed) {
                                    window.open("/pendaftaran/pengumuman", '_blank').focus();
                                }else{
                                    location.reload();
                                }
                                })
                          
                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                            if(jqXHR.responseJSON.error_code=='001'){
                                Swal.fire({
                                icon: 'error',
                                title: "Gagal",
                                text: jqXHR.responseJSON.message,
                             });
                            }else{
                                Swal.fire({
                                icon: 'error',
                                title: jqXHR.responseJSON.message,
                                text: 'Something went wrong!',
                             });
                            }
                          
                        }
                    });
                }
                })
        });
    
         //destroy
         $(document).on('click', '.btn_delete', function (e) {
            e.preventDefault();
            let data =  $('#tbl_tahun_ajaran').DataTable().row( $(this).parents('tr')).data();
            let url = $(this).attr('href');
            Swal.fire({
                title: 'Apakah anda yakin Menghapus Data ?',
                // html: "<strong><h2>"+data.kode_pendaftaran+"</h2></strong>",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Hapus',
                cancelButtonText: 'Batal'
                }).then((result) => {
                if (result.value) {
                    $.ajax({
                        url: url,
                        type: 'DELETE',
                        success: function(data, textStatus, jqXHR) {
                            // tbl_tahun_ajaran.draw();
                            tbl_tahun_ajaran.ajax.reload(null, false);
                            toastr.success('Data Berhasil Dihapus');
                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                            toastr.success('Data Gagal Dihapus'+ jqXHR.error);
                        }
                    });
                }
                })
            });
</script>
@endpush