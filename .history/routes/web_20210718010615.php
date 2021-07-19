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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// route makul

Route::get('makul', 'makulcontroller@index')->name('makul');
Route::get('tambah-makul', 'makulController@create')->name('tambah.makul');
Route::post('simpan-makul', 'makulController@store')->name('simpan.makul');

Route::get('edit-makul/{id}', 'makulController@edit')->name('makul.edit');
Route::post('update-makul/{id}', 'makulController@update')->name('update.makul');
Route::get('hapus-makul/{id}', 'makulController@destroy')->name('hapus.makul');

//route mahasiswa

Route::get('mahasiswa','MahasiswaController@index')->name('mahasiswa');
Route::get('tambah-mahasiswa', 'MahasiswaController@create')->name('tambah.mahasiswa');
Route::post('simpan-mahasiswa', 'MahasiswaController@store')->name('simpan.mahasiswa');

Route::get('edit-mahasiswa/{id}', 'mahasiswaController@edit')->name('edit.mahasiswa');
Route::post('update-mahasiswa/{id}', 'mahasiswaController@update')->name('update.mahasiswa');
Route::get('hapus-mahasiswa/{id}', 'mahasiswaController@destroy')->name('hapus.mahasiswa');
