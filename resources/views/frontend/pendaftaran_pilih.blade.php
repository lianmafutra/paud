@extends('frontend.layouts.master')
<meta name="csrf-token" content="{{ csrf_token() }}">
<style>

body {
        padding-bottom: 40px;
      }

		.panel.price,
		.panel.price>.panel-heading{
			border-radius:0px;
			 -moz-transition: all .3s ease;
			-o-transition:  all .3s ease;
			-webkit-transition:  all .3s ease;
			box-shadow: 0px 0px 30px rgba(0,0,0, .2);
		}
		.panel.price:hover{
			box-shadow: 0px 0px 30px rgba(0,0,0, .2);
		}
		.panel.price:hover>.panel-heading{
			box-shadow: 0px 0px 30px rgba(0,0,0, .2) inset;
		}
		
				
		.panel.price>.panel-heading{
			box-shadow: 0px 5px 0px rgba(50,50,50, .2) inset;
			text-shadow:0px 3px 0px rgba(50,50,50, .6);
		}
			
		.price .list-group-item{
			border-bottom-:1px solid rgba(250,250,250, .5);
		}
		
		.panel.price .list-group-item:last-child {
			border-bottom-right-radius: 0px;
			border-bottom-left-radius: 0px;
		}
		.panel.price .list-group-item:first-child {
			border-top-right-radius: 0px;
			border-top-left-radius: 0px;
		}
		
		.price .panel-footer {
			color: #fff;
			border-bottom:0px;
			background-color:  rgba(0,0,0, .1);
			box-shadow: 0px 3px 0px rgba(0,0,0, .3);
		}
		
		
		.panel.price .btn{
			box-shadow: 0 -1px 0px rgba(50,50,50, .2) inset;
			border:0px;
		}
		
	/* green panel */
	
		
		.price.panel-green>.panel-heading {
			color: #fff;
			background-color: #57AC57;
			border-color: #71DF71;
			border-bottom: 1px solid #71DF71;
		}
		
			
		.price.panel-green>.panel-body {
			color: #fff;
			background-color: #65C965;
		}
				
		
		.price.panel-green>.panel-body .lead{
				text-shadow: 0px 3px 0px rgba(50,50,50, .3);
		}
		
		.price.panel-green .list-group-item {
			color: #333;
			background-color: rgba(50,50,50, .01);
			font-weight:600;
			text-shadow: 0px 1px 0px rgba(250,250,250, .75);
		}
		
		/* blue panel */
	
		
		.price.panel-blue>.panel-heading {
			color: #fff;
			background-color: #608BB4;
			border-color: #78AEE1;
			border-bottom: 1px solid #78AEE1;
		}
		
			
		.price.panel-blue>.panel-body {
			color: #fff;
			background-color: #73A3D4;
		}
				
		
		.price.panel-blue>.panel-body .lead{
				text-shadow: 0px 3px 0px rgba(50,50,50, .3);
		}
		
		.price.panel-blue .list-group-item {
			color: #333;
			background-color: rgba(50,50,50, .01);
			font-weight:600;
			text-shadow: 0px 1px 0px rgba(250,250,250, .75);
		}
		
		/* red price */
		
	
		.price.panel-red>.panel-heading {
			color: #fff;
			background-color: #D04E50;
			border-color: #FF6062;
			border-bottom: 1px solid #FF6062;
		}
		
			
		.price.panel-red>.panel-body {
			color: #fff;
			background-color: #EF5A5C;
		}
		
		
		
		
		.price.panel-red>.panel-body .lead{
				text-shadow: 0px 3px 0px rgba(50,50,50, .3);
		}
		
		.price.panel-red .list-group-item {
			color: #333;
			background-color: rgba(50,50,50, .01);
			font-weight:600;
			text-shadow: 0px 1px 0px rgba(250,250,250, .75);
		}
		
		/* grey price */
		
	
		.price.panel-grey>.panel-heading {
			color: #fff;
			background-color: #6D6D6D;
			border-color: #B7B7B7;
			border-bottom: 1px solid #B7B7B7;
		}
		
			
		.price.panel-grey>.panel-body {
			color: #fff;
			background-color: #808080;
		}
		

		
		.price.panel-grey>.panel-body .lead{
				text-shadow: 0px 3px 0px rgba(50,50,50, .3);
		}
		
		.price.panel-grey .list-group-item {
			color: #333;
			background-color: rgba(50,50,50, .01);
			font-weight:600;
			text-shadow: 0px 1px 0px rgba(250,250,250, .75);
		}
		
		/* white price */
		
	
		.price.panel-white>.panel-heading {
			color: #333;
			background-color: #f9f9f9;
			border-color: #ccc;
			border-bottom: 1px solid #ccc;
			text-shadow: 0px 2px 0px rgba(250,250,250, .7);
		}
		
		.panel.panel-white.price:hover>.panel-heading{
			box-shadow: 0px 0px 30px rgba(0,0,0, .05) inset;
		}
			
		.price.panel-white>.panel-body {
			color: #fff;
			background-color: #dfdfdf;
		}
				
		.price.panel-white>.panel-body .lead{
				text-shadow: 0px 2px 0px rgba(250,250,250, .8);
				color:#666;
		}
		
		.price:hover.panel-white>.panel-body .lead{
				text-shadow: 0px 2px 0px rgba(250,250,250, .9);
				color:#333;
		}
		
		.price.panel-white .list-group-item {
			color: #333;
			background-color: rgba(50,50,50, .01);
			font-weight:600;
			text-shadow: 0px 1px 0px rgba(250,250,250, .75);
		}
</style>
@section('content')
<section id="mu-page-breadcrumb">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-page-breadcrumb-area">
            <h2>Pendaftaran</h2>
            <ol class="breadcrumb">
             <li><a href="{{ url('/') }}">Home</a></li>            
             <li class="active">Pendaftaran</li>
           </ol>
          </div>
        </div>
      </div>
    </div>
  </section>

  
  <!-- Modal -->
  <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
	<div class="modal-dialog" role="document">
	  <div class="modal-content">
		<div class="modal-header">
		  <h5 class="modal-title" id="exampleModalLongTitle">Paket Pilihan Biaya TPA Junior</h5>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body">
			<p><strong>A. Paket Bulanan 1 (senin - sabtu) pukul 07:00 - 13.00</strong></p>

			<ul>
				<li>pendaftaran : Rp. 100.000</li>
				<li>SPP/bulan : Rp. 400.000</li>
			</ul>
			
			<p>&nbsp;</p>
			
			<p><strong>B.&nbsp;Paket Bulanan 2 (senin - sabtu) pukul 07:00 - 16.00</strong></p>
			
			<ul>
				<li>pendaftaran : Rp. 100.000</li>
				<li>SPP/bulan : Rp. 550.000</li>
			</ul>
			
			<p>&nbsp;</p>
			
			<ul>
			</ul>
		</div>
		<div class="modal-footer">
		  <button aria-haspopup="true" aria-expanded="false" type="button" class="btn btn-secondary  dropdown-toggle" data-dismiss="modal">Tutup</button>
		  {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
		</div>
	  </div>
	</div>
  </div>
  <section id="mu-about-us">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-about-us-area">
            <div class="row">
              <div class="col-lg-12 col-md-12">
                <div class="mu-title">
                  <h3>Pilih Jenis Pendaftaran</h3><br>
                </div>
                <div style="margin-top: 20px" class="mu-about-us-left">
                  <div class="container">
                    <div class="row">
                            <div class="col-md-4">
                          
                            <!-- PRICE ITEM -->
                            <div class="panel price panel-red">
                              <div class="panel-heading  text-center">
                           <h3>KB (Kelompok Bermain)</h3>
                              </div>
                              <ul style="margin-top:10px">
                                <li>Usia : 2-4 Tahun </li>
                                <li>3 kali Seminggu</li>
                                <li>Waktu Belajar Pagi</li>
                                <li>SPP : Rp. 40.000</li>
                                <li>Uang Baju Seragam & Alat Tulis: Rp. 350.000</li>
                              </ul>  
                            
                              <div class="panel-footer">
                                <a class="btn btn-lg btn-block btn-danger" href="{{ url('pendaftaran/proses/kb') }}">Daftar</a>
                              </div>
                            </div>
                            <!-- /PRICE ITEM -->
                            
                            
                          </div>
                          
                          <div class="col-md-4">
                            
                            <!-- PRICE ITEM -->
                            <div class="panel price panel-blue">
                              <div class="panel-heading arrow_box text-center">
                                <h3>TK (Taman Kanak-Kanak)</h3>  
                              </div>
                              <ul style="margin-top:10px">
                                <li>Usia : 4-6 Tahun </li>
                                <li>3 kali Seminggu</li>
                                <li>Waktu Belajar Pagi</li>
                                <li>SPP : Rp. 65.000</li>
                                <li>Uang Baju Seragam & Alat Tulis: Rp. 700.000</li>
                                <li>Baju : Putih biru, Batik, Olahraga, Polisi</li>
                              </ul>  
                              <div class="panel-footer">
                                <a class="btn btn-lg btn-block btn-info" href="{{ url('pendaftaran/proses/tk') }}">Daftar</a>
                              </div>
                            </div>
                            <!-- /PRICE ITEM -->
                            
                            
                          </div>
                          
                          <div class="col-md-4">
                          
                            <!-- PRICE ITEM -->
                            <div class="panel price panel-green">
                              <div class="panel-heading arrow_box text-center">
                              <h3>TPA (Taman Penitipan Anak)</h3>
                              </div>
                              <div style="margin: 20px" class="col-12">
                                <p>Tedapat 6 Paket Pilihan Biaya TPA Junior : </p>
                                <a data-toggle="modal" data-target="#exampleModalLong"  class="btn btn-sm  btn-success" href="#">Lihat Detail Paket Biaya</a>
                            
                              </div>
                              
                           
                            
                              <div class="panel-footer">
                                <a class="btn btn-lg btn-block btn-success" href="{{ url('pendaftaran/proses/tpa') }}">Daftar</a>
                              </div>
                            </div>
                            <!-- /PRICE ITEM -->
                            
                            
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
  <section id="mu-about-us">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-about-us-area">           
            <div class="row">
              <div class="col-lg-6 col-md-6">
                <div class="mu-about-us-left">
                  <!-- Start Title -->
                
                  <!-- End Title -->
                 
                </div>
              </div>
            
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
