<script>
    
    let filter_status;
    let filter_role;

    let tabel_users = $('#table-users').DataTable({
    processing: true,
    serverSide: true,
    searching: true,
    ajax: {
        url: "{{ route('user.index') }}",
          data: function (d) {
                d.status = filter_status,
                d.role = filter_role
            }
    },
    buttons: ["csv", "excel", "pdf", "print", "colvis"],
    columns: [{
            data: 'DT_RowIndex',
            orderable: false,
            searchable: false
        },
        {
            data: 'name'
        },
        {
            data: 'username'
        },
        {
            data: 'email'
        },
        {
            data: 'roles'
        },
        {
            data: 'permissions'
        },
        {
            data: 'status',
            width: "40px"
        },
        {
            data: 'last_login_at',
            width: "40px"
        },
        {
            data: 'last_login_ip',
            width: "40px"
        },
        
        {
            data: 'created_at',
            width: "40px"
        },
        {
            data: 'action',
            orderable: false,
            searchable: false,
            width: "40px"

        },
    ],

    "columnDefs": [{
        "targets": [7, 3, 8],
        "visible": false,
    }],
    "initComplete": function(settings, json) {
        tabel_users.buttons().container()
            .appendTo('#table-users_wrapper .col-md-6:eq(0)');
    },
    "dom": "<'row'<'col-sm-6'B><'col-sm-6'f>>" + "<'row'<'col-md-12'tr>>" + "<'row'<'col-sm-2'i><'col-sm-6 'l><'col-sm-4'p>>",
});

$(".dataTables_length").css({ "padding-top": "10px" });

$('.btn_filter').click(function(e) {
    filter_status= $('.filter_user').val();
    filter_role= $('.filter_role').val();
    tabel_users.draw();
});

$('.btn_filter_reset').click(function(e) {
    filter_status = '';
    filter_role = '';
    $('select').prop('selectedIndex',0);
    tabel_users.draw();
});

</script>