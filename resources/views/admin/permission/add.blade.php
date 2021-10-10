 {{-- modal --}}
     @component('components.modal', [ 'id'=>'modal_add_permission', 'form'=>'form_add_permission','title' => 'Add New Permission']) 
         @slot('slot')
            @component('components.input', ['id'=>'name','label'=>'Name Permission','placeholder'=>'Name Permission'])  @endcomponent
            @component('components.input', ['id'=>'url','label'=>'URL Permission','placeholder'=>'URL Permission'])  @endcomponent
            @component('components.input', ['id'=>'desc','label'=>'Description','placeholder'=>'Description'])  @endcomponent
           
            <div class="form-group">
             <label for="method">Method</label>
             <select  name="method" id="method"  class="form-control">
               <option value="" selected disabled hidden>Select Method</option>
               <option>POST</option>
               <option>GET</option>
               <option>PUT</option>
               <option>PATCH</option>
               <option>DELETE</option>
             </select>
           </div>

           <div class="form-group  is-invalid">
            <label for="example-text-input" class="col-md-12 col-form-label">Group Permission</label>
              <select required id="permissions_group_id" name="permissions_group_id" class="select2 form-control" data-placeholder="Group">
                @foreach ($permissions_group as $item=>$value)
                <option value="{{ $value->id }}">{{ $value->name }}</option>
                @endforeach
              </select>
          </div>

          
         @endslot
     @endcomponent
 {{-- end modal --}}

<script>
$(function() {

  let validator = $("#form_add_permission").validate({
        rules: {
            name    : "required",
            url     : "required",
            method  : "required"
            
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


 $('.btn_add_permission').click(function() { 
        reset();
        $('#modal_add_permission').modal('show');
    });

    $('.btn_action').click(function(e) { 
      if ($("#form_add_permission").valid()) {
        let form = document.getElementById('form_add_permission');
        let formData = new FormData(form);
        e.preventDefault();
        $('.btn_action').html('<span class="spinner-border spinner-border-sm mr-2" role="status" aria-hidden="true"></span>Memproses...').attr('disabled', true);
        $.ajax({
                  url: `{{ route('permissions.store')}}`,
                  type: 'POST',
                  data: formData,
                  contentType: false,
                  processData: false,
                  success: function(data, textStatus, jqXHR) {
                    table_permissions.draw();
                    toastr.success('Createpermission Successfully');
                    reset();
                    $('#modal_add_permission').modal('hide');
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
        $('.form-control').removeClass("is-invalid is-valid");
        $('#form_add_permission').trigger("reset");
        $('.btn_action').html('Simpan').attr('disabled', false);
    }
});
</script>