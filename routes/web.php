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
Auth::routes();

// tampilan halaman utama atau beranda
Route::get('/home', 'HomeController@index')->name('home');

// insert data

Route::get('/category', 'CategoryController@index');
Route::get('/category/create', 'CategoryController@create');
Route::post('/category/create', 'CategoryController@store');

// update data

Route::get('/category/{id}/edit', 'CategoryController@edit');
Route::put('/category/{id}/edit', 'CategoryController@update');

// delete data

Route::delete('category/{id}', 'CategoryController@destroy');



// tampilan product
Route::get('/product', 'ProductController@index');
Route::get('/product/create', 'ProductController@create');
Route::post('/product/create', 'ProductController@ram');

// membuat product Relasi one to one atau one to many


Route :: resource('product','ProductController');