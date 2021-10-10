<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="csrf-token" content="{{ csrf_token() }}" />

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard</title>
  {{-- template head css --}}
  @include('layouts.head')
  @toastr_css
</head>
<style>
.select2-container .select2-selection--single {

 height: 35px !important;

}




</style>

@section('body')
@show

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed">
  <div class="wrapper">
    @include('sweetalert::alert')
    <!-- Preloader -->
    {{-- <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="{{ URL::asset('dist/img/logo_pemkot_circle.png')}}" alt="AdminLTELogo" height="60"
        width="60">
    </div> --}}

    <!-- Begin page -->

    {{-- template navbar --}}
    @include('layouts.navbar')

    {{-- template sidebar --}}
    @include('layouts.sidebar')

    {{-- template content --}}
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      {{-- <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div> --}}
      <section class="content">
        <div class="container-fluid">
          @yield('content')
        </div>
      </section>
    </div>

    {{-- template footer --}}
    @include('layouts.footer')



  </div>

  {{-- template footer script js --}}
  @include('layouts.footer-script')

  <script>
    function logout(){
    Swal.fire({
      title: 'Apakah anda yakin logout ?',
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Ya, keluar',
      cancelButtonText: 'Batal'
    }).then((result) => {
      if (result.isConfirmed) {
        $("#logout-form").submit();
      } 
    })
  }
  </script>
  @toastr_js
  @toastr_render
</body>

</html>