<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Paud | Junior</title>

  @include('frontend.layouts.head')

  </head>
  <body> 

  <!--START SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#">
      <i class="fa fa-angle-up"></i>      
    </a>
  <!-- END SCROLL TOP BUTTON -->

  @include('frontend.layouts.navbar')
  
  @yield('content')


  @include('frontend.layouts.footer')

  @include('frontend.layouts.footer-script')

  </body>
</html>