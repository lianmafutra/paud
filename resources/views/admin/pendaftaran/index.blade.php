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
        <div class="card card-default">
            <div class="card-header">
              <h3 class="card-title">
                <i class="fas fa-bullhorn"></i>
                Informasi Pendaftaran
              </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            
            
              <div class="callout callout-warning">

              
               - Pendaftaran Masuk : <span style="font-size: 17px"><strong>{{ $total }} </strong></span>Siswa ( KB = 20  , TK = 20 , TPA = 20 ) <br>
               - Diproses : <span style="font-size: 17px"><strong>{{ $jumlah_diproses }} </strong></span>Siswa<br>
               - Diterima : <span style="font-size: 17px"><strong>{{ $jumlah_diterima }} </strong></span>Siswa<br>
               - Ditolak :  <span style="font-size: 17px"><strong>{{ $jumlah_ditolak }} </strong></span>Siswa<br>
              
              </div>
             
            </div>
            <!-- /.card-body -->
          </div>
        <div class="card">
            <div class="card-header">
                <h3 style="padding-top: 10px" class="card-title">
                    <i class="fas fa-chart-pie mr-1"></i>Data Pendaftaran</h3>
               {{-- <a href="{{ route('slider.create') }}"><button type="button" class="btn_tambah btn btn-primary waves-effect waves-light"
                    style="float:right ;right: 10px; z-index: 40">Tambah ...</button></a> --}}
            </div>
         
            <div class="card-body">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-2">
                            <div class=" form-group">
                                <label>Filter Jenis Pendaftaran</label>
                                <select  name="filter_jenis_pendaftaran" class="filter_jenis_pendaftaran form-control">
                                  <option value="">Semua</option>
                                  <option value="kb">KB (Kelompok Bermain)</option>
                                  <option value="tk">TK (Tamakan Kanak-kanak)</option>
                                  <option value="tpa">TPA (Taman Penitipan Anak)</option>
                                </select>
                              </div>
                        </div>

                        <div class="col-md-2">
                            <div class=" form-group">
                                <label>Filter Status</label>
                                <select  name="filter_status_pendaftaran" class="filter_status_pendaftaran form-control">
                                <option value="">Semua</option>
                                  <option value="diproses">diproses</option>
                                  <option value="diterima">diterima</option>
                                  <option value="ditolak"> ditolak</option>
                                </select>
                              </div>
                        </div>
                        <div class="col-md-2">
                            <div class=" form-group">
                                 <a href="javascript:void(0)"><button type="button" style="margin-top: 26px" class="btn_reset_filter btn btn-secondary waves-effect waves-light">Reset</button></a>
                              </div>
                        </div>
                 
                    </div>

                
                    
                </div>
                <div class="tbl_pendaftaran">
                    <table id="tbl_pendaftaran" class="table-bordered table table-hover row-border nowrap"
                      style="border-collapse: collapse; cursor:pointer; border-spacing: 0; width: 100%;">
                      <thead style="background-color: #f1f1f1">
                        <tr>
                             <th style="max-width: 40px">No</th>
                              <th style="max-width: 40px" >Kode</th>
                              <th style="max-width: 40px">Status</th>
                              <th>Nama Lengkap</th>
                              <th style="max-width: 40px">Jenis</th>
                             <th style="max-width: 40px">Tanggal</th>
                             <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
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
    let filter_jenis_pendaftaran, filter_status_pendaftaran;
    let tbl_pendaftaran = $("#tbl_pendaftaran").DataTable({
            processing: true,
            deferRender: true,
            serverSide: true,
            ajax: {
            url: `{{ url('admin/pendaftaran/')}}`,
                data: function (e) {
                    e.jenis_pendaftaran = filter_jenis_pendaftaran,
                    e.status_pendaftaran = filter_status_pendaftaran
                }
            },
            columns: [{
                    data: "DT_RowIndex",
                    orderable: false,
                    searchable: false
                },
                {data : 'kode_pendaftaran'},
                {data : 'status_pendaftaran'},
                {data: "nama_lengkap"},
                {
                    data: "jenis_pendaftaran" ,  
                    render: function (data) {
                        if(data=="kb"){
                          return "KB";  
                        }
                        if(data=="tk"){
                          return "TK";  
                        }
                        if(data=="tpa"){
                          return "TPA";  
                        }
                }
                },
            
                {data:"created_at"},
                {
                    data: "action",
                    orderable: false,
                    searchable: false,
                    width: "40px"

                },
            ]

        });

    
        $('.filter_jenis_pendaftaran').on('change', function () {
           filter_jenis_pendaftaran = $('.filter_jenis_pendaftaran').val();
            tbl_pendaftaran.draw();
        });

        $('.filter_status_pendaftaran').on('change', function () {
           filter_status_pendaftaran = $('.filter_status_pendaftaran').val();
            tbl_pendaftaran.draw();
        });

        $(".btn_reset_filter").click(function(e) {
            e.preventDefault();
            filter_jenis_pendaftaran = "";
            filter_status_pendaftaran = "";
            $('.filter_jenis_pendaftaran').prop('selectedIndex',0);
            $('.filter_status_pendaftaran').prop('selectedIndex',0);
            tbl_pendaftaran.draw();
        });

         //destroy
         $(document).on('click', '.btn_delete', function (e) {
            e.preventDefault();
            let data =  $('#tbl_pendaftaran').DataTable().row( $(this).parents('tr')).data();
            let url = $(this).attr('href');
            Swal.fire({
                title: 'Apakah anda yakin Menghapus Data ?',
                html: "<strong><h2>"+data.kode_pendaftaran+"</h2></strong>",
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
                        type: 'POST',
                        success: function(data, textStatus, jqXHR) {
                            // tbl_pendaftaran.draw();
                            tbl_pendaftaran.ajax.reload(null, false);
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