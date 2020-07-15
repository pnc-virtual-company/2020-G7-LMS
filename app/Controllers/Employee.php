<?php namespace App\Controllers;
use App\Models\EmployeeModel;

class Employee extends BaseController
{
	public function index()
	{
		$employee = new EmployeeModel();
		$data['employees'] = $employee->findAll();
		return view('employees/index',$data);
	}

}