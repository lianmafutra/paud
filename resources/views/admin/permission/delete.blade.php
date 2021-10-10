<script>
$(document).on('click', '.btn_delete', function (e) {
      e.preventDefault();
      let data =  $('#table-permission').DataTable().row( $(this).parents('tr')).data();
      let url = $(this).attr('href');
      Swal.fire({
          title: 'Apakah anda yakin Menghapus Data Permissions Name : '+data.name+' ?',
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Ya, Hapus',
          cancelButtonText: 'Batal'
        }).then((result) => {
          if (result.value) {
            $.ajax({
                url: url,
                type: 'DELETE',
                success: function(response) {
                    table_permissions.draw();
                    toastr.success('Data Permission Deleted Successfully');
                },
                error: function(response) {
                  console.log(response);
                    toastr.error('Error Deleted Successfully');
                }
            });
          }
        })
    });

</script>