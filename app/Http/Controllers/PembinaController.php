<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pembina;
use Image;
use Storage;
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
            'email'             =>  'required|unique:pembina',
            'jenis_kelamin'     =>  'required',
            'no_hp'             =>  'required|max:13',
            'alamat'            =>  'required',
            'gambar'            =>  'image'
        ]);

        $pembina = new Pembina;
        $pembina->nama          =   $request['nama'];
        $pembina->email         =   $request['email'];
        $pembina->jenis_kelamin =   $request['jenis_kelamin'];
        $pembina->no_hp         =   $request['no_hp'];
        $pembina->alamat        =   $request['alamat'];

           // upload gambar
        if ($request->hasFile('gambar')) {
            $file       =   $request->file('gambar');
            $fileName   =   date('Y-m-d') . "." . $file->getClientOriginalName();
            $location   =   public_path('uploads/'. $fileName);
            Image::make($file)->resize(800, 400)->save($location);

            $pembina->gambar  =  $fileName;
        }

        $pembina->save();

        return redirect()->route('pembina')->with('pesan', 'Data Berhasil Di Tambahkan');  
    }

    public function putEdit(Request $request, $id) { 
        $pembina = Pembina::findOrFail($id);

        $this->validate($request, [
            'nama'              =>  'required|min:3',
            'password'          =>  'required|min:3',
            'jenis_kelamin'     =>  'required',
            'no_hp'             =>  'required|max:13',
            'alamat'            =>  'required',
            'gambar'            =>  'image'
        ]);
        $pembina = Pembina::findOrFail($id);
        $pembina->nama          =   $request['nama'];
        $pembina->password      =   bcrypt($request['password']);
        $pembina->jenis_kelamin =   $request['jenis_kelamin'];
        $pembina->no_hp         =   $request['no_hp'];
        $pembina->alamat        =   $request['alamat'];

           // upload gambar
        if ($request->hasFile('gambar')) {
            $file       =   $request->file('gambar');
            $fileName   =   date('Y-m-d') . "." . $file->getClientOriginalName();
            $location   =   public_path('uploads/'. $fileName);
            Image::make($file)->resize(800, 400)->save($location);
            //gambar lama    
            $oldFileName = $pembina->gambar;
            //gambar baru
            $pembina->gambar = $fileName;
            //hapus gambar lama
            Storage::delete($oldFileName);    

        }

        $pembina->save();

        return redirect()->route('pembina')->with('pesan', 'Data berhasil di Update !');
    }
}
