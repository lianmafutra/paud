@extends('layouts.master')

@push('css')

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
               Deskripsi Paket PAUD 
        </h3>


      </div>
      <form action="{{ url('admin/halaman/paket-paud/update') }}" method="POST" enctype="multipart/form-data">
      <div class="row">
        <div class="col-4">
          <div class="card-body">
           
              @csrf
              <div class="form-group">
                <label>Paket KB (Kelompok Bermain)<span style="color: rgb(230, 67, 67)">*</span></label>
                <textarea  name="paket_kb" class="ckeditor form-control" rows="3" placeholder=""
                    style="margin-top: 0px; margin-bottom: 0px; height: 99px;">{{old("paket_kb")}}</textarea>
            </div>
          </div>
        </div>

        <div class="col-4">
          <div class="card-body">
          
              @csrf
              <div class="form-group">
                <label>Paket TK (Taman Kanak-Kanak)<span style="color: rgb(230, 67, 67)">*</span></label>
                <textarea name="paket_tk" class="ckeditor form-control" rows="3" placeholder=""
                    style="margin-top: 0px; margin-bottom: 0px; height: 99px;">{{old("paket_tk")}}</textarea>
            </div>
          </div>
        </div>

        <div class="col-4">
          <div class="card-body">
         
              @csrf
              <div class="form-group">
                <label>Paket TPA (Taman Penitipan Anak)<span style="color: rgb(230, 67, 67)">*</span></label>
                <textarea name="paket_tpa" class="ckeditor form-control" rows="3" placeholder=""
                    style="margin-top: 0px; margin-bottom: 0px; height: 99px;">{{old("paket_tpa")}}</textarea>
            </div>
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
<script src="{{ URL::asset('js/ckeditor/ckeditor.js')}}"></script>
<script>

$(function(){
  var editor1 = CKEDITOR.instances.paket_kb;
  var editor2 = CKEDITOR.instances.paket_tk;
  var editor3 = CKEDITOR.instances.paket_tpa;
  editor1.setData({!! json_encode($paket_paud->paket_kb) !!});
  editor2.setData({!! json_encode($paket_paud->paket_tk) !!});
  editor3.setData({!! json_encode($paket_paud->paket_tpa) !!});
});
</script>
@endpush
