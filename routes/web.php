<?php

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
Route::get('/home', function () {
    return view('home');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/formpengaduan', function () {
    return view('formpengaduan');
});
Route::get('/index', function () {
    return view('system/index');
});
Route::get('/verifikasipengaduan', function () {
    return view('system/verifikasipengaduan');
});
Route::get('/data_petugas', function () {
    return view('system/data_petugas');
});
Route::get('/data_masyarakat', function () {
    return view('system/data_masyarakat');
});
Route::get('/data_pengaduan', function () {
    return view('system/data_pengaduan');
});
Route::get('/data_tanggapan', function () {
    return view('system/data_tanggapan');
});
Route::get('/laporan_petugas', function () {
    return view('system/laporan_petugas');
});
Route::get('/laporan_masyarakat', function () {
    return view('system/laporan_masyarakat');
});
Route::get('/laporan_pengaduan', function () {
    return view('system/laporan_pengaduan');
});
Route::get('/laporan_tanggapan', function () {
    return view('system/laporan_tanggapan');
});
Route::get('/loginUser','AuthController@getloginUser');
Route::post('/loginUser','AuthController@postloginUser');