<?php

//menggunakan / mengimput LatihanController
use App\Http\Controllers\LatihanController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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

Route::get('/halaman-2', function () {
    return ('halaman 2');
});

Route::get('/halaman-3/profile', function () {
    return ('halaman profile 3');
});

Route::get('/halaman/{nama}/jenis-kelamin/{jk}', function ($nama,$jk) {
    return ('halaman profile  ' .$nama. ' dengan jenis kelamin : ' .$jk);
});

Route::get('/halaman/{nama?}', function ($nama = 'data belum di isi') {
    return ('halaman profile  ' .$nama);
});

Route::get('profile', function () {
    return view('profile');
});

Route::get('latihan/{nama}', function ($nama) {
    return view('latihan', compact('nama',));
});

//pemanggilan controller
Route::get('latihan' , [LatihanController::class, 'perkenalan']);
Route::get('Latihan/{nama?}/{alamat?}/{umur?}', [LatihanController::class, 'perkenalan2']);

Route::get('siswa/', [LatihanController::class,'siswa']);

Route::get('kampus/', [LatihanController::class,'kampus']);

Route::get('televisi/', [LatihanController::class,'tv']);

Route::get('belanja/', [LatihanController::class,'belanja']);

Route::get('siswa2', [LatihanController::class, 'nilai_siswa']);

// route post
Route::get('post',[PostController::class, 'tampil']);

Route::get('post/{id}',[PostController::class, 'search']);

Route::get('post/judul/{title}',[PostController::class, 'search_title']);
Route::get('post/edit/{id}/{title}/{content}',[PostController::class, 'edit']);


