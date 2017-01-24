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
	'as'	=>	'auth.login',
	'middleware'	=> 	['guest']
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
]);
	

//  Pembina Route

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


//  Pembina Route

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

		Route::get('/downloadExcel/{type}', 'AnggotaController@downloadExcel');

		Route::post('/importExcel', [
			'uses'	=>	'AnggotaController@importExcel',
			'as'	=>	'anggota.import'
		]);

		Route::get('/PrintPdf', [
			'uses'	=>	'AnggotaController@printPdf',
			'as'	=>	'anggota.print'
		]);
	});


//PENGURUS

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

		Route::get('/downloadExcel/{type}', 'PengurusController@downloadExcel');

		Route::get('/PrintPdf', [
			'uses'	=>	'PengurusController@printPdf',
			'as'	=>	'pengurus.print'
		]);
	});


//Kegiatan

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

		Route::get('/downloadExcel/{type}', 'KegiatanController@downloadExcel');

		Route::post('/importExcel', [
			'uses'	=>	'KegiatanController@importExcel',
			'as'	=>	'kegiatan.import'
		]);
		
		Route::get('/PrintPdf', [
			'uses'	=>	'KegiatanController@printPdf',
			'as'	=>	'kegiatan.print'
		]);
	});


//Keuangan

	Route::group(['prefix' => 'keuangan'], function() {
		Route::get('/', [
			'uses' 	=> 'KeuanganController@index',
			'as'	=>	'keuangan'
		]);

		Route::group(['prefix' => 'pemasukan'], function() {
			Route::get('/', [
				'uses' 	=> 'KeuanganController@pemasukan',
				'as'	=>	'pemasukan'
			]);

			Route::get('/tambah', [
				'uses'	=>	'KeuanganController@getTambahPemasukan', 
				'as'	=>	'pemasukan.tambah',
				'middleware'	=>	['pembina']
			]);

			Route::post('/tambah', [
				'uses'	=>	'KeuanganController@postTambahPemasukan'
			]);

			Route::get('/{id}/edit', [
				'uses' 	=>	'KeuanganController@getEditPemasukan',
				'as'	=>	'pemasukan.edit',
				'middleware'	=>	['pembina']
			]);

			Route::put('/{id}', [
				'uses' 	=>	'KeuanganController@putEditPemasukan',
				'as'	=>	'pemasukan.update',
				'middleware'	=>	['pembina']
			]);

			Route::get('/{id}/hapus', [
				'uses'	=>	'KeuanganController@getHapusPemasukan',
				'as'	=>	'pemasukan.hapus',
				'middleware'	=>	['pembina']
			]);

			Route::get('/downloadExcel/{type}', 'KeuanganController@downloadExcel');

			Route::post('/importExcel', [
				'uses'	=>	'KeuanganController@importExcel',
				'as'	=>	'pemasukan.import'
			]);
			
			Route::get('/PrintPdf', [
				'uses'	=>	'KeuanganController@printPdf',
				'as'	=>	'pemasukan.print'
			]);
		});


		//pengeluaran
		Route::group(['prefix' => 'pengeluaran'], function() {
			Route::get('/', [
				'uses' 	=> 'KeuanganController@Pengeluaran',
				'as'	=>	'pengeluaran'
			]);

			Route::get('/tambah', [
				'uses'	=>	'KeuanganController@getTambahPengeluaran', 
				'as'	=>	'pengeluaran.tambah',
				'middleware'	=>	['pembina']
			]);

			Route::post('/tambah', [
				'uses'	=>	'KeuanganController@postTambahPengeluaran'
			]);

			Route::get('/{id}/edit', [
				'uses' 	=>	'KeuanganController@getEditPengeluaran',
				'as'	=>	'pengeluaran.edit',
				'middleware'	=>	['pembina']
			]);

			Route::put('/{id}', [
				'uses' 	=>	'KeuanganController@putEditPengeluaran',
				'as'	=>	'pengeluaran.update',
				'middleware'	=>	['pembina']
			]);

			Route::get('/{id}/hapus', [
				'uses'	=>	'KeuanganController@getHapusPengeluaran',
				'as'	=>	'pengeluaran.hapus',
				'middleware'	=>	['pembina']
			]);

			Route::get('/downloadExcel/{type}', 'KeuanganController@PengeluaranDownloadExcel');

			Route::post('/importExcel', [
				'uses'	=>	'KeuanganController@PengeluaranImportExcel',
				'as'	=>	'pengeluaran.import'
			]);
			
			Route::get('/PrintPdf', [
				'uses'	=>	'KeuanganController@PengeluaranPrintPdf',
				'as'	=>	'pengeluaran.print'
			]);
		});
		
	});


//Absensi

<<<<<<< HEAD
	Route::group(['prefix' => 'absensi'], function() {
	    Route::get('/', [
			'uses'	=>	'AbsensiController@index', 
			'as'	=>	'absensi'
		]);

		Route::get('/tambah', [
				'uses'	=>	'AbsensiController@getTambahAbsensi', 
				'as'	=>	'absensi.tambah',
				'middleware'	=>	['pembina']
			]);

			Route::post('/tambah', [
				'uses'	=>	'AbsensiController@postTambahAbsensi'
			]);

			Route::get('/{id}/edit', [
				'uses' 	=>	'AbsensiController@getEditAbsensi',
				'as'	=>	'absensi.edit',
				'middleware'	=>	['pembina']
			]);

			Route::put('/{id}', [
				'uses' 	=>	'AbsensiController@putEditAbsensi',
				'as'	=>	'absensi.update',
				'middleware'	=>	['pembina']
			]);

			Route::get('/{id}/hapus', [
				'uses'	=>	'AbsensiController@getHapusAbsensi',
				'as'	=>	'absensi.hapus',
				'middleware'	=>	['pembina']
			]);

			Route::get('/downloadExcel/{type}', 'AbsensiController@iDownloadExcel');

			Route::post('/importExcel', [
				'uses'	=>	'AbsensiController@ImportExcel',
				'as'	=>	'absensi.import'
			]);
			
			Route::get('/PrintPdf', [
				'uses'	=>	'AbsensiController@PrintPdf',
				'as'	=>	'absensi.print'
			]);
	});
=======
	Route::get('/absensi', [
		'uses'	=>	'AbsensiController@index', 
		'as'	=>	'absensi'
	]);
>>>>>>> 7226c2488a207dc8e43de1216572ab4740cc91ca

