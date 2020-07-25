<?php namespace App\Controllers;
use App\Models\UserModel;
use App\Models\DepartmentModel;
use App\Models\PositionModel;
class Employee extends BaseController
{
	protected $users;
	protected $departments;
	protected $positions;
    public function __construct() 
    {
        $this->users = new UserModel();
        $this->departments = new DepartmentModel();
        $this->positions = new PositionModel();
    }
	public function index()
	{
		$data = [
			'userData' => $this->users->getAllUser(),
            "positionData" => $this->positions->getAllPosition(),
            "departmentData" => $this->departments->getAllDepartment(),
		];
		return view('employees/index',$data);
	}
	// add employee
	public function addEmployee(){
		$data = [];
		if($this->request->getMethod() == "post"){
		helper(['form']);
		$rules = [
		'firstname'=>'required|min_length[3]|max_length[20]|alpha',
		'lastname'=>'required|min_length[3]|max_length[20]|alpha',
		'email'=>'required|valid_email|min_length[6]|max_length[50]',
		'password'=>'required|min_length[8]|max_length[225]',
		];

		if($this->validate($rules)){

				$firstname = $this->request->getVar('firstname');
				$lastname = $this->request->getVar('lastname');
				$email= $this->request->getVar('email');
				$password = $this->request->getVar('password');
				$role = $this->request->getVar('role');
				$department = $this->request->getVar('department');
				$position = $this->request->getVar('position');
				$start_date = $this->request->getVar('startdate');
				$file = $this->request->getFile('profile');
				$employeeProfile= $file->getRandomName();
			$employeeData = array(
				'firstname'=>$firstname,
				'lastname'=>$lastname,
				'email'=>$email,
				'password'=>$password,
				'role'=>$role,
				'profile'=>$employeeProfile,
				'department_id' => $department,
				'position_id' => $position, 
				'start_date'=>$start_date
			);
		$this->users->insert($employeeData);
			$sessionSuccess = session();
			$sessionSuccess->setFlashdata('success','Successful insert employee!');
		}else{
		$sessionError = session();
			$validation = $this->validator;
			$sessionError->setFlashdata('error', $validation);
		}
		}
		return redirect()->to('/employee');
		}
		//delete employee
		public function deleteEmployee($id){
			$employee = new UserModel();
			$employee->delete($id);
			return redirect()->to('/employee');
		}
		//update employee 
		public function updateEmployee(){
			$employeeData = [];
				if($this->request->getMethod() == "post"){
				helper(['form']);
				//validation form
				$rules = [
					'firstname' =>[
						'rules'=>'required|min_length[3]|max_length[20]',
						'errors'=>[
						'required'=>'Last name cannot empty'
						],
					],
					'lastname' =>[
						'rules'=>'required|min_length[3]|max_length[20]',
						'errors'=>[
						'required'=>'First name is cannot empty'
						],
					],
					'email' =>[
						'rules'=>'required|min_length[6]|max_length[50]|valid_email',
						'errors'=>[
						'required'=>'Email address is cannot empty'
						],
					],
					'password' =>[
						'rules'=>'required|min_length[8]|max_length[50]',
						'errors'=>[
						'required'=>'Password is cannot empty'
						],
					],
					
				];				
				if($this->validate($rules)){
					
					$id = $this->request->getVar('user_id');
					$firstname = $this->request->getVar('firstname');
					$lastname = $this->request->getVar('lastname');
					$email= $this->request->getVar('email');
					$password = $this->request->getVar('password');
					$role = $this->request->getVar('role');
					$profile= $this->request->getVar('profile');
					$department = $this->request->getVar('department');
					$position = $this->request->getVar('position');
					$start_date = $this->request->getVar('startdate');
					$employeeData = array(
						'firstname'=>$firstname,
						'lastname'=>$lastname,
						'email'=>$email,
						'password'=>$password,
						'role'=>$role,
						'profile'=>$profile,
						'start_date'=>$start_date,
						'department_id'=>$department,
						'position_id'=>$position
				);
				$this->users->update($id, $employeeData);
					$sessionSuccess = session();
					$sessionSuccess->setFlashdata('success','Successful update employee!');
				}else{
				$sessionError = session();
					$validation = $this->validator;
					$sessionError->setFlashdata('error', $validation);
			
				}
			}
				return redirect()->to('/employee');
		}

}