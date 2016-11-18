<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class SessionController extends Controller {

	public function login() {

		return view('site.login');
	}

	public function handleLogin() {

		return 'process login';

	}

	public function register() {

		return view('site.register');
	}

	public function handleRegister(Request $request) {

		return $request->all();
	}

	public function logout() {
		Auth::logout();
		return redirect()->to('/');
	}

}
