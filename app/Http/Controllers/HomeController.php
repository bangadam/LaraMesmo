<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Anggota;
use App\Kegiatan;
use App\Http\Requests;

class HomeController extends Controller
{
    public function index() {
    	$anggota = Anggota::all();
    	$kegiatan = Kegiatan::all();
    	return view('welcome', [
    		'anggota'	=>	$anggota,
    		'kegiatan'	=>	$kegiatan
    	]);
    }
}
