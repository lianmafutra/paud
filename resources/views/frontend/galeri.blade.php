@extends('frontend.layouts.master')
<meta name="csrf-token" content="{{ csrf_token() }}">

@section('content')
<section id="mu-page-breadcrumb">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-page-breadcrumb-area">
            <h2>Galeri</h2>
            <ol class="breadcrumb">
             <li><a href="#">Home</a></li>            
             <li class="active">Galeri</li>
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
                 
                  <div class="mu-from-blog-content">
                    <div class="row">
      
                      @foreach ($galeri as $item)
                      <div style="margin-top: 30px" class="col-md-4 col-sm-4">
                        <article class="mu-blog-single-item">
                          <figure class="mu-blog-single-img">
                            <a href="{{ url('/galeri-detail/'.$item->id) }}"><img src="{{URL::asset('/uploads/'.$item->gambar)}}" alt="img"></a>
                            <figcaption class="mu-blog-caption">
                              <h3><a href="{{ url('/galeri-detail/'.$item->id) }}">{{ $item->nama }}</a></h3>
                            </figcaption>
                          </figure>
                          <div class="mu-blog-meta">
                           
                            <a href="{{ url('/galeri-detail/'.$item->id) }}">{{ $item->created_at }}</a>
                            <span><i class="fa fa-file-image-o"></i>{{ $item->jumlah_foto }} foto</span>
                          </div>
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
  </section>

@endsection
