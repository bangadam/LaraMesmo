<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kegiatan;
use App\Pembina;
use App\Bidang;
use App\Http\Requests;

class KegiatanController extends Controller
{
    // Kegiatan Controller
    public function getKegiatan() {
        $data = Kegiatan::all();
        return view('admin.kegiatan.index', ['data' => $data]);
    }

    public function getTambahKegiatan() {
        $pembina = Pembina::all();
        $bidang = BIdang::all();
        return view('admin.kegiatan.tambah', ['pembina' => $pembina, 'bidang' => $bidang]);
    }

    public function postTambahKegiatan(Request $request) {
        $this->validate($request, [
            'nama_kegiatan' =>  'required',
            'bidang_id'     =>  'required',
            'tgl_pel'       =>  'required',
            'pembina_id'    =>  'required'
        ]);

        $data = new Kegiatan;
        $data->nama_kegiatan = $request['nama_kegiatan'];
        $data->bidang_id = $request['bidang_id'];
        $data->tgl_pel = $request['tgl_pel'];
        $data->pembina_id = $request['pembina_id'];

       	$data->save();

       	return redirect()->route('kegiatan')->with('pesan', 'Data Kegiatan Berhasil Ditambahkan !');
    }

    public function getEditKegiatan($id) {
        $data = Kegiatan::findOrFail($id);
        $bidang = Bidang::all();
        $pembina = Pembina::all();
        if (!$data) {
            abort(404);
        }
        return view('admin.kegiatan.edit', ['data' => $data, 'bidang' => $bidang, 'pembina' => $pembina]);
    }

    public function putEditKegiatan(Request $request, $id) {
        $this->validate($request, [
            'nama_kegiatan' =>  'required'
        ]);

        $data = Kegiatan::findOrFail($id);
        if (!$data) {
            abort(404);
        }
        $data->nama_kegiatan = $request['nama_kegiatan'];
        $data->bidang_id = $request['bidang_id'];
        $data->tgl_pel = $request['tgl_pel'];
        $data->pembina_id = $request['pembina_id'];

        $data->save();

        return redirect()->route('kegiatan')->with('pesan', 'Data Kegiatan Berhasil Di Update !');
    }    

    public function getHapusKegiatan($id) {
        $data = Kegiatan::findOrFail($id);
        if (!$data) {
            abort(404);
        }
        $data->delete();

        return redirect()->route('kegiatan')->with('pesan', 'Data Kegiatan Berhasil Di Hapus !');
    }
}
