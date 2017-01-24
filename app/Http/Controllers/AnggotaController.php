<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Anggota;
use App\Kelas;
use Image;
use Storage;
use App\Http\Requests;



class AnggotaController extends Controller
{
    //menampilkan daftar anggota
   	public function getAnggota() {
        $data = Anggota::all();
    	return view('admin.anggota.index', ['data' => $data]);
    }

    public function getTambah() {
        $kelas = Kelas::all();
    	return view('admin.anggota.tambah', ['kelas' => $kelas]);
    }

    public function getEdit($id) {
        
        $data       = Anggota::findOrFail($id);
        $kelas      = Kelas::all();
        if (!$data) {
            abort(404);
        }
    	return view('admin.anggota.edit', ['data' => $data, 'kelas' => $kelas]);
    }

    public function getLihat($id) {
        $data = Anggota::findOrFail($id);
    	return view('admin.anggota.lihat', ['data' => $data]);
    }

    public function getHapus($id) {
    	$data = Anggota::findOrFail($id);
        if (!$data) {
            abort(404);
        }
        $data->delete();

        return redirect()->route('anggota')->with('pesan', 'Data Berhasil Di Hapus');
    }

    //tambah data anggota
    public function postTambah(Request $request) {
        // dd($request);
        $this->validate($request, [
            'nama'              =>  'required|min:3',
            'email'             =>  'required|email|unique:anggotas',
            'jenis_kelamin'     =>  'required',
            'tgl_lahir'         =>  'required',
            'kelas_id'          =>  'required',
            'no_hp'             =>  'required|min:11|max:13',
            'alamat'            =>  'required',
            'gambar'            =>  'image'
        ]);

        $anggota = new Anggota;
        $anggota->nama          =   $request['nama'];
        $anggota->email         =   $request['email'];
        $anggota->jenis_kelamin =   $request['jenis_kelamin'];
        $anggota->tgl_lahir     =   $request['tgl_lahir'];
        $anggota->kelas_id      =   $request['kelas_id'];
        $anggota->no_hp         =   $request['no_hp'];
        $anggota->alamat        =   $request['alamat'];
           // upload gambar
        if ($request->hasFile('gambar')) {
            $file       =   $request->file('gambar');
            $fileName   =   date('Y-m-d') . "." . $file->getClientOriginalName();
            $location   =   public_path('uploads/'. $fileName);
            Image::make($file)->resize(800, 400)->save($location);

            $anggota->gambar  =  $fileName;
        }

        $anggota->save();

        return redirect()->route('anggota')->with('pesan', 'Data Berhasil Di Tambahkan');  
    }

    public function putEdit(Request $request, $id) { 

        $this->validate($request, [
            'nama'              =>  'required|min:3',
            'email'             =>  'required',
            'jenis_kelamin'     =>  'required',
            'tgl_lahir'         =>  'required',
            'kelas_id'          =>  'required',
            'no_hp'             =>  'required|max:13|min:12',
            'alamat'            =>  'required',
            'gambar'            =>  'image'
        ]);

        $anggota = Anggota::findOrFail($id);
        $anggota->nama          =   $request['nama'];
        $anggota->email         =   $request['email'];
        $anggota->jenis_kelamin =   $request['jenis_kelamin'];
        $anggota->tgl_lahir     =   $request['tgl_lahir'];
        $anggota->kelas_id      =   $request['kelas_id'];
        $anggota->no_hp         =   $request['no_hp'];
        $anggota->alamat        =   $request['alamat'];

           // upload gambar
        if ($request->hasFile('gambar')) {
            $file       =   $request->file('gambar');
            $fileName   =   date('Y-m-d') . "." . $file->getClientOriginalName();
            $location   =   public_path('uploads/'. $fileName);
            Image::make($file)->resize(800, 400)->save($location);
            //gambar lama    
            $oldFileName = $anggota->gambar;
            //gambar baru
            $anggota->gambar = $fileName;
            //hapus gambar lama
            Storage::delete($oldFileName);    

        }

        $anggota->save();

        return redirect()->route('anggota')->with('pesan', 'Data berhasil di Update !');
    }
}
