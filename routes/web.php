<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\PegawaiController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

//tugas1no4
Route::get('/blog', function () {
    return 'Halo Halo';
});

//aktifitas2---1.membuat route
Route::get('/buku', function(){
    return 'STIKI Perpus';
});

//aktifitas2---2.Membuat Route dengan parameter
Route::get('/buku/{nomer}', function($nomer){
    return 'STIKI Perpus ' . $nomer;
});

//aktifitas2---3.Membuat Route dengan parameter opsional
Route::get('/buku/{nomer?}', function($nomer = null){
    return 'STIKI Perpus' . $nomer;
});

//aktifitas2---4.Menambah awalan dari route
Route::prefix('admin')->get('/buku/{nomer?}', function($nomer = null){
    return 'STIKI Perpus' . $nomer;
});

//tugas2---1
Route::get('/anggota', function(){
    return 'Halaman Anggota';
});

//tugas2---1.1
Route::get('/anggota/{nrp}', function ($nrp = null) {
    return 'Halaman Anggota dengan nrp ' . $nrp;
});

//aktifitas3---1.b. Tambahkan route didalam web.php yang berada di folder routes
Route::get('/halo', function () {
    return view('halo', ['nama' => 'Mahdi Romzuz Zaki']);
});



// aktifitas3---2.g. Tambahkan route di web.php yang mengarah ke masing-masing view di dalam folder blog
Route::get('/home', function () {
    return view('blog/home', ['nama' => 'Mahdi Romzuz Zaki']);
});
Route::get('/kontak', function () {
    return view('blog/kontak');
});
Route::get('/tentang', function () {
    return view('blog/tentang');
});

// tugas3---2
Route::get('/tabel','App\Http\Controllers\BukuController@index');

// Responsi1---2
Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');

// Aktifitas Modul 5
Route::get('/tambah', 'App\Http\Controllers\BukuController@create');

Route::post('/insert', 'App\Http\Controllers\BukuController@insert');

// Aktifitas Modul 6
//route dasar yang memastikan jika belum melakukan login maka langsung diarahkan ke halaman login
Route::get('/', function () {
    if (Auth::check()) {
        return view('blog/home', ['nama' => 'Mahdi Romzuz Zaki']);
    } else {
        return view('auth/login');
    }
});
//route mengarah ke halaman login di views/auth/login.blade.php
Route::get('/login', function () {
    return view('auth/login');
});
//route untuk proses login
Route::post('/authenticate', 'App\Http\Controllers\AuthController@authenticate');
//route untuk logout
Route::get('/logout',[AuthController::class, 'logout'])->name('logout');

// Aktifitas Modul 7
// Route untuk edit data
Route::get('/blog/edit/{id}', 'App\Http\Controllers\BukuController@edit');

// Route untuk submit edit data
Route::post('/blog/update/{id}', 'App\Http\Controllers\BukuController@update');

//Aktifitas 8 - Route untuk delete data
Route::delete('/blog/delete/{id}', [BukuController::class, 'delete'])->name('blog.delete');



//Responsi 2
Route::get('/pegawai/edit/{id}', 'App\Http\Controllers\PegawaiController@edit');
Route::get('/pegawai/delete/{id}', 'App\Http\Controllers\PegawaiController@delete');
Route::post('/editpegawai', 'App\Http\Controllers\PegawaiController@update');
Route::get('/tambahpegawai', 'App\Http\Controllers\PegawaiController@create');
Route::post('/insertpegawai', 'App\Http\Controllers\PegawaiController@insert');
