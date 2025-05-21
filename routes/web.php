<?php

use Illuminate\Support\Facades\Route;
// import java.io;

// System.out.println("Hello World");
Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "<h1>Halo, Selamat datang di tutorial laravel www.malasngoding.com</h1>";
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('frontend', function () {
	return view('frontend');
});

Route::get('satu', function () {
	return view('myfirstpage');
});

Route::get('dua', function () {
	return view('mysecondpage');
});

Route::get('tiga', function () {
	return view('mythirdpage');
});

Route::get('bootstrap1', function () {
	return view('bootstrap1');
});

Route::get('js1', function () {
	return view('js1');
});

Route::get('latihanjs', function () {
	return view('latihanjavascript');
});

Route::get('tugaslayout', function () {
	return view('mobilelayout1');
});

Route::get('tugaslinktree', function () {
	return view('olip');
});

Route::get('templatebootstrap4', function () {
	return view('templateb4');
});

Route::get('validasi1', function () {
	return view('validasi1');
});

Route::get('templateets', function () {
	return view('template');
});

Route::get('index', function () {
	return view('index');
});
