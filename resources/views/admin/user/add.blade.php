@component('components.modal', [
    'id'=>'modal_add_user', 'form'=>'form_add_user','title' => 'Add New User']) 
   @slot('slot')

      @component('components.input', ['id'=>'name','label'=>'Name','placeholder'=>'Name'])  @endcomponent
      @component('components.input', ['id'=>'username','label'=>'Username','placeholder'=>'Username'])  @endcomponent
      @component('components.input', ['id'=>'password','label'=>'Password','placeholder'=>'Password'])  @endcomponent
      @component('components.input', ['id'=>'password_conf','label'=>'Password Confirmation','placeholder'=>'Password Confirmation'])  @endcomponent
      @component('components.select2-multi', 
      ['id'=>'roles','name'=>'roles[]','label'=>'Select Role','placeholder'=>'Select Role'])  
      @slot('item')
          @foreach ($roles as $item=>$value)
          <option value="{{ $value }}">{{ $value }}</option>
          @endforeach
      @endslot
      @endcomponent  
      @component('components.select2-multi', 
      ['id'=>'permissions','name'=>'permissions[]','label'=>'permissions', 'placeholder'=>'Select Permissions']) 
          @slot('item')
          @foreach ($permissions as $item=>$value)
                <option value="{{ $value }}">{{ $value }}</option>
          @endforeach
          @endslot
      @endcomponent
  
    @endslot
  @endcomponent
  <script>
  $(function() {

    let validator = $("#form_add_user").validate({
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


$('.btn_add_user').click(function() { 
    reset();
        $('#modal_add_user').modal('show');
        $('.modal-title').text('Add User');
    });


$('.btn_action').click(function(e) {
      if ($("#form_add_user").valid()) {
        let form = document.getElementById('form_add_user');
          let formData = new FormData(form);
          e.preventDefault();
          $('.btn_action').html('<span class="spinner-border spinner-border-sm mr-2" role="status" aria-hidden="true"></span>Memproses...').attr('disabled', true);
          $.ajax({
                url: `{{ route('user.store')}}`,
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function(data, textStatus, jqXHR) {
                  tabel_users.draw();
                  toastr.success('Create user Successfully');
                  reset();
                  $('#modal_add_user').modal('hide');
                },
                error: function(jqXHR, textStatus, errorThrown) {
                  validator.showErrors(jqXHR.responseJSON.errors);
                   $('.btn_action').html('Simpan').attr('disabled', false);
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

});
  </script>
