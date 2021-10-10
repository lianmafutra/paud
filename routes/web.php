<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes();
Route::get('/', function () {
    return "website frontend";
    // if (Auth::user()) {
    //     return redirect('admin');
    // } else {
    //     return redirect('/login');
    // }
});

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::group(['middleware' => 'auth', 'prefix' => 'admin',], function () {

Route::get('/', 'AdminController@index');

Route::post('siswa/filepondUpload', 'SiswaController@filepondUpload');
Route::delete('siswa/filepondCancel', 'SiswaController@filepondCancel');
Route::resource('siswa', 'SiswaController');

    Route::group(['middleware' => 'auth', 'prefix' => 'user_management',], function () {
        Route::group(['prefix' => 'user',], function () {
            Route::get('/', 'UserController@index')->name('user.index');
            Route::post('password', 'UserController@ubahPassword')->name('user.updatepass');
         
        }); 
    });
  

});