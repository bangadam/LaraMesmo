<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pembina;
use DB;
use File;
use App\Http\Requests;



class PembinaController extends Controller
{
    //menampilkan daftar pembina
   	public function getPembina() {
        $data = Pembina::latest('created_at', 'desc')->paginate(3);
    	return view('admin.pembina.index', ['data' => $data]);
    }

    public function getSearch(Request $request) {
        $search = $request->input('search');
        $data = Pembina::where('nama', 'LIKE', '%' .$search. '%')->get();
        return view('admin.pembina.search', ['data' => $data]); 
    }

    public function getTambah() {
    	return view('admin.pembina.tambah');
    }

    public function getEdit($id) {
        $data = Pembina::findOrFail($id);
        if (!$data) {
            abort(404);
        }
    	return view('admin.pembina.edit', ['data' => $data]);
    }

    public function getLihat($id) {
        $data = Pembina::findOrFail($id);
    	return view('admin.pembina.lihat', ['data' => $data]);
    }

    public function getHapus($id) {
    	$data = Pembina::find($id);
        $data->delete();

        return redirect()->route('pembina')->with('pesan', 'Data Berhasil Di Hapus');
    }

    //tambah data pembina
    public function postTambah(Request $request) {
        
        $this->validate($request, [
            'nama'              =>  'required|min:3',
            'password'          =>  'required|min:3',
            'jenis_kelamin'     =>  'required',
            'no_hp'             =>  'required|max:13',
            'alamat'            =>  'required',
            'gambar'            =>  'required'
        ]);

           // upload gambar
        $file       =   $request->file('gambar');
        $fileName   =   date('Y-m-d') . "_" . $file->getClientOriginalName();
        $request->file('gambar')->move('uploads/pembina', $fileName);

        $pembina = new Pembina;
        $pembina->nama          =   $request['nama'];
        $pembina->password      =   bcrypt($request['password']);
        $pembina->jenis_kelamin =   $request['jenis_kelamin'];
        $pembina->no_hp         =   $request['no_hp'];
        $pembina->alamat        =   $request['alamat'];
        $pembina->gambar        =   $fileName;


        // $pembina->gambar        =   $request['gambar'];

        $pembina->save();

        return redirect()->route('pembina')->with('pesan', 'Data Berhasil Di Tambahkan');  
    }

    public function putEdit(Request $request, $id) { 
        $pembina = Pembina::find($id);
        
        if ($request->hasFile('gambar')) {
            File::delete('uploads/pembina'.$pembina->gambar);

            $file       =   $request->file('gambar');
            $fileName   =   date('Y-m-d') . "_" . $file->getClientOriginalName();
            $request->file('gambar')->move('uploads/pembina', $fileName);
        }elseif()  {
        
        $pembina->update([
            'nama'          =>   $request['nama'],
            'password'      =>   bcrypt($request['password']),
            'jenis_kelamin' =>   $request['jenis_kelamin'],
            'no_hp'         =>   $request['no_hp'],
            'alamat'        =>   $request['alamat'],
            'gambar'        =>   $fileName
        ]);
    }

        return redirect()->route('pembina')->with('pesan', 'Data Berhasil Di Update');
   }
}
