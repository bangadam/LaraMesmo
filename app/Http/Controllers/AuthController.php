<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Anggota;
use App\Kelas;
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

        $dataLogin = [
            'nama'  => $request['username'],
            'password'  => $request['password'],
            ];  

    if (Auth::guard('anggota')->attempt($dataLogin) ||
        Auth::attempt(['username' => $request['username'], 'password' => $request['password']]))
         {
          return redirect()->route('admin.index')->with('pesan', 'Selamat Datang Di Halaman Dashboard');
        }    	

        return redirect()->back()->with('pesan', 'Maaf Username atau Password Salah !');
    }

    public function getRegister() {
        $kelas = Kelas::all();
        return view('admin.register', ['kelas' => $kelas]);
    }

    public function postRegister(Request $request) {
        $this->validate($request, [
            'nama'              =>  'required|min:3',
            'email'             =>  'required|email|unique:anggotas',
            'jenis_kelamin'     =>  'required',
            'tgl_lahir'         =>  'required',
            'kelas_id'          =>  'required',
            'no_hp'             =>  'required|min:11',
            'alamat'            =>  'required'
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

        return redirect()->route('auth.login')->with('anggota', 'Selamat Anda Sudah Terdaftar !'); 

    }

    public function getLogout() {
    	Auth::logout();

    	return redirect()->route('home');
    }
}
