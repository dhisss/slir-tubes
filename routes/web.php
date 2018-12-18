<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/daftar', function () {
    return view('daftar');
});

Route::get('/homepage', function () {
    return view('homepage');
});

Route::get('/logins', function () {
    return view('logins');
});

Route::get('/loginz', function () {
    return view('loginz');
});

Route::get('/daftarlaporan', function () {
    return view('daftarlaporan');
});

Route::get('/tulislaporan', function () {
    return view('tulislaporan');
});

Route::get('/berhasil_login', function () {
    return view('berhasil_login');
});

Route::get('/logout', function () {
    return view('logout');
});

Route::get('/kode_laporan', function () {
    return view('kode_laporan');
});


Route::get('/belumvld', function () {
    return view('belumvld');
});

Route::get('/daftarlaporan(2)', function () {
    return view('daftarlaporan(2)');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/laporanadmin', function () {
    return view('laporanadmin');    
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/rekap', function () {
    return view('rekap');
});

Route::get('/sudahvld', function () {
    return view('sudahvld');
});
Route::get('/tidakvld', function () {
    return view('tidakvld');
});

Route::get('/belumvld', function () {
    return view('belumvld');
});

Route::get('/prosesvld', function () {
    return view('prosesvld');
});

Route::get('/selesaivld', function () {
    return view('selesaivld');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
