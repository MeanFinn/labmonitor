<?php

namespace App\Http\Controllers;

use Auth;

class IndexController extends Controller {
	public function dashboard() {
		return view('dashboard');

	}

	public function login() {
		if (Auth::user()) {
			return redirect('dashboard');
		} else {
			return view('login');
		}
	}
}
