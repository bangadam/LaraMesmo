<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pembina;
use App\Kegiatan;
use App\Anggota;
use App\Http\Requests;

class AdminController extends Controller
{

    public function index() {
    	$pembina = Pembina::all();
    	$kegiatan = Kegiatan::all();
    	$anggota = Anggota::all();
    	return view('admin.partials.dashboard', 
    				['pembina' => $pembina,
    				 'kegiatan' => $kegiatan,
    				 'anggota' => $anggota
    				]);
    }
}
