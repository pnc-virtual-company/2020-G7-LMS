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
	
	// delete employee
	public function deleteEmployee($id){
		$employee = new EmployeeModel();
		$employee->delete($id);
		return redirect()->to('/employee');
	}


}