@extends('frontend.layouts.master')
<meta name="csrf-token" content="{{ csrf_token() }}">
@push('css')
  <link rel="stylesheet" href="{{ URL::asset('plugins/lightgallery/css/lightgallery.min.css') }}">
  <style>
   
  </style>
  @endpush

@section('content')
<section id="mu-page-breadcrumb">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-page-breadcrumb-area">
            <h2>Galeri Detail</h2>
            <ol class="breadcrumb">
             <li><a href="{{ url('/') }}">Home</a></li>  
             <li><a href="{{ url('/galeri') }}">Galeri</a></li>            
             <li class="active">Galeri Detail</li>
           </ol>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section style="padding-bottom: 0px !important"  id="mu-about-us">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="col-lg-12 col-md-12">
            <div class="mu-about-us-left">
              <!-- Start Title -->
              <div style="margin-bottom: 30px !important"   class="mu-title">
                <h2>{{ $galeri_album->nama }}</h2>
              </div>

              {!! $galeri_album->deskripsi !!}
              </div>
          </div>
         
        </div>
      </div>
    </div>
  </section>
  
  <section style="padding-top: 0px !important"   id="mu-about-us">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-about-us-area">           
            <div class="row">
              <div class="col-lg-12 col-md-12">
                <div class="mu-about-us-left">
                 
                  <div class="mu-from-blog-content">
                    <div class="row">
                      <div id="lightgallery">
                        @foreach ($galeri as $item)
                        <div style="margin-top: 30px" class="col-md-4 col-sm-4">
                          <article class="mu-blog-single-item">
                            <figure class="mu-blog-single-img">
                              <a href="{{URL::asset('/uploads/'.$item->gambar)}}"><img src="{{URL::asset('/uploads/'.$item->gambar)}}" alt="img"></a>
                              <figcaption class="mu-blog-caption">
                                {{-- <h3><a href="#">{{ $item->nama }}</a></h3> --}}
                              </figcaption>
                            </figure>
                            <div class="mu-blog-description">
                              {{-- <p>{{ \Illuminate\Support\Str::limit($item->isi, 150, $end='...') }}</p> --}}
                              {{-- <a class="mu-read-more-btn" href="{{ url('artikel/detail/'.$item->id) }}">Selengkapnya</a> --}}
                            </div>
                          </article>
                        </div>
                        @endforeach
                      </div>

      
                    </div>
                  </div>
                </div>
              </div>
            
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
@push('js')
{{-- <script src="https://cdn.jsdelivr.net/picturefill/2.3.1/picturefill.min.js"></script> --}}
<script src="{{ URL::asset('plugins/lightgallery/js/lightgallery.min.js') }}"></script>
<script src="{{ URL::asset('plugins/lightgallery/js/lg-pager.min.js') }}"></script>
<script src="{{ URL::asset('plugins/lightgallery/js/lg-autoplay.min.js')}}"></script>
<script src="{{ URL::asset('plugins/lightgallery/js/lg-fullscreen.min.js')}}"></script>
<script src="{{ URL::asset('plugins/lightgallery/js/lg-zoom.min.js')}}"></script>
<script src="{{ URL::asset('plugins/lightgallery/js/lg-hash.min.js')}}"></script>
<script src="{{ URL::asset('plugins/lightgallery/js/lg-share.min.js')}}"></script>
<script src="{{ URL::asset('plugins/lightgallery/js/lg-rotate.min.js')}}"></script>
<script>
   lightGallery(document.getElementById('lightgallery'), {
    selector: 'a' 
});
</script>
@endpush