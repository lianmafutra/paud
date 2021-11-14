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
             <li><a href="{{ url('/') }}">Home</a></li>
             <li class="active">Artikel</li>
           </ol>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="mu-course-content">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-course-content-area">
             <div class="row">
               <div class="col-md-12">
                 <!-- start course content container -->
                 <div class="mu-course-container mu-blog-single">
                   <div class="row">
                     <div class="col-md-12">
                       <article class="mu-blog-single-item">
                        <figcaption style="padding-top: 40px" class="mu-blog-caption">
                            <h2><a style="font-weight: bold" href="#">{{ $berita->judul }}</a></h2>
                          </figcaption>
                          <div class="mu-blog-meta">
                            {{-- <a href="#">By Admin</a> --}}
                            <a href="#">{{ $berita->created_at }}</a>
                            {{-- <span><i class="fa fa-comments-o"></i>87</span> --}}
                          </div>
                         <figure class="mu-blog-single-img">
                           <a href="#"><img alt="img" src="{{URL::asset('/uploads/'.$berita->poster)}}"></a>

                         </figure>

                         <div style="margin-top: 30px" class="mu-blog-description">
                            {!! $berita->isi !!}
                         </div>

                         <!-- End blog social share -->
                       </article>
                     </div>
                   </div>
                 </div>
                 <div class="row">
                   <div class="col-md-12">

                   </div>
                 </div>
                </div>
               <div class="col-md-3">
                 <!-- start sidebar -->
                 <aside class="mu-sidebar">




                   <!-- end single sidebar -->
                 </aside>
                 <!-- / end sidebar -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


@endsection
