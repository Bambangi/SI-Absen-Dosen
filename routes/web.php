<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('/auth/login');
});

// DOSEN
Route::get('/dosen', 'DosenController@index');
Route::get('/dosen/create', 'DosenController@create');
Route::post('/dosen/store', 'DosenController@store');
Route::get('/dosen/edit/{id}', 'DosenController@edit');
Route::post('/dosen/update/{id}', 'DosenController@update');
Route::get('/dosen/delete/{id}', 'DosenController@destroy');

// PRODI
Route::get('/prodi', 'ProdiController@index');
Route::get('/prodi/create', 'ProdiController@create');
Route::post('/prodi/store', 'ProdiController@store');
Route::get('/prodi/edit/{id}', 'ProdiController@edit');
Route::post('/prodi/update/{id}', 'ProdiController@update');
Route::get('/prodi/delete/{id}', 'ProdiController@destroy');

// MATAKULIAH
Route::get('/matkul', 'MatkulController@index');
Route::get('/matkul/create', 'MatkulController@create');
Route::post('/matkul/store', 'MatkulController@store');
Route::get('/matkul/edit/{id}', 'MatkulController@edit');
Route::post('/matkul/update/{id}', 'MatkulController@update');
Route::get('/matkul/delete/{id}', 'MatkulController@destroy');

// LOGIN
Auth::routes();
Route::get('/dashboard', 'HomeController@index');
