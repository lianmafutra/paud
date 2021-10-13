   <!-- Favicon -->
   <link rel="shortcut icon" href="{{ URL::asset('template/assets/img/favicon.ico')}}" type="image/x-icon">
  <!-- Font awesome -->
  <link href="{{ URL::asset('template/assets/css/font-awesome.css')}}" rel="stylesheet">
  <!-- Bootstrap -->
  <link href="{{ URL::asset('template/assets/css/bootstrap.css')}}" rel="stylesheet">   
  <!-- Slick slider -->
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('template/assets/css/slick.css')}}">          
  <!-- Fancybox slider -->
  <link rel="stylesheet" href="{{ URL::asset('template/assets/css/jquery.fancybox.css')}}" type="text/css" media="screen" /> 
  <!-- Theme color -->
  <link id="switcher" href="{{ URL::asset('template/assets/css/theme-color/default-theme.css')}}" rel="stylesheet">          

  <!-- Main style sheet -->
  <link href="{{ URL::asset('template/assets/css/style.css')}}" rel="stylesheet">    

  <!-- Google Fonts -->
  <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,300,300italic,500,700' rel='stylesheet' type='text/css'>


@stack('css')