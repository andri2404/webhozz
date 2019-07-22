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

Route::get('halo', function () {
    return "Saat ini saya sedang belajar laravel";
});

Route::get('blog', function () {
    return view ('blog');
});

Route::get('pegawai', 'pegawaiController@index');

Route::get('coba', function () {
    return view('coba');
});

Route::get ('laravel','laravelController@laravel');