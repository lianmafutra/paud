@extends('layouts.master')

@push('css')
<link rel="stylesheet" href="{{ URL::asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
<link rel="stylesheet"
  href="{{ URL::asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
@endpush()
<meta name="csrf-token" content="{{ csrf_token() }}">
@section('title') Admin Dashboard @endsection

@section('content')
<div style="padding-top: 20px" class="row">

  <section class="col-lg-12 ">

    <div class="card">
      <div class="card-header">
        <h3 style="padding-top: 10px" class="card-title">
          <i class="fas fa-chart-pie mr-1"></i>
   Data Profil Paud
        </h3>


      </div>
      <div class="card-body">
        <form action="{{ url('admin/pengaturan/update_nomor_wa') }}" method="POST" enctype="multipart/form-data">
          @csrf

          <div class="col-lg-6 ">
            <div class="form-group">
                <label for="example-text-input" class="col-form-label">Alamat</label>
                <input style="font-size: 20px"  value="{{ $data_paud->alamat }}"  required placeholder="" name="alamat"
                    class="input form-control">
            </div>
        </div>


          <div class="col-lg-6 ">
            <div class="form-group">
                <label for="example-text-input" class="col-form-label">Email</label>
                <input style="font-size: 20px"  value="{{ $data_paud->email }}"  required placeholder="" name="email" type="email"
                    class="input form-control">
            </div>
        </div>

          <div class="col-lg-6 ">
            <div class="form-group">
                <label for="example-text-input" class="col-form-label">Nomor Kontak</label>
                <input style="font-size: 20px" maxlength="16" minlength="10" value="{{ $data_paud->no_kontak }}"  required placeholder="" name="no_kontak" type="tel"
                    class="input form-control">
            </div>
        </div>

          <div class="col-lg-6 ">
              <div class="form-group">
                  <label for="example-text-input" class="col-form-label">Nomor WA</label>
                  <input style="font-size: 20px" maxlength="16" minlength="10" value="{{ $data_paud->no_wa }}"  required placeholder="" name="no_wa" type="tel" id="no_wa"
                      class="input form-control">
              </div>
          </div>

          <div class="col-lg-6 ">
            <div class="form-group">
                <label for="example-text-input" class="col-form-label">Facebook</label>
                <input style="font-size: 20px"  value="{{ $data_paud->facebook }}"   placeholder="" name="facebook"
                    class="input form-control">
            </div>
        </div>

        <div class="col-lg-6 ">
            <div class="form-group">
                <label for="example-text-input" class="col-form-label">Instagram</label>
                <input style="font-size: 20px"  value="{{ $data_paud->instagram }}"   placeholder="" name="instagram"
                    class="input form-control">
            </div>
        </div>

      </div>
      <div class="card-footer">
        <button type="submit" class="btn_update btn btn-primary waves-effect waves-light" style="float:left ;right: 10px; z-index: 40">Update</button>
    </div>
  </form>
    </div>


  </section>
</div>


@endsection
@push('js')

@endpush
