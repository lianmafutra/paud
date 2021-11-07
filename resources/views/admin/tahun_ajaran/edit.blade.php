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
                  <i class="fas fa-chart-pie mr-1"></i>Edit Pendaftaran
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
              <form action="{{ route('tahun-ajaran.update', $tahun_ajaran->id ) }}" method="POST">
                  @csrf
                  @method('PUT')
                  <div class="col-lg-6 ">
                      <div class="form-group">
                          <label for="example-text-input" class="col-form-label">Tahun Ajaran<span style="color: rgb(230, 67, 67)">*</span></label>
                          <input required placeholder="" name="priode_tahun" type="text"  value="{{ $tahun_ajaran->priode_tahun }}"
                              class="input form-control">
                      </div>


                      <div class="form-group">
                        <label for="example-text-input" class="col-form-label">Priode Bulan<span style="color: rgb(230, 67, 67)">*</span></label>
                        <input required  value="{{ $tahun_ajaran->priode_bulan }}" placeholder="" name="priode_bulan" type="text" 
                            class="input form-control">
                    </div>


                    <div class="form-group">
                        <label for="example-text-input" class="col-form-label">Kuota KB<span style="color: rgb(230, 67, 67)">*</span></label>
                        <input required  value="{{ $tahun_ajaran->kuota_kb }}" placeholder="" name="kuota_kb" type="text"
                            class="input form-control">
                    </div>


                    <div class="form-group">
                        <label for="example-text-input" class="col-form-label">Kuota TK<span style="color: rgb(230, 67, 67)">*</span></label>
                        <input required value="{{ $tahun_ajaran->kuota_tk }}" placeholder="" name="kuota_tk" type="text" 
                            class="input form-control">
                    </div>
                   
                    
                  </div>

          </div>
          <div class="card-footer">
              <a class="btn btn-success waves-effect waves-light"
                  style="margin-right:10px; float:left ;right: 10px; z-index: 40"
                  href="{{ route('tahun-ajaran.index') }}">Kembali</a>
              <button type="submit" class="btn_save btn btn-primary waves-effect waves-light"
                  style="float:left ;right: 10px; z-index: 40">Update</button>
          </div>
          </form>
      </div>
  </section>
  </div>

@endsection
@push('js')

<script type="text/javascript">

</script>
@endpush