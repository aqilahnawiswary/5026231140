<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\LaptopDBController;
use App\Http\Controllers\PageCounterDBController;
use App\Http\Controllers\KaryawanDBController;
use App\Http\Controllers\KeranjangDBController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\MykaryawanController;
//sama dengan import java.io.*

Route::get('/', function () {
    return view('welcome');
});

Route::get('dosen',[DosenController::class,'index']);
Route::get('welcome',[DosenController::class,'welcome']);

//Route::get('/pegawai/{nama}',[PegawaiController::class,'index']);
Route::get('/formulir',[PegawaiController::class,'formulir']);
Route::post('/formulir/proses',[PegawaiController::class,'proses']);

// route blog
Route::get('/blog', [BlogController::class,'home']);
Route::get('/blog/tentang', [BlogController::class,'tentang']);
Route::get('/blog/kontak', [BlogController::class,'kontak']);

Route::get('halo', function () {
	return "<h1>Halo, Selamat datang di tutorial laravel www.malasngoding.com</h1>";
});

// Route::get('blog', function () {
// 	return view('blog');
// });

Route::get('frontend', function () {
	return view('frontend');
});

Route::get('myfirstpage', function () {
	return view('myfirstpage');
});

Route::get('bootstrap1', function () {
	return view('bootstrap1');
});

Route::get('templateb4', function () {
	return view('templateb4');
});

Route::get('mysecondpage', function () {
	return view('mysecondpage');
});

Route::get('mythirdpage', function () {
	return view('mythirdpage');
});

Route::get('mobilelayout1', function () {
	return view('mobilelayout1');
});

Route::get('olip', function () {
	return view('olip');
});

Route::get('js1', function () {
	return view('js1');
});

Route::get('latihanjs', function () {
	return view('latihanjavascript');
});

Route::get('validasi1', function () {
	return view('validasi1');
});

Route::get('template', function () {
	return view('template');
});

Route::get('index', function () {
	return view('index_ets');
});

//route pegawaiDB
Route::get('/pegawai', [PegawaiDBController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiDBController::class, 'store']); //jika form dikirim, route ini akan dijalankan
Route::get('/pegawai/edit/{id}',[PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update',[PegawaiDBController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiDBController::class, 'hapus']);

Route::get('/pegawai/cari', [PegawaiDBController::class, 'cari']);

Route::get('/laptop', [LaptopDBController::class, 'index']);
Route::get('/laptop/tambah', [LaptopDBController::class, 'tambah']);
Route::post('/laptop/store', [LaptopDBController::class, 'store']);
Route::get('/laptop/edit/{id}', [LaptopDBController::class, 'edit']);
Route::post('/laptop/update', [LaptopDBController::class, 'update']);
Route::get('/laptop/hapus/{id}', [LaptopDBController::class, 'hapus']);
Route::get('/laptop/cari', [LaptopDBController::class, 'cari']);

Route::get('/page', [PageCounterDBController::class, 'index']);

Route::get('/karyawan', [KaryawanDBController::class, 'index_karyawan']);
Route::get('/karyawan/tambahkaryawan', [KaryawanDBController::class, 'tambah_karyawan']);
Route::post('/karyawan/storekaryawan', [KaryawanDBController::class, 'storekaryawan']); //jika form dikirim, route ini akan dijalankan
Route::get('/karyawan/hapuskaryawan/{id}', [KaryawanDBController::class, 'hapuskaryawan']);
Route::get('/karyawan/carikaryawan', [KaryawanDBController::class, 'carikaryawan']);
Route::get('/karyawan/view/{id}', [KaryawanDBController::class, 'view']);

Route::get('/belanja', [KeranjangDBController:: class, 'index']);
Route::get('/belanja/beli', [KeranjangDBController:: class, 'beli']);
//store dan data
Route::post('/belanja/store', [KeranjangDBController:: class, 'store']);
Route::get('/belanja/batal/{ID}', [KeranjangDBController:: class, 'batal']);

Route::get('/chat', [ChatController:: class, 'index']);

Route::get('/kategori', [KategoriController::class, 'index']);
Route::post('/kategori/kirim', [KategoriController::class, 'kirim']);

Route::get('/eas', [MykaryawanController::class, 'index']); // tampilkan semua data
Route::get('/eas/view/{kodepegawai}', [MykaryawanController::class, 'view']); // lihat detail 1 data
Route::get('/eas/edit/{kodepegawai}', [MykaryawanController::class, 'edit']); // tampilkan form edit
Route::post('/eas/update/{kodepegawai}', [MykaryawanController::class, 'update']); // simpan hasil edit
Route::post('/eas/store/{kodepegawai}', [MykaryawanController::class, 'store']);