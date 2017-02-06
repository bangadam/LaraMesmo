<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Anggota;
use App\Kegiatan;
use App\Pembina;
use App\Http\Requests;

class HomeController extends Controller
{
    public function index() {
    	$anggota = Anggota::all();
        $pembina = Pembina::select('nama', 'gambar')->first();
    	$kegiatan = Kegiatan::all();
    	$data = $kegiatan->take(5);

    	return view('welcome', [
    		'anggota'	=>	$anggota,
    		'data'	=>	$data,
    		'kegiatan' => $kegiatan,
            'pembina'   => $pembina,
    	]);
    }
}
