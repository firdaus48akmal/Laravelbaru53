<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
//
// Route::get('mahasiswa', function() {
// 	return view('mahasiswa');
// });

Route::get('/', 'PagesController@beranda')->name('beranda');
Route::get('mahasiswa', 'MahasiswaController@index')->name('mahasiswa');
Route::get('mahasiswa/{nim}', 'MahasiswaController@show')->name('mahasiswa_show');
