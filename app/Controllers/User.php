<?php namespace App\Controllers;
use App\Models\UserModel;
class User extends BaseController
{
	public function login()
	{
		helper(['form']);
		$data = [];
		if($this->request->getMethod() == "post"){
			// validation form login
			$rules = [
				'email' => [
					'rules'=>'required|valid_email',
					'label'=>'Email',
					'errors'=>[
						'required'=>'email is required',
						'valid_email'=>'email invalid'

					]
				],
				'password' => [
					'rules'=>'required|validateUser[email,password]',
					'label'=>'Password',
					'errors'=>[
						'required'=>'Password is required',
						'validateUser'=>'email and password incorect '
					]

				],
				
			];
			if(!$this->validate($rules)){
				$data['validation'] = $this->validator;
			}else{
				$model = new UserModel();
				$user = $model->where('email',$this->request->getVar('email'))
							  ->first();
				$this->setUserSession($user);
				return redirect()->to(base_url('/your_leave'));
			}
		}
		return view('login/login',$data);
	}
	
	// set value to new session
	public function setUserSession($user){
		$data = [
			'id' => $user['id'],
			'firstname' => $user['firstname'],
			'lastname' => $user['lastname'],
			'position_id' => $user['position_id'],
			'department_id' => $user['department_id'],
			'email' => $user['email'],
			'start_date' => $user['start_date'],
			'password' => $user['password'],
			'role' => $user['role'],
			'isLoggedIn' => true
		];
		session()->set($data);
		return true;
	}
	// Logout remove session 
	public function logout()
	{
		session()->destroy();
		return redirect()->to(base_url('/'));
	}
}
