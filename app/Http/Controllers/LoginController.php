<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class LoginController extends Controller {
	public function login(Request $request) {
		$credentials = ['username' => $request->username, 'password' => $request->password];

		if (Auth::attempt($credentials)) {
			return redirect('dashboard');
		} else {
			return redirect('login');
		}
	}

	public function logout(Request $request) {
		Auth::logout();
		return redirect('login');
	}
}
