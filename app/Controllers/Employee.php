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
	// Add employee
	public function addEmployee(){
		
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
				if ($position != "" and $department != "") {
					$file->move("images",$employeeProfile);
					$this->users->insert($employeeData);
				} else { 
					// message error here with session 
				}
				return redirect()->to('/employee');
		}
		// delete employee
		public function deleteEmployee($id){
			$employee = new UserModel();
			$employee->delete($id);
			return redirect()->to('/employee');
		}
}