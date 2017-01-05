<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengurus;
use App\Anggota;
use App\Http\Requests;

class PengurusController extends Controller
{
    public function index() {
 		$data = Pengurus::all();
    	return view('admin.pengurus.index', ['data' => $data]);
    }

   public function getEdit($id) {
        $data = Pengurus::findOrFail($id);
        $anggota = Anggota::all();
        if(!$data) {
            abort(404);
        }

        return view('admin.pengurus.edit', ['data' => $data, 'anggota' => $anggota]);
   }

   public function putEdit(Request $request, $id) {
        $data = Pengurus::findOrFail($id);
        if(!$data) {
            abort(404);
        }

        $data->id = $request['nama_anggota'];
        $data->save();

        return view('admin.pengurus.edit', ['data' => $data, 'anggota' => $anggota]);
   }

   public function getLihat($id) {
        $data = Pengurus::findOrFail($id);

        if (!$data) {
            abort(404);
        }

        return view('admin.pengurus.lihat', ['data' => $data]);
   }
}
