<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\BukuTamu;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class BukuTamuController extends Controller
{
   	public function index() {
   		$data = BukuTamu::all();
   		return view('admin.bukutamu.index', ['data' => $data]);
   	}

   	public function getBalas($id) {
   		$data = BukuTamu::findOrFail($id);
   		return view('admin.bukutamu.balas', ['data' => $data]);
   	}
}
