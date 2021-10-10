<script>

 
    $(document).on('click', '.btn_delete', function (e) {
      e.preventDefault();
      let data =  $('#table-users').DataTable().row( $(this).parents('tr')).data();
      let url = $(this).attr('href');
      Swal.fire({
          title: 'Apakah anda yakin Menghapus Data Username : '+data.username+' ?',
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
                success: function(data, textStatus, jqXHR) {
                    tabel_users.draw();
                  toastr.success('Data Deleted Successfully');
                },
                error: function(jqXHR, textStatus, errorThrown) {
                 
                }
            });
          }
        })
    });

</script>