@extends('layouts.master')

@push('css')
<link rel="stylesheet" href="{{ URL::asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('plugins/select2/css/select2.min.css')}}">
<link rel="stylesheet" href="{{ URL::asset('css/custom-button.css')}}">
<link rel="stylesheet" href="{{ URL::asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{ URL::asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
@endpush()
<meta name="csrf-token" content="{{ csrf_token() }}">
@section('title') Admin Dashboard @endsection
@section('content')

<div style="padding-top: 20px" class="row">
    <section class="col-lg-12 ">
        <div class="card">
            <div class="card-header">
                <h3 style="padding-top: 10px" class="card-title">
                    <i class="fas fa-chart-pie mr-1"></i>Role Detail
                </h3>
            </div>
            <div class="card-body">
                <div class="col-md-1">
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label class="col-form-label">Role Name</label>
                        <input placeholder="Role Name" name="name" type="text" value="{{ $roles->name }}" id="name"
                            class="input form-control">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="col-lg-12 ">
        <div class="card">
            <div class="card-header">
                <h3 style="padding-top: 10px" class="card-title">
                    <i class="fas fa-chart-pie mr-1"></i>Permissions list
                </h3>
            </div>
            <div class="card-body">
                @component('components.data-table', [
                'id'=>'table-permissions',
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
<script src="{{ URL::asset('plugins/moment/moment.min.js') }}"></script>
<script src="{{ URL::asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>

@include('admin.role.edit.edit-permissions')

<script>
let permissions = [];
let permissions_deleted=[]; // permissions not selected will be deleted
let permissions_length;
let filter_group;

$(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    
    $('.select2').select2();
 

    let table_permissions = $('#table-permissions').DataTable({
        processing: true,
        serverSide: true,
        paginate: false,
        ajax: {
            url: `{{ route('permissions-group.index')}}`,
            data: function (d) {
                d.role = {!!json_encode($roles->name)!!}
            }
        },
        columns: [{
                data: 'DT_RowIndex',
                orderable: false,
                searchable: false
            },
            {
                data: 'name',
            },
            {
                data: 'permissions'
            }, {
                data: 'action',
                orderable: false,
                searchable: false,
                width: '40px'
            },
        ]
    });

    $(document).on('click', '.btn_edit', function (e) {
        e.preventDefault();
        
        $('#modal_edit_group').modal('show');
        let url = $(this).attr('href');
        $('#check_all').prop('checked', false);
        $("#table-edit-permissions tbody").empty();

        $.ajax({
            url: url,
            data: {
                role: {!!json_encode($roles->name) !!}
            },
            type: 'POST',
            success: function (response) {
                $('#group').val(response.name);
                permissions_length = response.permissions.length;
                for (let i in response.permissions) {
                    let row = `<tr><td>${parseInt(i)+parseInt(1)}</td>
                              <td id="permission_name${parseInt(i)+parseInt(1)}">${response.permissions[i].name}</td>
                              <td>                
                                  <div class="form-group clearfix">
                                    <div class="icheck-primary d-inline">
                                        <input class="checkbox" type="checkbox" id="checkboxPermission${parseInt(i)+parseInt(1)}" ${response.permissions[i].active ? 'checked' : '' }>
                                        <label for="checkboxPermission${parseInt(i)+parseInt(1)}">
                                      </label>
                                    </div>
                                  </div>
                              </td>
                              </tr>`;
                    $("#table-edit-permissions tbody").append(row);
                }
            },
            error: function (jqXHR, textStatus, errorThrown) {}
        });
    });

    $(document).on('click', '.btn_update', function (e) {
        e.preventDefault();
        getArraySelectedPermissions();
       
        $.ajax({
            url: `{{ route('permissions-group.update')}}`,
            data: {
                permissions: permissions,
                permissions_deleted: permissions_deleted,
                role: {!!json_encode($roles->name) !!}
            },
            type: 'POST',
            success: function (response) {
                $('#modal_edit_group').modal('hide');
                table_permissions.draw();
                toastr.success('Update Role Permissions Successfully');
            },
            error: function (jqXHR, textStatus, errorThrown) {
                toastr.error('Error Update Role Permissions');
            }
        });
    });

    function getArraySelectedPermissions() {
        // clear array 
        permissions = []; 
        permissions_deleted = [];

        //push new array is checked/selected  
        for (let i = 1; i <= permissions_length; i++) {
            if ($('#checkboxPermission' + i).is(":checked")) {
                permissions.push($('#permission_name' + i).html());
            }
            else{
                permissions_deleted.push($('#permission_name' + i).html());
            }
        }
    }

    $('#check_all').change(function () {
        if (this.checked) {
            $('.checkbox').prop('checked', true);
        } else {
            $('.checkbox').prop('checked', false);
        }
    });

});

</script>

@endpush
