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

	public function addEmployee(){
		$employee = new EmployeeModel();
		$id = $this->request->getVar('id');
		$firstname = $this->request->getVar('firstname');
		$lastname = $this->request->getVar('lastname');
		$email= $this->request->getVar('email');
		$password = $this->request->getVar('password');
		 //$role = $this->request->getVar('role');
		 $profile = $this->request->getVar('profile');
		 $start_date = date('Y-m-d',strtotime($this->request->getVar('startdate')));
		$employeeData = array(
			'firstname'=>$firstname,
			'lastname'=>$lastname,
			'email'=>$email,
			'password'=>$password,
			//'role'=>$role,
			// 'profile'=>$profile,
			 'start_date'=>$start_date
		);
		$employee->save($employeeData);
		return redirect()->to('/employee');
	}
	





	
	// delete employee
	public function deleteEmployee($id){
		$employee = new EmployeeModel();
		$employee->delete($id);
		$employee->where("id",$id);
		return redirect()->to('/employee');
	}

}





















