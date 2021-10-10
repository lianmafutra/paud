@extends('layouts.master')

@push('css')
    <link rel="stylesheet" href="{{ URL::asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('plugins/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('css/custom-button.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
@endpush()
<meta name="csrf-token" content="{{ csrf_token() }}">
@section('title') Admin Dashboard @endsection
@section('content')

<div style="padding-top: 20px" class="row">
  <section class="col-lg-12 ">
    <div class="card">
      <div class="card-header">
        <h3 style="padding-top: 10px" class="card-title">
          <i class="fas fa-chart-pie mr-1"></i>Role
        </h3>
        <button type="button" class="btn_tambah btn btn-primary waves-effect waves-light"
          style="float:right ;right: 10px; z-index: 40">Add Role</button>
      </div>
      <div class="card-body">
        
        @component('components.data-table', [
           'id'=>'table-role', 
           'th'=> ['No','Role Name','User Count','Permissions','Guard', 'Action'] ]) 
        @endcomponent

        @component('components.modal', [
          'id'=>'modal-role', 'title' => 'Add New Role', 'form'=>'']) 
         
         @slot('slot')

            @component('components.input', 
              ['id'=>'role_name','label'=>'Role Name','placeholder'=>'input role name'])  
            @endcomponent

          @endslot
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

<script src="{{ URL::asset('plugins/moment/moment.min.js') }}"></script>
<script src="{{ URL::asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<script>
  $(function() {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    let table_role = $('#table-role').DataTable({
        processing: true,
        serverSide: true,
        ajax: `{{ route('role.index')}}`,
        columns: [{
                data: 'DT_RowIndex',
                orderable: false,
                searchable: false
            },
            {
                data: 'name'
            },
            {
                data: 'users_count',
                width: '40px'
            },
            {
                data: 'guard_name'
            }, 
            {
                data: 'guard_name'
            }, 
            {
                data: 'action',
                orderable: false,
                searchable: false,
                width: '40px'

            },
        ]
    
    });

    $('.btn_tambah').click(function(e) {
        e.preventDefault();
        $('#modal-role').modal('show');
    });

    $('#select_permissions').select2();



});

</script>
@endpush