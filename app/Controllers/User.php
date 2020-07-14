<?php namespace App\Controllers;

class User extends BaseController
{
	public function login()
	{
		return view('login/login');
	}
	public function logout()
	{
		return redirect()->to('/');
	}

}