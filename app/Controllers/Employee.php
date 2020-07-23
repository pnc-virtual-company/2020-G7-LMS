<?php namespace App\Controllers;
use App\Models\UserModel;
use App\Models\DepartmentModel;
use App\Models\PositionModel;
class Employee extends BaseController
{
	protected $user;
	protected $department;
	protected $position;
    public function __construct() 
    {
        $this->user = new UserModel();
        $this->department = new DepartmentModel();
        $this->position = new PositionModel();
    }
	public function index()
	{
		$data = [
			'userData'=>$this->user->getAllUser(),
			'departmentData' => $this->department->getAllDepartment(),
            'positionData' => $this->position->getAllPosition(),
		];
		return view('employees/index',$data);
	}
	public function addEmployee(){
				$employee = new UserModel();
				$id = $this->request->getVar('id');
				$firstname = $this->request->getVar('firstname');
				$lastname = $this->request->getVar('lastname');
				$email= $this->request->getVar('email');
				$password = $this->request->getVar('password');
				$role = $this->request->getVar('role');
				$department = $this->request->getVar('department');
				$position = $this->request->getVar('position');
				$start_date = date('Y-m-d',strtotime($this->request->getVar('startdate')));
				$file = $this->request->getFile('profile');
				$employeeProfile= $file->getRandomName();
				$employeeData = array(
					'firstname'=>$firstname,
					'lastname'=>$lastname,
					'email'=>$email,
					'password'=>$password,
					'role'=>$role,
					'profile'=>$employeeProfile,
					'department_id'=>$department,
					'position_id'=>$department, 
					'start_date'=>$start_date
				);
				if ($department != "" and $position != "") {
					$file->move("images",$employeeProfile);
					$this->user->insert($employeeData);
				} else { 
					// message error here with session 
				}
				return redirect()->to('/employee');
		}
		public function deleteEmployee($id){
			$employee = new UserModel();
			$employee->delete($id);
			return redirect()->to('/employee');
		}
		public function updateEmployee(){
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
							
					$id = $this->request->getVar('user_id');
					$firstname = $this->request->getVar('firstname');
					$lastname = $this->request->getVar('lastname');
					$email= $this->request->getVar('email');
					$password = $this->request->getVar('password');
					$role = $this->request->getVar('role');
					$profile= $this->request->getVar('profile');
					$department = $this->request->getVar('department');
					$position = $this->request->getVar('position');
					$start_date = date('Y-m-d H:i:s',strtotime($this->request->getVar('startdate')));
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
							$this->user->update($id, $employeeData);
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