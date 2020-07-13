<?php namespace App\Controllers;

class Employee extends BaseController
{
	public function index()
	{
		return view('employees/index');
	}
	public function login()
	{
		return view('login/login');
	}
	public function logout()
	{
		return redirect()->to('/');
	}

}