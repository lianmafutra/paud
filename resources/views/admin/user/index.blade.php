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
        {{-- <h3 style="padding-top: 10px" class="card-title">
          <i class="fas fa-chart-pie mr-1"></i>
         User
        </h3> --}}

        <div class="container">
          <div class="row">
            <div class="col-md-2">
              <div  class="form-group">
                <label class=" col-form-label">Filter By Role</label>
                <select   name="filter_role" class="filter_role form-control">
                  <option value="" selected  >All</option>
                  <option value="admin">admin</option>
                  <option  value="user">user</option>
                </select>
              </div>
            </div>
            <div class="col-md-2">
              <label class=" col-form-label">Filter By Status</label>
              <select   name="filter_user" class="filter_user form-control">
                <option value="" selected>All</option>
                <option value="actived">actived</option>
                <option  value="disabled">disabled</option>
              </select>
            </div>
            <div class="col-md-3">
              <div style="margin-top: 30px"  class="form-group">
                <button type="button" class="btn_filter btn btn-primary waves-effect waves-light" style=" z-index: 40">Filter</button>
                <button type="button" class="btn_filter_reset btn btn-success waves-effect waves-light" style="padding:8px; margin-left:2px; z-index: 40"><i class="fas fa-sync"></i></button>
              </div>
            </div>
            <div class="col-md">
              <div  class="form-group">
                @can('add_user')
                <button type="button" class="btn_add_user btn btn-primary waves-effect waves-light"
                style="margin-top: 5px; float:right ;right: 10px; z-index: 40">+ Add User</button>
                @endcan
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card-body wrapper">
     <br>
     {{-- <div class="col-sm-12 col-md-6"><div class="dt-buttons btn-group flex-wrap">               <button class="btn btn-secondary buttons-copy buttons-html5" tabindex="0" aria-controls="table-users" type="button"><span>Copy</span></button> <button class="btn btn-secondary buttons-csv buttons-html5" tabindex="0" aria-controls="table-users" type="button"><span>CSV</span></button> <button class="btn btn-secondary buttons-excel buttons-html5" tabindex="0" aria-controls="table-users" type="button"><span>Excel</span></button> <button class="btn btn-secondary buttons-pdf buttons-html5" tabindex="0" aria-controls="table-users" type="button"><span>PDF</span></button> <button class="btn btn-secondary buttons-print" tabindex="0" aria-controls="table-users" type="button"><span>Print</span></button> <div class="btn-group"><button class="btn btn-secondary buttons-collection dropdown-toggle buttons-colvis" tabindex="0" aria-controls="table-users" type="button" aria-haspopup="true" aria-expanded="false"><span>Column visibility</span></button></div> </div></div> --}}
     @component('components.data-table', [
           'id'=>'table-users', 
           'th'=> ['No','Name','Username','Email','Role','Permissions','Status','Last_login_at','Last_IP_login','Created_at','Action'] ]) 
        @endcomponent

      </div>
    </div>

  
  
  </section>
</div>


@endsection


@push('js')
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
<script src="{{ URL::asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ URL::asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ URL::asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ URL::asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ URL::asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
<script src="{{ URL::asset('plugins/jquery-validation/jquery.validate.min.js')}}"></script>
<script src="{{ URL::asset('plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{ URL::asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{ URL::asset('plugins/jszip/jszip.min.js')}}"></script>
<script src="{{ URL::asset('plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{ URL::asset('plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{ URL::asset('plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{ URL::asset('/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{ URL::asset('plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<script src="{{ URL::asset('plugins/jquery-validation/additional-methods.min.js')}}"></script>

<script src="{{ URL::asset('plugins/select2/js/select2.full.min.js')}}"></script>
<script src="{{ URL::asset('plugins/moment/moment.min.js') }}"></script>
<script src="{{ URL::asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>

@include('admin.user.data')
@include('admin.user.delete')
@include('admin.user.edit')
@include('admin.user.add')



@endpush

