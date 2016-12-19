<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengurus;
use App\Http\Requests;

class PengurusController extends Controller
{
    public function index() {
 		$data = Pengurus::all();
    	return view('admin.pengurus.index', ['data' => $data]);
    }

    // public function getTambah() {
    // 	$anggota = Anggota::all();
    // 	$pengurus = Pengurus::all();
    // 	return view('admin.pengurus.tambah', ['anggota' => $anggota, 'pengurus' => $pengurus]);
    // }

    // public function postTambah(Request $request, ) {
    // 	// $anggota = 	
    // }
}
