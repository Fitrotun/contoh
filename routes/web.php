<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FakultasController;
use App\Http\Controllers\MahasiswaController;

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
    return view('login', ["title"=>"Login"]);
});

Route::get('/tentang', function () {
    return view('tentang', ["title"=>"Tentang"]);
});

Route::get('/home', function () {
    return view('home', ["title"=>"Home"]);
});

//tampil data fakultas

Route::get('/fakultas', function () {

    $ArrFakultas = ["Fakultas Teknik dan Ilmu Komputer", "Fakultas Ilmu Tarbiyah dan Keguruan", "Fakultas Ilmu Kesehatan", "Fakultas Syariah dan Hukum", "Fakultas Ekomoni dan Bisnis", "Fakultas Bahasa dan Sastra", "Fakultas Komunikasi dan Sosial Politik"];
    
    return view('fakultas', ["namafakultas" => $ArrFakultas, "title"=>"Fakultas"]);
});

//tampil data mahasiswa

Route::get('/mahasiswa', [MahasiswaController::class,'tampil']);

Route::fallback(function () {
    return '404 | SORRY, Halaman  tidak tersedia';
});

