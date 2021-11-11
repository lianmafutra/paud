@extends('frontend.layouts.master')
<meta name="csrf-token" content="{{ csrf_token() }}">
@push('css')
    <link rel="stylesheet" href="{{ URL::asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
    <link rel="stylesheet"
        href="{{ URL::asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
    <style>
        .filter-form {
  margin-bottom: 30px;
}

.filter-form div {
  margin-bottom: 10px;
}

    </style>
@endpush()
@section('content')
    <section id="mu-page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-page-breadcrumb-area">
                        <h2>Hasil Seleksi</h2>
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li class="active">Pengumuman Hasil Seleksi</li>
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
                    <div class="mu-about-us-area">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div style=" text-align: center " class="mu-about-us-left">
                                    <span  style="font-size:20px; margin-bottom: 20px">Berikut adalah hasil nama nama siswa yang lolos seleksi tahun ajaran: {{ $tahun_ajaran->priode_tahun }} </span>
                                    <h4>
                                        <!-- CSS Code: Place this code in the document's head (between the <head> -- </head> tags) -->
                                        <style>
                                            table.customTable {
                                                width: 50%;
                                                background-color: #FFFFFF;
                                                border-collapse: collapse;
                                                border-width: 1px;
                                                border-color: #000000;
                                                border-style: solid;
                                                color: #000000;
                                                font-size: 16px;
                                            }

                                            table.customTable td,
                                            table.customTable th {
                                                border-width: 1px;
                                                border-color: #000000;
                                                border-style: solid;
                                                padding: 5px;
                                            }

                                            table.customTable thead {
                                                background-color: #d1d1d1;
                                            }


                                            .button2 {
                                                display: inline-block;
                                                padding: 10px 10px;
                                                font-size: 14px;
                                                cursor: pointer;
                                                text-align: center;
                                                text-decoration: none;
                                                outline: none;
                                                color: #fff;
                                                background-color: #4CAF50;
                                                border: none;
                                                border-radius: 10px;
                                                box-shadow: 0 3px #999;
                                            }

                                            .button2:hover {
                                                background-color: #3e8e41
                                            }

                                            .button2:active {
                                                background-color: #3e8e41;
                                                box-shadow: 0 5px #666;
                                                transform: translateY(4px);
                                            }

                                        </style>


                                        <div style="overflow-y: hidden;"  class="table-responsive">
                                            <table  id="tabel_pengumuman_detail"
                                                class="table-bordered table table-hover row-border"
                                                style="border-collapse: collapse; cursor:pointer; border-spacing: 0; width: 100%;">
                                                <thead style="background-color: #f1f1f1">
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Kode Pendaftaran</th>
                                                        <th style="min-width: 200px">Nama Siswa</th>
                                                        <th>Tanggal Lahir</th>
                                                        <th>Alamat</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($pendaftaran as $index => $item)
                                                        <tr>
                                                            <td>{{ $index+1 }}</td>
                                                            <td>{{ $item->kode_pendaftaran }}</td>
                                                            <td>{{ $item->nama_lengkap }}</td>
                                                            <td>{{ $item->tanggal_lahir }}</td>
                                                            <td>{{ $item->alamat }}</td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </h4>
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


    <script src="{{ URL::asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ URL::asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ URL::asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ URL::asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
    <script src="{{ URL::asset('plugins/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ URL::asset('plugins/jquery-validation/additional-methods.min.js') }}"></script>
    <script src="{{ URL::asset('plugins/select2/js/select2.full.min.js') }}"></script>
    <script src="{{ URL::asset('plugins/moment/moment.min.js') }}"></script>
    <script src="{{ URL::asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <script>

    $('#tabel_pengumuman_detail').dataTable( {
        searching: true,
        paginate: false,

    } );


            // DataTable
            // alert();

        // let tabel_pengumuman_detail = $("#tabel_pengumuman_detail").DataTable({
        //     processing: true,
        //     deferRender: true,
        //     serverSide: true,
        //     paginate: false,
        //     info: false,

        //     ajax : "{{ url('pendaftaran/pengumuman/detail/') }}",
        //     columns: [{
        //             data: "DT_RowIndex",
        //             orderable: false,
        //             searchable: false
        //         },
        //         {
        //             data: 'kode_pendaftaran'
        //         },
        //         {
        //             data: 'nama_lengkap'
        //         },
        //         {
        //             data: 'tanggal_lahir'
        //         },
        //         {
        //             data: 'alamat',
        //         },
        //     ]

        // });




    </script>

@endpush
