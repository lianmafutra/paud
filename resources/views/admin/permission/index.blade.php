@extends('layouts.master')

@push('css')
<link rel="stylesheet" href="{{ URL::asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('plugins/select2/css/select2.min.css')}}">
<link rel="stylesheet" href="{{ URL::asset('css/custom-button.css')}}">
<link rel="stylesheet" href="{{ URL::asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{ URL::asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">

  @endpush()

<meta name="csrf-token" content="{{ csrf_token() }}">

@section('title') Admin Dashboard @endsection

@section('content')
<div style="padding-top: 20px" class="row">

  <section class="col-lg-12 ">

    <div class="card">
      <div class="card-header">
     
        <div class="container">
          <div class="row">
            <div class="col-md-2">
              <div  class="form-group">
                <label class=" col-form-label">Filter By Group</label>
                <select   name="filter_group" class="filter_group form-control">
                  <option value="" selected  >All</option>
                  @foreach ($permissions_group as $item=>$value)
                <option value="{{ $value->id }}">{{ $value->name }}</option>
                @endforeach
                </select>
              </div>
            </div>
            <div class="col-md-3">
              <div style="margin-top: 30px"  class="form-group">
                <button type="button" class="btn_filter btn btn-primary waves-effect waves-light" style=" z-index: 40">Filter</button>
                <button type="button" class="btn_filter_reset btn btn-success waves-effect waves-light" style="padding:8px; margin-left:2px; z-index: 40"><i class="fas fa-sync"></i></button>
              </div>
            </div>
            <div class="col-md">
              <div  class="form-group">
              
              @can('add_permission')
                  <button type="button" class="btn_add_permission btn btn-primary waves-effect waves-light" style="float:right ;right: 10px; margin-top: 5px; z-index: 40">+ Add Permissions</button>
              @endcan
              
            

              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card-body">

        @component('components.data-table', [
           'id'=>'table-permission', 
           'th'=> ['No','Group','Url','Method','Permission Name','Description','User','Action']]) 
        @endcomponent
      </div>

    
    </div>

    <div class="card">
      <div class="card-header">
     
        <div class="container">
          <div class="row">
          
          
            <div class="col-md">
              <div  class="form-group">
              
                <label class="col-form-label">Permissions Group</label>
              <button type="button" class="btn_add_group btn btn-primary waves-effect waves-light" style="float:right ;right: 10px; margin: 5px 5px 0 0; z-index: 40">+ Add Group</button>


              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card-body">


          @component('components.data-table', [
             'id'=>'table-group', 
             'th'=> ['No','Group','Permissions','Action']]) 
          @endcomponent

      </div>

    
    </div>


  </section>
</div>


@endsection
@push('js')
<script src="{{ URL::asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ URL::asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ URL::asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ URL::asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ URL::asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
<script src="{{ URL::asset('plugins/jquery-validation/jquery.validate.min.js')}}"></script>
<script src="{{ URL::asset('plugins/jquery-validation/additional-methods.min.js')}}"></script>

<script src="{{ URL::asset('plugins/select2/js/select2.full.min.js')}}"></script>
{{-- <script src="{{ URL::asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script> --}}
<script>
$(function() {
  $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
  });
  $('.select2').select2();
});
</script>
@include('admin.permission.data')
@include('admin.permission.delete')
@include('admin.permission.add')
@include('admin.permission.group.add')
@endpush