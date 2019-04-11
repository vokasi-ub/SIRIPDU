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

Route::get('query', 'PasienController@search');

Route::resource('pasien','PasienController')->except(['delete','destroy']);
Route::post('/datapasien/update','PasienController@update');

Route::post('inputdatapasien/store','PasienController@store')->name('inputdatapasien.store');
Route::get('delete/pasien/{id}', 'PasienController@destroy');
Route::resource('pasien', 'PasienController');
Route::get('pasienedit/edit/{id}', 'PasienController@edit')->name('pasienedit.edit');