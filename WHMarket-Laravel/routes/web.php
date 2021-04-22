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
Route::get('data_stokbarang', 'App\Http\Controllers\HomeController@data_stokbarang');
Route::get('data_barangmasuk', 'App\Http\Controllers\HomeController@data_barangmasuk');

Route::get('tambah_masterbarang', 'App\Http\Controllers\MasterBarangController@tambah_masterbarang');
Route::get('tambah_mastersatuan', 'App\Http\Controllers\MasterSatuanController@tambah_mastersatuan');
Route::get('tambah_masterkategori', 'App\Http\Controllers\MasterKategoriController@tambah_masterkategori');
Route::get('tambah_masterkemasan', 'App\Http\Controllers\MasterKemasanController@tambah_masterkemasan');
Route::get('tambah_data_stokbarang', 'App\Http\Controllers\DataStokBarangController@tambah_data_stokbarang');

Route::get('masterkemasan', 'App\Http\Controllers\MasterKemasanController@data_masterkemasan');
Route::post('masterkemasan', 'App\Http\Controllers\MasterKemasanController@inputMasterKemasan');
Route::get('edit_masterkemasan/{id}', 'App\Http\Controllers\MasterKemasanController@updateMasterKemasan');
Route::patch('masterkemasan/{id}', 'App\Http\Controllers\MasterKemasanController@updateMasterKemasanProcess');
Route::delete('masterkemasan/{id}', 'App\Http\Controllers\MasterKemasanController@delete');

Route::get('mastersatuan', 'App\Http\Controllers\MasterSatuanController@data_mastersatuan');
Route::post('mastersatuan', 'App\Http\Controllers\MasterSatuanController@inputMasterSatuan');
Route::get('edit_mastersatuan/{id}', 'App\Http\Controllers\MasterSatuanController@updateMasterSatuan');
Route::patch('mastersatuan/{id}', 'App\Http\Controllers\MasterSatuanController@updateMasterSatuanProcess');
Route::delete('mastersatuan/{id}', 'App\Http\Controllers\MasterSatuanController@delete');

Route::get('masterkategori', 'App\Http\Controllers\MasterKategoriController@data_masterkategori');
Route::post('masterkategori', 'App\Http\Controllers\MasterKategoriController@inputMasterKategori');
Route::get('edit_masterkategori/{id}', 'App\Http\Controllers\MasterKategoriController@updateMasterKategori');
Route::patch('masterkategori/{id}', 'App\Http\Controllers\MasterKategoriController@updateMasterKategoriProcess');
Route::delete('masterkategori/{id}', 'App\Http\Controllers\MasterKategoriController@delete');

Route::get('masterbarang', 'App\Http\Controllers\MasterBarangController@data_masterbarang');
Route::post('masterbarang', 'App\Http\Controllers\MasterBarangController@inputMasterBarang');
Route::get('edit_masterbarang/{id}', 'App\Http\Controllers\MasterBarangController@updateMasterBarang');
Route::patch('masterbarang/{id}', 'App\Http\Controllers\MasterBarangController@updateMasterBarangProcess');
Route::delete('masterbarang/{id}', 'App\Http\Controllers\MasterBarangController@delete');

Route::get('data_stokbarang', 'App\Http\Controllers\DataStokBarangController@data_stokbarang');
Route::post('data_stokbarang', 'App\Http\Controllers\DataStokBarangController@InputDataStokBarang');
Route::delete('data_stokbarang/{id}', 'App\Http\Controllers\DataStokBarangController@delete');

Route::get('data_barangmasuk', 'App\Http\Controllers\BarangMasukController@data_barangmasuk');
Route::delete('data_barangmasuk/{id}', 'App\Http\Controllers\BarangMasukController@delete');