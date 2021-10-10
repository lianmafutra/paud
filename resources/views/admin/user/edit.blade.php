
<div class="col-sm-6 col-md-4 col-xl-3">
    <div class="modal_edit_user modal fade" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true"
      tabindex="-1">
      <div class="modal-dialog modal-md">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title mt-0"></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
           
            <div class="row" id="form_editor">
              <div class="col-12">
                <form  id="form_update_user" enctype="multipart/form-data">
                  @csrf

                  <div class="form-group">
                    <input  name="id" type="text"
                      hidden class="id input form-control">
                  </div>

                  <div class="form-group col-md-12">
                    <label for="example-text-input" class="col-md-12 col-form-label">Name</label>
                    <input  placeholder="Name User" name="name" type="text" class="name input form-control">
                  </div>

                  <div class="form-group col-md-12">
                    <label for="example-text-input" class="col-md-12 col-form-label">Username</label>
                    <input disabled  placeholder="Username" name="username" type="text" class="username input form-control">
                  </div>

                  <div class="form-group col-md-12 is-invalid">
                    <label for="example-text-input" class="col-md-12 col-form-label">Roles</label>
                    <div class="select2-blue">
                      <select required name="roles[]" class="roles select2 item-menu" multiple="multiple" data-placeholder="Roles" data-dropdown-css-class="select2-blue" style="width: 100%;">
                        @foreach ($roles as $item=>$value)
                           <option value="{{ $value }}">{{ $value }}</option>
                         @endforeach
                      </select>
                    </div>
                  </div>

                  <div class="form-group col-md-12 is-invalid">
                    <label for="example-text-input" class="col-md-12 col-form-label">Permissions</label>
                    <div class="select2-blue">
                      <select required name="permissions[]" class="permissions select2 item-menu" multiple="multiple" data-placeholder="Permissions" data-dropdown-css-class="select2-blue" style="width: 100%;">
                        @foreach ($permissions as $item=>$value)
                           <option value="{{ $value }}">{{ $value }}</option>
                         @endforeach
                      </select>
                    </div>
                  </div>
                
                  <div  class="form-group col-md-4">
                    <label for="example-text-input" class="col-md-12 col-form-label">Status</label>
                    <select   name="status" class="status form-control">
                      <option value="actived">actived</option>
                      <option  value="disabled">disabled</option>
                    </select>
                  </div>
                  
                  <div class="modal-footer justify-content-between">
                    <button type="button" data-dismiss="modal" class="btn_kembali btn btn-secondary">Batal</button>
                    <button  value="Validate" class="btn_update btn btn-primary">Simpan</button>
                  </div>
                </form>
              </div>
              <!-- end col -->
            </div>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
  </div>


  <script>

let validator = $("#form_update_user").validate({
    rules: {
        name: "required",
        username: "required",
        password: {
            required: true,
            minlength: 5,
        },
        password_conf: {
            required: true,
            equalTo: "#password",
            minlength: 5,
        },
        "roles[]": "required",
    },
    errorElement: 'span',
    errorPlacement: function(error, element) {
        error.addClass('invalid-feedback');
        element.closest('.form-group').append(error);
    },
    highlight: function(element, errorClass, validClass) {
        $(element).addClass('is-invalid');
    },
    unhighlight: function(element, errorClass, validClass) {
        $(element).removeClass('is-invalid');
    }
});

      //Get Detail User by Id 
        $(document).on('click', '.btn_edit', function (e) {
          reset();
        $('.modal_edit_user').modal('show');
        $('.btn_update').html('Update');
        $('.modal-title').text('Update Data User');
        let url = $(this).attr('href');
        $.ajax({
                  url: url,
                  type: 'GET',
                  success: function(response) {
                    $('.id').val(response.id);
                    $('.name').val(response.name);
                    $('.username').val(response.username);
                    $('.roles').val(response.roles_array).trigger('change');
                    $('.permissions').val(response.permissions_array).trigger('change');
                    $('.status').val(response.status).change();
                  },
                  error: function(jqXHR, textStatus, errorThrown) {
                  }
              });
      });
  
      //Update data user 
      $('.btn_update').click(function(e) {
        if ($("#form_update_user").valid()) {
            let form = document.getElementById('form_update_user');
            let formData = new FormData(form);
            e.preventDefault();
            $('.btn_update').html('<span class="spinner-border spinner-border-sm mr-2" role="status" aria-hidden="true"></span>Memproses...').attr('disabled', true);
            $.ajax({
                  url: `{{ route('user.update')}}`,
                  type: 'POST',
                  data: formData,
                  contentType: false,
                  processData: false,
                  success: function(data, textStatus, jqXHR) {
                    tabel_users.draw();
                    toastr.success('Update user Successfully');
                    reset();
                    $('.modal_edit_user').modal('hide');
                  },
                  error: function(jqXHR, textStatus, errorThrown) {
                    validator.showErrors(jqXHR.responseJSON.errors);
                     $('.btn_update').html('Update').attr('disabled', false);
                  }
              }); 
        } 
      });
  
      function reset() {
          validator.resetForm();   
          $('.input').removeClass("is-invalid is-valid");
          $('.select2').val(null).trigger('change');
          $('#form_add_user').trigger("reset");
          $('.btn_action').html('Simpan').attr('disabled', false);
          $('.btn_update').html('Update').attr('disabled', false);
      }

  </script>



