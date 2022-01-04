<!-- Start header  -->
<style>
  span.pendaftaran {
    background: #23a455;
    color: white;
    padding: 10px;
}

</style>
<header id="mu-header">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="mu-header-area">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
              <div class="mu-header-top-left">
                <div class="mu-top-email">
                  <i class="fa fa-envelope"></i>
                  <span>{{$contents->email}}</span>
                </div>
                <div class="mu-top-phone">
                  <i class="fa fa-phone"></i>
                  <span>{{$contents->no_kontak}}</span>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
              <div class="mu-header-top-right">
                <nav>
                  <ul class="mu-top-social-nav">
                    <li><a href="{{$contents->facebook}}" target="_blank"><span class="fa fa-facebook"></span></a></li>
                    <li><a href="{{$contents->instagram}}" target="_blank"><span class="fa fa-instagram"></span></a></li>

                    {{-- <li><a href="#"><span class="fa fa-youtube"></span></a></li> --}}
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- End header  -->
<!-- Start menu -->
<section id="mu-menu">
  <nav class="navbar navbar-default" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <!-- LOGO -->
        <!-- TEXT BASED LOGO -->
        <a class="navbar-brand" href="{{ url('/') }}"><i class="fa fa-university"></i><span>Meccazia Junior</span></a>
        <!-- IMG BASED LOGO  -->
        <!-- <a class="navbar-brand" href="index.html"><img src="assets/img/logo.png" alt="logo"></a> -->
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
          <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{ url('/') }}">Home</a></li>
          <li class="dropdown {{ Request::is('profil/*') ? 'active' : '' }}">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Profil <span class="fa fa-angle-down"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="{{ url('profil/latar-belakang') }}">Latar Belakang</a></li>
              <li><a href="{{ url('profil/visi-misi') }}">Visi & Misi</a></li>
              {{-- <li><a href="course.html">Program & Layanan</a></li> --}}
              {{-- <li><a href="{{ url('profil/struktur-organisasi') }}">Struktur Organisasi</a></li> --}}
            </ul>
          </li>
        
          {{-- <li><a href="{{ url('artikel') }}">Program</a></li> --}}
          <li class="{{ Request::is('artikel') ? 'active' : '' }}"><a href="{{ url('artikel') }}">Artikel</a></li>
          <li class="{{ Request::is('galeri','galeri/*') ? 'active' : '' }}"><a href="{{ url('galeri') }}">Galeri</a></li>
          {{-- <li class="{{ Request::is('pendaftaran') ? 'active' : '' }}"><a href="{{ url('pendaftaran/pilih') }}"><span class="pendaftaran">Pendaftaran</span></a></li> --}}
          <li class="dropdown {{ Request::is('profil/*') ? 'active' : '' }}">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="pendaftaran">Pendaftaran <span class="fa fa-angle-down"></span></span> </a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="{{ url('pendaftaran/pilih') }}">Pendaftaran Siswa Baru</a></li>
              <li><a href="{{ url('pendaftaran/pengumuman') }}">Hasil Pengumuman</a></li>
            </ul>
          </li>
          {{-- <li><a href="#">Kontak</a></li> --}}

          {{-- <li><a href="#" id="mu-search-icon"><i class="fa fa-search"></i></a></li> --}}
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </nav>
</section>

<div id="mu-search">
  <div class="mu-search-area">
    <button class="mu-search-close"><span class="fa fa-close"></span></button>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <form class="mu-search-form">
            <input type="search" placeholder="Cari...">
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
