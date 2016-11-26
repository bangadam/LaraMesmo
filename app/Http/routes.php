<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', [
	'uses' 	=> 	'HomeController@index',
	'as'	=>	'home'
]);

//  Login Area
Route::get('/login', [
	'uses'	=>	'AuthController@getLogin',
	'as'	=>	'auth.login'
]);

Route::post('/login', [
	'uses'	=>	'AuthController@postLogin'
]);

Route::get('/logout', [
	'uses'	=>	'AuthController@getLogout',
	'as'	=>	'auth.logout'
]);

Route::get('/protected', ['middleware' => ['auth', 'admin'], function() {
	return "khusus halaman admin";
}]);

// Admin Home
Route::get('/dashboard', [
	'uses'	=> 	'AdminController@index',
	'as'	=> 	'admin.index'
]);
	

//  Pembina Route
Route::group(['prefix' => 'pembina'], function() {
	Route::get('/', [
		'uses'	=>	'PembinaController@getPembina',
		'as'	=>	'pembina'
	]);

	Route::get('/tambah', [
		'uses'	=>	'PembinaController@getTambah',
		'as'	=>	'pembina.tambah'
	]);

	Route::get('/{id}/edit', [
		'uses'	=>	'PembinaController@getEdit', 
		'as'	=>	'pembina.edit'
	]);

	Route::put('/{id}', [
		'uses'	=>	'PembinaController@putEdit',
		'as'	=>	'pembina.update'
	]);

	Route::get('/{id}/hapus', [
		'uses'	=>	'PembinaController@getHapus',
		'as'	=>	'pembina.hapus'
	]);

	Route::get('/lihat/{id}', [
		'uses'	=>	'PembinaController@getLihat',
		'as'	=>	'pembina.lihat'
	]);

	Route::post('/tambah', [
		'uses'	=>	'PembinaController@postTambah'
	]);

	Route::get('/search', [
		'uses'	=>	'PembinaController@getSearch', 
		'as'	=>	'pembina.search'
	]);
});

//  Pembina Route
Route::group(['prefix' => 'anggota'], function() {
	Route::get('/', [
		'uses'	=>	'AnggotaController@getAnggota',
		'as'	=>	'anggota'
	]);

	Route::get('/tambah', [
		'uses'	=>	'AnggotaController@getTambah',
		'as'	=>	'anggota.tambah'
	]);

	Route::get('/{id}/edit', [
		'uses'	=>	'AnggotaController@getEdit', 
		'as'	=>	'anggota.edit'
	]);

	Route::put('/{id}', [
		'uses'	=>	'AnggotaController@putEdit',
		'as'	=>	'anggota.update'
	]);

	Route::get('/{id}/hapus', [
		'uses'	=>	'AnggotaController@getHapus',
		'as'	=>	'anggota.hapus'
	]);

	Route::get('/lihat/{id}', [
		'uses'	=>	'AnggotaController@getLihat',
		'as'	=>	'anggota.lihat'
	]);

	Route::post('/tambah', [
		'uses'	=>	'AnggotaController@postTambah'
	]);

	Route::get('/search', [
		'uses'	=>	'AnggotaController@getSearch', 
		'as'	=>	'anggota.search'
	]);
});




