<?php
 
use Illuminate\Support\Facades\Route; 
 
Route::get('/', 'AuthController@showFormLogin')->name('login');
Route::get('login', 'AuthController@showFormLogin')->name('login');
Route::post('login', 'AuthController@login');
Route::get('register', 'AuthController@showFormRegister')->name('register');
Route::post('register', 'AuthController@register');
Route::get('home', 'HomeController@index');

Route::get('homeadmin','HomeController@admin');
Route::get('kuota1','HomeController@kuota1');

Route::get('/homeadmin/hapus','HomeController@hapus');

Route::post('/ibadah1', 'HomeController@ibadah1');
Route::post('/ibadah2', 'HomeController@ibadah2');
Route::post('/ibadah3', 'HomeController@ibadah3');

Route::get('native/login','AuthNativeController@index');
Route::post('native/login','AuthNativeController@auth');

 
Route::group(['middleware' => 'auth'], function () {
Route::get('home', 'HomeController@index')->name('home');
Route::get('logout', 'AuthController@logout')->name('logout');    
});

Route::get('/nativeauth', function () {
    return view('nativeauth');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/qrcode', 'HomeController@QrCode'); 
Route::get('/tampilanscanqrcode', function () {
    return view('tampilanscanqrcode');
});


Route::get('qr-code-g', function () {
    \QrCode::size(500)
            ->format('png')
            ->generate('/tampilanscanqrcode', public_path('images/qrcode.png'));
  return view('tampilanscanqrcode');
});


