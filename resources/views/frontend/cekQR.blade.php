<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>QR pendaftaran</title>
</head>
<body>

@if ($pendaftaran!=null)
<h2>Hasil : Kode Pendaftaran terverifikasi</h2>
<div class="row">
    <div class="col-md-4">
        <div class="card">
            <div class="card-header bg-secondary">
                <h3 style="padding-top: 10px" class="card-title">
                    <i class="fa fa-user mr-1"></i>Data Siswa</h3>
            </div>
            <div  style="font-size: 15px" class="card-body">
                Nama Lengkap : {{ $pendaftaran->nama_lengkap }} <br>
                Nama Panggilan : {{ $pendaftaran->nama_panggilan }} <br>
                Tempat Lahir : {{ $pendaftaran->tempat_lahir }} <br>
                Tanggal Lahir : {{ $pendaftaran->tanggal_lahir }} <br>
                anak_ke : {{ $pendaftaran->anak_ke }} <br>
                Jenis Kelamin : {{ $pendaftaran->jenis_kelamin }} <br>
                Agama : {{ $pendaftaran->agama }} <br>
                Jumlah Saudara : {{ $pendaftaran->jumlah_saudara }} <br>
                Status Dalam Keluarga : {{ $pendaftaran->status_dalam_keluarga }} <br>
                Kewarganegaraan : {{ $pendaftaran->kewarganegaraan }} <br>
                Alamat : {{ $pendaftaran->alamat }} <br>
            </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
            <div class="card-header bg-secondary">
                <h3 style="padding-top: 10px" class="card-title">
                    <i class="fa fa-user mr-1"></i>Data Ayah</h3>
              
            </div>
            <div style="font-size: 15px" class="card-body">
                Nama Lengkap : {{ $pendaftaran->nama_ayah }} <br>
                Status : {{ $pendaftaran->status_ayah }} <br>
                Tempat Lahir : {{ $pendaftaran->tempat_lahir_ayah }} <br>
                Tanggal Lahir : {{ $pendaftaran->tanggal_lahir_ayah }} <br>
                Agama : {{ $pendaftaran->agama_ayah }} <br>
                Kewarganegaraan : {{ $pendaftaran->kewarganegaraan_ayah }} <br>
                Pekerjaan : {{ $pendaftaran->pekerjaan_ayah }} <br>
                Pendidikan : {{ $pendaftaran->pendidikan_ayah }} <br>
                Alamat : {{ $pendaftaran->alamat_ayah }} <br>
                No Hp : {{ $pendaftaran->no_hp_ayah }} <br>
                Gaji Perbulan: {{ $pendaftaran->gaji_perbulan_ayah }} <br>
            </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
            <div class="card-header bg-secondary">
                <h3 style="padding-top: 10px" class="card-title">
                    <i class="fa fa-user mr-1"></i>Data Ibu</h3>
              
            </div>
            <div style="font-size: 15px" class="card-body">
                Nama Lengkap : {{ $pendaftaran->nama_ibu }} <br>
                Status : {{ $pendaftaran->status_ibu }} <br>
                Tempat Lahir : {{ $pendaftaran->tempat_lahir_ibu }} <br>
                Tanggal Lahir : {{ $pendaftaran->tanggal_lahir_ibu }} <br>
                Agama : {{ $pendaftaran->agama_ibu }} <br>
                Kewarganegaraan : {{ $pendaftaran->kewarganegaraan_ibu }} <br>
                Pekerjaan : {{ $pendaftaran->pekerjaan_ibu }} <br>
                Pendidikan : {{ $pendaftaran->pendidikan_ibu }} <br>
                Alamat : {{ $pendaftaran->alamat_ibu }} <br>
                No Hp : {{ $pendaftaran->no_hp_ibu }} <br>
                Gaji Perbulan: {{ $pendaftaran->gaji_perbulan_ibu }} <br>

            </div>
        </div>
      </div>
</div>

@else
Hasil : kode pendaftaran tidak ditemukan
@endif

</body>
</html>