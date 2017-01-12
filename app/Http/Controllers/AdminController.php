<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AdminController extends Controller
{
	public function __construct() {
		return $this->middleware('pembina');
	}

    public function index() {
    	return view('admin.partials.dashboard');
    }
}
