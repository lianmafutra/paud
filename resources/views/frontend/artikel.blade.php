@extends('frontend.layouts.master')
<meta name="csrf-token" content="{{ csrf_token() }}">

@section('content')
<section id="mu-page-breadcrumb">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="mu-page-breadcrumb-area">
          <h2>Artikel</h2>
          <ol class="breadcrumb">
           <li><a href="#">Home</a></li>            
           <li class="active">Artikel</li>
         </ol>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="mu-from-blog">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
      
           
            <!-- end title -->  
            <!-- start from blog content   -->
            <div class="mu-from-blog-content">
              <div class="row">

                @foreach ($berita as $item)
                <div style="margin-top: 30px" class="col-md-4 col-sm-4">
                  <article class="mu-blog-single-item">
                    <figure class="mu-blog-single-img">
                      <a href="#"><img src="{{URL::asset('/uploads/'.$item->poster)}}" alt="img"></a>
                      <figcaption class="mu-blog-caption">
                        <h3><a href="#">{{ $item->judul }}</a></h3>
                      </figcaption>                      
                    </figure>
                    <div class="mu-blog-meta">
                      <a href="#">By Admin</a>
                      <a href="#">{{ $item->created_at }}</a>
                      <span><i class="fa fa-comments-o"></i>87</span>
                    </div>
                    <div class="mu-blog-description">
                      {{-- <p>{{ \Illuminate\Support\Str::limit($item->isi, 150, $end='...') }}</p> --}}
                      <a class="mu-read-more-btn" href="#">Selengkapnya</a>
                    </div>
                  </article>
                </div>
                @endforeach
              </div>
            </div>     
            <!-- end from blog content   -->   
         
        </div>
      </div>
    </div>
  </section>

@endsection
