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
    return view('/welcome');
});
<<<<<<< HEAD
Route::get('/pertanyaan', 'PertanyaanController@index'); //menampilkan home
Route::get('/create', 'PertanyaanController@create'); //menampilkan halaman form
Route::post('/pertanyaan', 'PertanyaanController@store'); //menampilkan data 
Route::get('/pertanyaan/{id}', 'PertanyaanController@answ'); //menampilkan form jawab
Route::get('/make', 'PenjawabController@make'); //menampilkan halaman form
Route::get('/penjawab', 'PenjawabController@indeks'); //menampilkan jawaban
Route::post('/penjawab', 'PenjawabController@storej'); //menampilkan data 
=======
Route::get('/pertanyaan', 'PertanyaanController@index');
Route::get('/create', 'PertanyaanController@create');
Route::post('/pertanyaan', 'PertanyaanController@store');
>>>>>>> f4aeb781d03f7c0b64938ce81efe42ed7fca6d14
