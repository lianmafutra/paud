@extends('layouts.master')

<meta name="csrf-token" content="{{ csrf_token() }}">


@section('content')
<div style="padding-top: 20px" class="row">

  <section class="col-lg-12 ">

    <div class="card">
      <div class="card-header">
        <h3 style="padding-top: 10px" class="card-title">
          <i class="fas fa-chart-pie mr-1"></i>
         Dashboard
        </h3>
   

      </div>
      <div class="card-body">
          <h5 style="text-align: center" >Selamat Datang di halaman admin Paud MECCAZIA JUNIOR
          </h5>

      </div>
    </div>

  
  </section>
</div>


@endsection
