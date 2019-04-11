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
//menampilkan halaman setelah login
Route::get('/home', 'HomeController@index')->name('dashboard.dashboard');


Route::get('dashboard', function(){
	return view('dashboard/dashboard');
});

//tabel pasien
Route::get('query', 'PasienController@search');

Route::resource('pasien','PasienController')->except(['delete','destroy']);
Route::post('/datapasien/update','PasienController@update');

Route::post('inputdatapasien/store','PasienController@store')->name('inputdatapasien.store');
Route::get('delete/pasien/{id}', 'PasienController@destroy');
Route::resource('pasien', 'PasienController');
Route::get('pasienedit/edit/{id}', 'PasienController@edit')->name('pasienedit.edit');

//tabel dokter
Route::get('query', 'DokterController@search');

Route::resource('dokter','DokterController')->except(['delete','destroy']);
Route::post('/datadokter/update','DokterController@update');

Route::post('inputdatadokter/store','DokterController@store')->name('inputdatadokter.store');
Route::get('delete/dokter/{id}', 'DokterController@destroy');
Route::resource('dokter', 'DokterController');
Route::get('dokteredit/edit/{id}', 'DokterController@edit')->name('dokteredit.edit');

//tabel poli
Route::get('query', 'PoliController@search');

Route::resource('poli','PoliController')->except(['delete','destroy']);
Route::post('/datapoli/update','PoliController@update');

Route::post('inputdatapoli/store','PoliController@store')->name('inputdatapoli.store');
Route::get('delete/poli/{id}', 'PoliController@destroy');
Route::resource('poli', 'PoliController');
Route::get('poliedit/edit/{id}', 'PoliController@edit')->name('poliedit.edit');

//tabel daftar
Route::get('query', 'DaftarController@search');

Route::resource('daftar','DaftarController')->except(['delete','destroy']);
Route::post('/datadaftar/update','DaftarController@update');

Route::post('inputdatadaftar/store','DaftarController@store')->name('inputdatadaftar.store');
Route::get('delete/daftar/{id}', 'DaftarController@destroy');
Route::resource('daftar', 'DaftarController');
Route::get('daftaredit/edit/{id}', 'DaftarController@edit')->name('daftaredit.edit');
