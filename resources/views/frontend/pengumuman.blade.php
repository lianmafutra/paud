@extends('frontend.layouts.master')
<meta name="csrf-token" content="{{ csrf_token() }}">

@section('content')
<section id="mu-page-breadcrumb">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-page-breadcrumb-area">
            <h2>Pengumuman Seleksi</h2>
            <ol class="breadcrumb">
             <li><a href="{{ url('/') }}">Home</a></li>
             <li class="active">Pengumuman Seleksi</li>
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
                <div style=" text-align: center " class="mu-about-us-left">
                 <h4>
                   <!-- CSS Code: Place this code in the document's head (between the <head> -- </head> tags) -->
<style>
  table.customTable {
    width: 50%;
    background-color: #FFFFFF;
    border-collapse: collapse;
    border-width: 1px;
    border-color: #000000;
    border-style: solid;
    color: #000000;
    font-size: 16px;
  }

  table.customTable td, table.customTable th {
    border-width: 1px;
    border-color: #000000;
    border-style: solid;
    padding: 5px;
  }

  table.customTable thead {
    background-color: #d1d1d1;
  }


  .button2 {
		display: inline-block;
		padding: 10px 10px;
		font-size: 14px;
		cursor: pointer;
		text-align: center;
		text-decoration: none;
		outline: none;
		color: #fff;
		background-color: #4CAF50;
		border: none;
		border-radius: 10px;
		box-shadow: 0 3px #999;
	}

	.button2:hover {
		background-color: #3e8e41
	}

	.button2:active {
		background-color: #3e8e41;
		box-shadow: 0 5px #666;
		transform: translateY(4px);
	}

  </style>

 <span style="line-height: 30px">Hasil Seleksi Penerimaan Siswa Baru KB (Kelompok Bermain) dan TK (Taman Kanak-Kanak) <br>Tahun Ajaran {{ $tahun_ajaran->first()->priode_tahun }} akan di umumkan pada tanggal {{ $tahun_ajaran->first()->jadwal_pengumuman }}</span>
 <br>
 <br>
 <br>
 <br>
 <center>
  <table class="customTable">
    <thead>
      <tr>
        <th  style="text-align: center">No</th>
        <th  style="text-align: center" >Tahun Ajaran</th>
        <th  style="text-align: center">Hasil</th>
      </tr>
    </thead>

    <tbody>
      @foreach ($tahun_ajaran as $item => $value)
      <tr>
        <td  style="text-align: center">{{ $item+1 }}</td>
        <td  style="text-align: center">{{ $value->priode_tahun }} ( {{ $value->priode_bulan }} )</td>

        @if ($value->status_pengumuman=="selesai")
        <td style="text-align: center"><a href="{{ url('pendaftaran/pengumuman/detail/'.$value->id) }}"><button style="bac" class="button2">Lihat Hasil</button></a></td>
        @else
        <td style="text-align: center"><a href=""><button disabled style="" class="">Menunggu</button></a></td>
        @endif
      
      </tr>
      @endforeach

    </tbody>
  </table>
 </center>

                </h4>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
