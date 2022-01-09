@extends('frontend.layouts.master')
<meta name="csrf-token" content="{{ csrf_token() }}">

@section('content')
<section id="mu-page-breadcrumb">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="mu-page-breadcrumb-area">
          <h2>Fasilitas</h2>
          <ol class="breadcrumb">
           <li><a href="#">Home</a></li>
           <li class="active">Fasilitas</li>
         </ol>
        </div>
      </div>
    </div>
  </div>
</section>
  <section id="mu-about-us">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-about-us-area">
            <div class="row">
              <div class="col-lg-12 col-md-12">
                <div class="mu-about-us-left">
                  <!-- Start Title -->
                  {{-- <div class="mu-title">
                    <h2>Visi & Misi</h2>
                  </div> --}}
                  <!-- End Title -->
                  {!!  $data_paud->fasilitas  !!}
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
