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

//  Auth Area
Route::get('/login', [
	'uses'	=>	'AuthController@getLogin',
	'as'	=>	'auth.login'
]);

Route::get('/register', [
	'uses'	=>	'AuthController@getRegister',
	'as'	=>	'auth.register'
]);

Route::post('/register', [
	'uses'	=>	'AuthController@postRegister'
]);

Route::post('/login', [
	'uses'	=>	'AuthController@postLogin'
]);

Route::get('/logout', [
	'uses'	=>	'AuthController@getLogout',
	'as'	=>	'auth.logout'
]);


// Admin Home
Route::get('/dashboard', [
	'uses'	=> 	'AdminController@index',
	'as'	=> 	'admin.index',
	'middleware' => ['auth']
]);
	

//  Pembina Route
Route::group(['middleware' => 'auth'], function() {
	Route::group(['prefix' => 'pembina'], function() {
		
		Route::get('/', [
			'uses'	=>	'PembinaController@getPembina',
			'as'	=>	'pembina'
		]);

		Route::get('/tambah', [
			'uses'	=>	'PembinaController@getTambah',
			'as'	=>	'pembina.tambah',
			'middleware'	=>	['admin']
		]);

		Route::get('/{id}/edit', [
			'uses'	=>	'PembinaController@getEdit', 
			'as'	=>	'pembina.edit',
			'middleware'	=>	['admin']
		]);

		Route::put('/{id}', [
			'uses'	=>	'PembinaController@putEdit',
			'as'	=>	'pembina.update',
			'middleware'	=>	['admin']
		]);

		Route::get('/{id}/hapus', [
			'uses'	=>	'PembinaController@getHapus',
			'as'	=>	'pembina.hapus',
			'middleware'	=>	['admin']
		]);

		Route::get('/lihat/{id}', [
			'uses'	=>	'PembinaController@getLihat',
			'as'	=>	'pembina.lihat'
		]);

		Route::post('/tambah', [
			'uses'	=>	'PembinaController@postTambah',
			'middleware'	=>	['admin']
		]);
		
		Route::get('/downloadExcel/{type}', 'PembinaController@downloadExcel');

		Route::post('/importExcel', [
			'uses'	=>	'PembinaController@importExcel',
			'as'	=>	'pembina.import'
		]);

		Route::get('/PrintPdf', [
			'uses'	=>	'PembinaController@printPdf',
			'as'	=>	'pembina.print'
		]);
	});
});

//  Pembina Route
Route::group(['middleware' => 'auth'], function() {
	Route::group(['prefix' => 'anggota'], function() {
		Route::get('/', [
			'uses'	=>	'AnggotaController@getAnggota',
			'as'	=>	'anggota'
		]);

		Route::get('/tambah', [
			'uses'	=>	'AnggotaController@getTambah',
			'as'	=>	'anggota.tambah',
			'middleware'	=>	['pembina']
		]);

		Route::get('/{id}/edit', [
			'uses'	=>	'AnggotaController@getEdit', 
			'as'	=>	'anggota.edit',
			'middleware'	=>	['pembina']
		]);

		Route::put('/{id}', [
			'uses'	=>	'AnggotaController@putEdit',
			'as'	=>	'anggota.update',
			'middleware'	=>	['pembina']
		]);

		Route::get('/{id}/hapus', [
			'uses'	=>	'AnggotaController@getHapus',
			'as'	=>	'anggota.hapus',
			'middleware'	=>	['pembina']
		]);

		Route::get('/lihat/{id}', [
			'uses'	=>	'AnggotaController@getLihat',
			'as'	=>	'anggota.lihat'
		]);

		Route::post('/tambah', [
			'uses'	=>	'AnggotaController@postTambah',
			'middleware'	=>	['pembina']
		]);
	});
});

//PENGURUS
Route::group(['middleware' => 'auth'], function() {
	Route::group(['prefix' => 'pengurus'], function() {
		Route::get('/', [
		'uses'	=>	'PengurusController@index',
		'as'	=>	'pengurus'
		]);

		Route::get('/{id}/edit', [
			'uses'	=>	'PengurusController@getEdit',
			'as'	=>	'pengurus.edit'
		]);

		Route::put('/{id}', [
			'uses'	=>	'PengurusController@putEdit',
			'as'	=>	'pengurus.update',
			'middleware'	=>	['pembina']
		]);

		Route::get('/{id}/hapus', [
			'uses'	=>	'PengurusController@getHapus',
			'as'	=>	'pengurus.hapus',
			'middleware'	=>	['pembina']
		]);

		Route::get('/lihat/{id}', [
			'uses'	=>	'PengurusController@getLihat',
			'as'	=>	'pengurus.lihat'
		]);
	});
});

//Kegiatan
Route::group(['middleware' => 'auth'], function() {
	Route::group(['prefix' => 'kegiatan'], function() {
		Route::get('/', [
			'uses'	=>	'KegiatanController@getKegiatan', 
			'as'	=>	'kegiatan'
		]);

		Route::get('/tambah', [
			'uses'	=>	'KegiatanController@getTambahKegiatan', 
			'as'	=>	'kegiatan.tambah',
			'middleware'	=>	['pembina']
		]);

		Route::post('/tambah', [
			'uses'	=>	'KegiatanController@postTambahKegiatan'
		]);

		Route::get('/{id}/edit', [
			'uses' 	=>	'KegiatanController@getEditKegiatan',
			'as'	=>	'kegiatan.edit',
			'middleware'	=>	['pembina']
		]);

		Route::put('/{id}', [
			'uses' 	=>	'KegiatanController@putEditKegiatan',
			'as'	=>	'kegiatan.update',
			'middleware'	=>	['pembina']
		]);

		Route::get('/{id}/hapus', [
			'uses'	=>	'KegiatanController@getHapusKegiatan',
			'as'	=>	'kegiatan.hapus',
			'middleware'	=>	['pembina']
		]);
	});
});

//Keuangan
Route::group(['middleware' => 'auth'], function() {
	Route::group(['prefix' => 'keuangan'], function() {
		Route::get('/', [
			'uses' 	=> 'KeuanganController@index',
			'as'	=>	'keuangan'
		]);
	});
});

//Absensi
Route::group(['middleware' => 'auth'], function() {
	Route::get('/absensi', [
		'uses'	=>	'AbsensiController@index', 
		'as'	=>	'absensi'
	]);
});
