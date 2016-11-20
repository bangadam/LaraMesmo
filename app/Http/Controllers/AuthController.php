<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
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

    public function getLogout() {
    	Auth::logout();

    	return redirect()->route('home');
    }
}
