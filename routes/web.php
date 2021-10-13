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
Route::get('pengaturan', 'AdminController@SettingNoWhatsapp');
Route::post('pengaturan/update_nomor_wa', 'AdminController@UpdateNoWhatsapp');
Route::get('/', 'AdminController@index');

    Route::group(['middleware' => 'auth', 'prefix' => 'user_management',], function () {
        Route::group(['prefix' => 'user',], function () {
            Route::get('/', 'UserController@index')->name('user.index');
            Route::post('password', 'UserController@ubahPassword')->name('user.updatepass');
         
        }); 
    });
  
});

Route::get('/', 'Frontend\\HomeController@index');