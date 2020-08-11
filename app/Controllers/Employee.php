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
			'userProfile' => $this->users->userProfile(),
		];
		return view('employees/index',$data);
	}
	// add employee
public function addEmployee(){
	if($this->request->getMethod() == "post"){
	helper(['form']);
	// validation create employee form
		$rules = [
			'firstname' =>[
			'rules'=>'required|is_unique[users.firstname]|min_length[3]|max_length[20]',
			'errors'=>[
			'required'=>'Last name cannot empty',
			'is_unique' => 'This employee firstname already exists.',
		],
	],
		'lastname' =>[
		'rules'=>'required|min_length[3]|max_length[20]',
		'errors'=>[
		'required'=>'First name is cannot empty',
		'is_unique' => 'This employee lastname already exists.',
		],
	],
		'email' =>[
		'rules'=>'required|min_length[6]|max_length[50]|valid_email',
		'errors'=>[
		'required'=>'Email address is cannot empty',
		'is_unique' => 'Email already exists.'
		],
	],
		'department' =>[
		'rules'=>'required',
	    'errors'=>[
		'required'=>'Department name is cannot empty'
		],
	],
		'position' =>[
		'rules'=>'required',
	    'errors'=>[
		'required'=>'Positon name is cannot empty'
		],
	],
];
	
	if($this->validate($rules)){
	// get value from input
		$firstname = $this->request->getVar('firstname');
		$lastname = $this->request->getVar('lastname');
		$email= $this->request->getVar('email');
		$password = $this->request->getVar('password');
		$role = $this->request->getVar('role');
		$department = $this->request->getVar('department');
		$position = $this->request->getVar('position');
		$manager = $this->request->getVar('manager');
		$start_date = $this->request->getVar('startdate');
		$profile = $this->request->getFile('profile');
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
		'manager' => $manager,
		'start_date'=>$start_date
	);
	// move images form database to folder images
	$this->users->registerUser($employeeData);
		if($file->getSize()> 0)
		{
			$file->move('./images', $employeeProfile);
		}

		$sessionSuccess = session();
		$sessionSuccess->setFlashdata('success','Successful insert employee!');
	}else{
		$sessionError = session();
		$validation = $this->validator;
		$sessionError->setFlashdata('error', $validation);
	}
	}
	return redirect()->to(base_url('/employee'));
	// delete employee
	}
		public function deleteEmployee($id){
			$employee = new UserModel();
			$employee->delete($id);
			return redirect()->to(base_url('/employee'));
		}
		// update Employee
		public function updateEmployee(){
			$employeeData = [];
			if($this->request->getMethod() == "post"){
			helper(['form']);
		//validation form employee
			$rules = [
			'firstname' =>[
				'rules'=>'required|is_unique[users.firstname]|min_length[3]|max_length[20]',
				'errors'=>[
				'required'=>'Last name cannot empty',
				'is_unique' => 'This employee firstname already exists.',
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
				'required'=>'Email address is cannot empty',
				'is_unique' => 'Email already exists.'
			],
		]
	];
			$id = $this->request->getVar('user_id');
			$firstname = $this->request->getVar('firstname');
			$lastname = $this->request->getVar('lastname');
			$email= $this->request->getVar('email');
			$password = $this->request->getVar('password');
			$profile= $this->request->getVar('profile');
			$department = $this->request->getVar('department');
			$position = $this->request->getVar('position');
			$start_date = $this->request->getVar('startdate');
			
			if($this->validate($rules) ){
			$employeeData = array(
				'firstname'=>$firstname,
				'lastname'=>$lastname,
				'email'=>$email,
				'password'=>$password,
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
				return redirect()->to(base_url('/employee'));
	}
			
} 
