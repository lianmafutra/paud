 {{-- modal --}}


 @component('components.modal', [ 'id'=>'modal_add_group', 'form'=>'form_add_group','title' => 'Add New Group']) 
 @slot('slot')
    @component('components.input', ['id'=>'name_group','label'=>'Name Group','placeholder'=>'Name Group'])  @endcomponent
    <div class="form-group">
        <div class="">
            <label style="padding-right: 20px" class="form-check-label">Generate CRUD Permissions</label>  
            <input id="check_all" class="form-check-input" type="checkbox">
         </div>
    </div>
 
    @endslot
@endcomponent
{{-- end modal --}}

<script>
$(function () {

    let validator = $("#form_add_permission").validate({
        rules: {
            name: "required",
            url: "required",
            method: "required"

        },
        errorElement: 'span',
        errorPlacement: function (error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
        },
        highlight: function (element, errorClass, validClass) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
        }
    });


    $('.btn_add_group').click(function () {
        reset();
        $('#modal_add_group').modal('show');
    });

    $('.btn_action').click(function (e) {
        if ($("#form_add_group").valid()) {
            let form = document.getElementById('form_add_group');
            let formData = new FormData(form);
            e.preventDefault();
            $('.btn_action').html('<span class="spinner-border spinner-border-sm mr-2" role="status" aria-hidden="true"></span>Memproses...').attr('disabled', true);
            $.ajax({
                url: `{{ route('permissions.store')}}`,
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function (data, textStatus, jqXHR) {
                    table_permissions.draw();
                    toastr.success('Createpermission Successfully');
                    reset();
                    $('#modal_add_permission').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown) {
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