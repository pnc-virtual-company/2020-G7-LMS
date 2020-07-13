<?php namespace App\Controllers;
use App\Models\LoginModel;
class Login extends BaseController
{
	public function index()
	{
		return view('login/login');
	}
		
}
