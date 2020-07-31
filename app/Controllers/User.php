<?php namespace App\Controllers;
use App\Models\UserModel;
class User extends BaseController
{
	public function login()
	{
		helper(['form']);
		// helper(['form','url']);
		$data = [];
		if($this->request->getMethod() == "post"){
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
				// 'password' => 'required|validateUser[email,password]'
			];
			// $errors = [
			// 	'password' => [
			// 		'validateUser' => 'Email or Password not match! Please try again'
			// 	]
			// ];
	
			if(!$this->validate($rules)){
				$data['validation'] = $this->validator;
			}else{
				$model = new UserModel();
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
			'firstname' => $user['firstname'],
			'lastname' => $user['lastname'],
			'email' => $user['email'],
			'isLoggedIn' => true
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

