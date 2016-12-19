<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Anggota;
use App\Http\Requests;

class AuthController extends Controller
{
    public function getLogin() {
    	return view('admin.login');
    }

    public function postLogin(Request $request) {
    	$this->validate($request, [
    		'username'	=>	'required',
    		'password'	=>	'required'
    	]);
    	// $usersdata = array(
    	// 	'username'	=>	$request['username'],
    	// 	'password'	=>	$request['password'], 
    	// 	'level'		=> 	$request['level']
    	// );

    	if (Auth::attempt(array(
    		'username'	=>	$request['username'],
    		'password'	=>	$request['password'],
    		'level'		=>	$request['level']

    		))) {
    		return redirect()->route('admin.index')->with('pesan', 'Selamat Datang Di Halaman Dahsboard');
    	}else{
    		return redirect()->back()->with('pesan', 'Maaf Username Atau Kata Sandi Anda Salah !');
    	}
    	
    }

    public function getRegister() {
        return view('admin.register');
    }

    public function postRegister(Request $request) {
        $this->validate($request, [
            'nama'              =>  'required|min:3',
            'email'             =>  'required|email|unique:anggotas',
            'password'          =>  'required|min:3',
            'jenis_kelamin'     =>  'required',
            'tgl_lahir'         =>  'required',
            'kelas_id'          =>  'required',
            'no_hp'             =>  'required|min:11',
            'alamat'            =>  'required',
            'gambar'            =>  'image'
        ]);

        $anggota = new Anggota;
        $anggota->nama          =   $request['nama'];
        $anggota->email         =   $request['email'];
        $anggota->password         =   bcrypt($request['password']);
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

    public function getLogout() {
    	Auth::logout();

    	return redirect()->route('home');
    }
}
