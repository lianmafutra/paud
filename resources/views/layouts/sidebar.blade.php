<style>
  .nav-sidebar .nav-treeview {
    display: none;
    list-style: none;
    padding: 0;
    margin-left: 15px;
}
</style>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="#" class="brand-link">
    <img src="{{ URL::asset('dist/img/logo_pemkot_circle.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
      style="opacity: .8">
    <span class="brand-text font-weight-light">App</span>
  </a>
  

  <!-- Sidebar -->
  <div class="sidebar ">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ URL::asset('dist/img/avatar5.png')}}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Administrator</a>
      </div>
    </div>
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        {{-- start menu--}}

          <li class="nav-item ">
            <a href="{{ url('admin/dashboard/') }}" class="nav-link {{ Request::is('admin/dashboard') ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
      
          <li class="nav-item">
            <a href="{{ route('berita.index') }}" class="nav-link {{ Request::is('admin/berita') ? 'active' : '' }}">
              <i class="nav-icon <i far fa-newspaper"></i>
              <p>
              Berita
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('slider.index') }}" class="nav-link {{ Request::is('admin/slider') ? 'active' : '' }}">
              <i class="nav-icon far fa-images"></i>
              <p>
              Slider
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user-friends"></i>
              <p>
             Pendaftaran
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: none;">
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="nav-icon far fa-file"></i>
                  <p>
                    TK
                  </p>
                </a>
              </li>

            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-file-alt"></i>
              <p>
               Halaman
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: none;">
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="nav-icon far fa-file"></i>
                  <p>
                  Profil Sekolah
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="nav-icon  far fa-file"></i>
                  <p>
                 Struktur Organisasi
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="nav-icon far fa-file"></i>
                  <p>
                Lokasi 
                  </p>
                </a>
              </li>
              
                <li class="nav-item">
                  <a href="" class="nav-link">
                    <i class="nav-icon far fa-file"></i>
                    <p>
                    Visi & Misi
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="" class="nav-link">
                    <i class="nav-icon far fa-file"></i>
                    <p>
                    Paket Biaya TPA
                    </p>
                  </a>
                </li>

            </ul>
          </li>
        

       
        </li>
      
        </li>
      
        <li class="nav-item">
          <a href="#" class="nav-link {{ Request::is('admin/pengaturan') ? 'active' : '' }}">
            <i class="nav-icon fa fa-cog"></i>
            <p>
             Pengaturan
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>

          <ul class="nav nav-treeview" style="display: none;">
          
            <li class="nav-item">
              <a href="{{ url('admin/pengaturan/') }}" class="nav-link">
                <i class="nav-icon far fa-file"></i>
                <p>
                Atur Nomor Whatsapp 
                </p>
              </a>
            </li>
            
          <li class="btn_ubah_password nav-item">
            <a href="javascript:void(0)" class="nav-link">
                 <i class="nav-icon far fa-file"></i>
              <p>
                Ubah Password
              </p>
            </a>
          </li>
          </ul>
        </li>

       
        <li class="nav-item">
          <a  onclick="logout()" href="javascript:void(0)" class="nav-link">
            <i class="nav-icon fas fa-sign-out-alt"></i>
            <p style="color: rgb(255, 98, 98)">
            Logout
            </p>
          </a>
        </li>   
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
          </form>
        {{-- logout form

         {{--end start menu--}}
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
<div class="col-sm-6 col-md-4 col-xl-3">
  <div class="modal_ubah_password modal fade" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true"
    tabindex="-1">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title mt-0" id="modal_layanan_title">Ubah Password</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <div class="row" id="form_editor2">
            <div class="col-12">
                <form id="form_ubah_password" enctype="multipart/form-data" method="POST">
                  @csrf
                <div class="form-group">
                  <label for="example-text-input" class="col-md-12 col-form-label">Password Lama</label>
                  <input required placeholder="Password Lama" name="pass_lama" type="password"
                    id="pass_lama" class="input form-control">
                </div>
                <div class="form-group">
                  <label for="example-text-input" class="col-md-12 col-form-label">Password Baru</label>
                  <input required  placeholder="Password Baru" name="pass_baru" type="password"
                    id="pass_baru" class="input form-control">
                </div>
                <div class="form-group">
                  <label for="example-text-input" class="col-md-12 col-form-label">Password Konfirmasi</label>
                  <input required  placeholder="Password Konfirmasi" name="pass_baru_conf" type="password"
                    id="pass_baru_conf" class="input form-control">
                </div>               
                <div class="modal-footer justify-content-between">
                  <button type="button" data-dismiss="modal" class="btn_kembali btn btn-secondary">Batal</button>
                  <button  value="Validate" class="btn btn-primary">Ubah</button>
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
@push('js')
<script src="{{ URL::asset('plugins/jquery-validation/jquery.validate.min.js')}}"></script>
<script src="{{ URL::asset('plugins/jquery-validation/additional-methods.min.js')}}"></script>
<script>

$(function() {

  $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

  $('.btn_ubah_password').click(function(e) {
        e.preventDefault();        
        $('.modal_ubah_password').modal('show');
        $('#form_ubah_password').trigger("reset");
        validator.resetForm();
        $('.input').removeClass("is-invalid is-valid");
  });

  $('#form_ubah_password').on("submit", function(e) {
      e.preventDefault();
      if ($("#form_ubah_password").valid()) {
              $.ajax({
              type: 'POST',
              url: "{{ route('user.updatepass') }}",
              contentType: false,
              processData: false,
              data: new FormData(this),
              success: function(data, textStatus, jqXHR) {
                Swal.fire({
                              title: 'Password Berhasil diperbarui',
                              text: 'Silahkan login ulang',
                              icon: 'success',
                              showCancelButton: false,
                              allowOutsideClick: false,
                              confirmButtonText: 'login ulang',
                          }).then((result) => {
                            if (result.isConfirmed) {
                              window.open("/logout");
                            }
                          })
              },
              error: function(jqXHR, textStatus, errorThrown) {
                Swal.fire({
                      title: jqXHR.responseJSON.message,
                      icon: 'error',
                      confirmButtonText: 'Coba Lagi',
                });
              }
          });
      }
     
  });    




var validator = $("#form_ubah_password").validate({
        rules: {
           pass_lama: {
                required: true,
                minlength : 8,
            },
            pass_baru: {
                required: true,
                minlength : 8,
            },
            pass_baru_conf: {
                required: true,
                equalTo : "#pass_baru",
                minlength : 8,
            },
            
        },
        messages: {
            pass_lama: {
              required : "password lama wajib di isi",
              minlength : "minimal password 8 karakter",
            },
            pass_baru: {
              required : "password baru wajib di isi",
              minlength : "minimal password 8 karakter",
            },
            pass_baru_conf: {
              required : "password konfirmasi wajib di isi",
              minlength : "minimal password 8 karakter",
              equalTo : "password konfirmasi haru sama dengan password baru"
            }
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

});
</script>
@endpush