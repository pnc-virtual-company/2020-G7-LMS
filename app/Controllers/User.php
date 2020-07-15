<?php namespace App\Controllers;

class User extends BaseController
{
	public function login()
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
				return view('login/login',$data);
			}else{
				$model = new UserModel();
				$user = $model->where('email',$email)->first();
				
				$this->setUserSession($user);
				$session = session();
				$session->setFlashdata('success','Successfully');
				return redirect()->to('/your_leave');
			}

		}
		
	}

	public function setUserSession($user){
		// set session for user
		$data = [
			'id' => $user['id'],
			'firstname' => $user['firstname'],
			'lastname' => $user['lastname'],
			'email' => $user['email'],
			'password' => $user['password'],
			'role' => $user['role'],
			'profile' => $user['profile'],
			'start_date' => $user['start_date'],
			'department_id' => $user['department_id'],
			'position_id' => $user['position_id'],
			'isLoggedIn' => true,
		];
		session()->set($data);
		return true;
	}

	public function logout()
	{
		session()->destroy();
		return redirect()->to('/');
	}

}