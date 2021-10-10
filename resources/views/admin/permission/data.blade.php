<script>
    let filter_group;
    let table_permissions = $('#table-permission').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
         url: `{{ route('permissions.index')}}`,
          data: function (d) {
                d.group = filter_group
            }
         },
        columns: [
            {
                data: 'DT_RowIndex',
                orderable: false,
                searchable: false
            },
            {
                data: 'permissions_group.name'
            },
            {
                data: 'url'
            },
            {
                data: 'method',
                width: "20px"
            },
            {
                data: 'name'
            },
            {
                data: 'description'
            },
            {
                data: 'guard_name'
            }, 
            {
                data: 'action',
                orderable: false,
                searchable: false,
                width: "40px"

            },
        ]
    
    });


    let table_group = $('#table-group').DataTable({
        processing: true,
        serverSide: true,
        ajax: `{{ route('permissions.group')}}`,
        columns: [
            {
                data: 'DT_RowIndex',
                orderable: false,
                searchable: false,
                width: '40px'

            },
            {
                data: 'name'
            },
            {
                data: 'permissions',
                // width: '20px'
            },
            {
                data: 'action',
                orderable: false,
                searchable: false,
                width: '40px'

            }
        ]
    
    });


    

    

$('.btn_filter').click(function(e) {
    filter_group= $('.filter_group').val();
    table_permissions.draw();
});

$('.btn_filter_reset').click(function(e) {
    filter_group = '';
    $('select').prop('selectedIndex',0);
    table_permissions.draw();
});


   
</script>