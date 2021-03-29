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
//
Route::get('home', 'App\Http\Controllers\HomeController@home');
Route::get('masterbarang', 'App\Http\Controllers\HomeController@masterbarang');
Route::get('mastersatuan', 'App\Http\Controllers\HomeController@mastersatuan');
Route::get('masterkategori', 'App\Http\Controllers\HomeController@masterkategori');
Route::get('masterkemasan', 'App\Http\Controllers\HomeController@masterkemasan');

Route::get('tambah_masterbarang', 'App\Http\Controllers\MasterBarangController@tambah_masterbarang');
Route::get('tambah_mastersatuan', 'App\Http\Controllers\MasterSatuanController@tambah_mastersatuan');
Route::get('tambah_masterkategori', 'App\Http\Controllers\MasterKategoriController@tambah_masterkategori');
Route::get('tambah_masterkemasan', 'App\Http\Controllers\MasterKemasanController@tambah_masterkemasan');

Route::get('masterkemasan', 'App\Http\Controllers\MasterKemasanController@data_masterkemasan');
Route::post('masterkemasan', 'App\Http\Controllers\MasterKemasanController@inputMasterKemasan');
Route::get('edit_masterkemasan/{id}', 'App\Http\Controllers\MasterKemasanController@updateMasterKemasan');
Route::patch('masterkemasan/{id}', 'App\Http\Controllers\MasterKemasanController@updateMasterKemasanProcess');
Route::delete('masterkemasan/{id}', 'App\Http\Controllers\MasterKemasanController@delete');