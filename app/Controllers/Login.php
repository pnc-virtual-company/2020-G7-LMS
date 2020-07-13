<?php namespace App\Controllers;
use App\Models\LoginModel;
class Login extends BaseController
{
	public function index()
	{
		return view('login/login');
	}

	public function loginAccount()
	{
		helper(['form']);
		$data = [];
		// do the validation
		if($this->request->getMethod() == "post"){
			$rules = [
				'email' => 'required|valid_email',
				'password' => 'required|alpha_numeric_punct|validateUser[email,password]'
			];
			$error = [
				'password' => [
					'validateUser' => 'email and password not match!'
				]
			];

			$email = $this->request->getVar('email');
			if(!$this->validate($rules,$error)){
				$data['message'] = $this->validator;
				return view('auths/login',$data);
			}else{
				$model = new UserModel();
				$user = $model->where('email',$email)->first();
				
				// set session for user register success and then back to login and show Successfully
				$this->setUserSession($user);
				$session = session();
				$session->setFlashdata('success','Successfully');
				return redirect()->to('/');
			}

		}
		
	}

	public function setUserSession($user){
		// set session for user
		$data = [
			'id' => $user['id'],
			'email' => $user['email'],
			'password' => $user['password'],
			'address' => $user['address'],
			'role' => $user['role']
		];
		session()->set($data);
		return true;
	}

	// register account
	public function registerAccount()
	{
		$data = [];
		helper(['form']);
		// validation form register
		if($this->request->getMethod() == "post"){
			$rules = [
				'firstname'=> 'required',
				'lastname'=> 'required',
				'email'=> 'required|valid_email',
				'password'=> 'required|alpha_numeric_punct',
				'start_date' => 'required',
				'department_id' => 'required'
			];
			 if(!$this->validate($rules)){
				$data['validation'] = $this->validator;
				return view('auths/register',$data);

			}else{
				// insert to database
				$userModel = new UserModel();
				$firstname = $this->request->getVar('firstname');
				$lastname = $this->request->getVar('lastname');
				$email = $this->request->getVar('email');
				$password = $this->request->getVar('password');				
				$role = $this->request->getVar('checkUser');
				$profile = $this->request->getVar('profile');
				$start_date = $this->request->getVar('start_date');
				$department_id = $this->request->getVar('department_id');
				$position_id = $this->request->getVar('position_id');
				$userData = [ 
					'firstname'=>$firstname ,
					'lastname'=>$lastname ,
					'email'=>$email ,
					'password'=>$password ,
					'role'=>$role ,	
					'profile'=>$profile ,
					'start_date'=>$start_date ,
					'department_id'=>$department_id ,
					'position_id'=>$position_id ,
				];

				$userModel->registerUser($userData);
				$session = session();
				$session->setFlashdata('success','Successfully');
				return redirect()->to('/');
			}
		}

	}

}
