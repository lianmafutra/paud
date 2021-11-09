<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes();
// Route::get('/', function () {
//     return "website frontend";
//     // if (Auth::user()) {
//     //     return redirect('admin');
//     // } else {
//     //     return redirect('/login');
//     // }
// });

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::group(['middleware' => 'auth', 'prefix' => 'admin',], function () {

Route::resource('berita', 'BeritaController');
Route::resource('slider', 'SliderController');
Route::resource('galeri-album', 'GaleriAlbumController');
Route::post('galeri/destroy-multi', 'GaleriController@destroyMulti');
Route::resource('galeri', 'GaleriController');
Route::get('dashboard', 'DashboardController@index');
Route::group(['prefix' => 'halaman',], function () {
    Route::get('visi-misi', 'DataPaudController@indexVisiMisi');
    Route::post('visi-misi/update', 'DataPaudController@updateVisiMisi');

    Route::get('latar-belakang', 'DataPaudController@indexLatarBelakang');
    Route::post('latar-belakang/update', 'DataPaudController@updateLatarBelakang');
});

Route::get('pengaturan', 'DataPaudController@index');
Route::post('pengaturan/update_nomor_wa', 'DataPaudController@UpdateNoWhatsapp');
Route::get('/', 'AdminController@index');

    Route::group(['middleware' => 'auth', 'prefix' => 'user_management',], function () {
        Route::group(['prefix' => 'user',], function () {
            Route::get('/', 'UserController@index')->name('user.index');
            Route::post('password', 'UserController@ubahPassword')->name('user.updatepass');

        });
    });

Route::get('pendaftaran', 'PendaftaranController@index');
Route::post('pendaftaran/destroy/{id}', 'PendaftaranController@destroy');
Route::get('pendaftaran/detail/{id}', 'PendaftaranController@detail');
Route::post('pendaftaran/update-status/', 'PendaftaranController@updateStatus');

Route::resource('tahun-ajaran', 'TahunAjaranController');

});
Route::group(['prefix' => 'profil',], function () {
    Route::get('/visi-misi', 'Frontend\\HomeController@visiMisi');
    Route::get('/latar-belakang', 'Frontend\\HomeController@latarBelakang');
    Route::get('/struktur-organisasi', 'Frontend\\HomeController@strukturOrganisasi');
});
Route::get('/', 'Frontend\\HomeController@index');

Route::get('/artikel/detail/{id}', 'Frontend\\HomeController@artikelDetail');
Route::get('/artikel', 'Frontend\\HomeController@artikel');


Route::get('/galeri', 'Frontend\\HomeController@galeri');
Route::get('/galeri/detail/{id}', 'Frontend\\HomeController@galeriDetail');

Route::get('/galeri/detail/{id}', 'Frontend\\HomeController@galeriDetail');

Route::group(['prefix' => 'pendaftaran',], function () {
    Route::get('pilih', 'Frontend\\PendaftaranController@pilihPendaftaran');
    Route::get('proses/{jenis}', 'Frontend\\PendaftaranController@prosesPendaftaran');
    Route::get('proses/{jenis}/{paket_tpa}', 'Frontend\\PendaftaranController@prosesPendaftaran');
    Route::post('kirim', 'Frontend\\PendaftaranController@kirimPendaftaran');
    Route::get('pengumuman', 'Frontend\\PendaftaranController@pengumuman');
    Route::get('pengumuman/detail/{id}', 'Frontend\\PendaftaranController@pengumumanDetail');
});
