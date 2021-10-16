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
                Visi & Misi
        </h3>


      </div>
      <div class="card-body">
        <form action="{{ url('admin/halaman/visi-misi/update') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label>Isi Konten <span style="color: rgb(230, 67, 67)">*</span></label>
            <textarea id="visi_misi" name="visi_misi" class="ckeditor form-control" rows="3" placeholder=""
                style="margin-top: 0px; margin-bottom: 0px; height: 99px;">{{old("visi_misi")}}</textarea>
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
    var editor = CKEDITOR.instances.visi_misi;
  editor.setData({!! json_encode($data_paud->visi_misi) !!});
});

</script>
@endpush
