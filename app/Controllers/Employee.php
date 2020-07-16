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
	
	// delete employy
	public function deleteEmployee($id){
		$employee = new EmployeeModel();
		$employee->delete($id);
		$employee->where("id",$id);
		return redirect()->to('/employee');
	}
	//update employee
	public function updateForm($id){
		$employee = new EmployeeModel();
		$data['employee'] = $employee->find($id);
		return view('employees/index',$data);
	}
	
	public function updateEmployee(){
		$data = [];
		if($this->request->getMethod() == "post"){
			helper(['form']);
			$rules = [
				'firstname'=>'required|min_length[3]|max_length[20]',
				'lastname'=>'required|min_length[3]|max_length[20]',
				'email'=>'required|min_length[6]|max_length[50]|valida_email',
				'password'=>'required|length[8]|max_length[255]',
				// 'role'=>'required',
				// 'profile'=>'required',
				'start_date'=>'required'
			];
			//   if($this->validate($rules)){ 
				$employee = new EmployeeModel();
				$id = $this->request->getVar('id');
				$firstname = $this->request->getVar('firstname');
				$lastname = $this->request->getVar('lastname');
				$email= $this->request->getVar('email');
				$password = $this->request->getVar('password');
				// $role = $this->request->getVar('role');
				// $profile = $this->request->getVar('profile');
				$start_date = date('Y-m-d ',strtotime($this->request->getVar('startdate')));
				$employeeData = array(
					'firstname'=>$firstname,
					'lastname'=>$lastname,
					'email'=>$email,
					'password'=>$password,
					//'role'=>$role,
					//'profile'=>$profile,
					'start_date'=>$start_date
				);
				$employee->update($id,$employeeData);
				$sessionSuccess = session();
				$sessionSuccess->setFlashdata('success','Successful update employee!');
			}
			// else{
			
			// 	$sessionError = session();
            //     $validation = $this->validator;
            //     $sessionError->setFlashdata('error', $validation);
		 	// }
		// }
		return redirect()->to('/employee');
}
}





















