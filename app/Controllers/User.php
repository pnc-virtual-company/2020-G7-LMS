<?php namespace App\Controllers;

class User extends BaseController
{
	public function login()
	{
		helper(['form']);
		$data = [];
		if($this->request->getMethod() == "post"){
			$rules = [
				'email' => 'required|valid_email',
				'password' => 'required|validateUser[email,password]'
			];
			$errors = [
				'password' => [
					'validateUser' => 'email and password not match'
				]
			];
	
			if(!$this->validate($rules,$errors)){
				$data['validation'] = $this->validator;
			}else{
				$model = new UsersModel();
				$user = $model->where('email',$this->request->getVar('email'))
							  ->first();
				$this->setUserSession($user);
				return redirect()->to('/your_leave');
			}
		}
		return view('login/login',$data);
	}
	
	// set value to new session
	public function setUserSession($user){
		$data = [
			'id' => $user['id'],
			'email' => $user['email'],
			'password' => $user['password'],
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