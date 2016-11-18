<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Hash;
use Auth;

class SessionController extends Controller {

	public function login() {

		return view('site.login');
	}

	public function handleLogin(Request $request) {
		if (Auth::attempt(['username' => $request->input('username'), 'password' => $request->input('password')])) {
			
			return redirect()->to('/')->with('alertMessage', "Login successfully !");
		}

		return redirect()->back()->with('alertError', "invalid username / password !");
	}

	public function register() {

		return view('site.register');
	}

	public function handleRegister(Request $request) {
		$this->validate($request, [
			'username' 				=> 'required',
			'password' 				=> 'required',
			'comfirmed_password' 	=> 'required|same:password'
		]);

		$newUser = new \App\User();
		$newUser->username = $request->input('username');
		$newUser->password = Hash::make($request->input('password'));
		$newUser->save();

		return redirect()->to('login')->with('alertMessage', 'Account created successfully !');
	}

	public function logout() {
		Auth::logout();
		return redirect()->to('/');
	}

}
