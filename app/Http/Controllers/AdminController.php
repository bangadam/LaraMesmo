<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pembina;
use App\Kegiatan;
use App\Anggota;
use App\Http\Requests;

class AdminController extends Controller
{
<<<<<<< HEAD
<<<<<<< HEAD
    public function __construct() {
        return $this->middleware('auth');
    }
=======
	public function __construct() {
		return $this->middleware('pembina');
	}
>>>>>>> 7226c2488a207dc8e43de1216572ab4740cc91ca
=======
	public function __construct() {
		return $this->middleware('pembina');
	}
>>>>>>> 7226c2488a207dc8e43de1216572ab4740cc91ca

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
