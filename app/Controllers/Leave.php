<?php namespace App\Controllers;
use App\Models\YourLeaveModel;
use App\Models\UserModel;
class Leave extends BaseController
{
	protected $Leave;
	protected $users;
    public function __construct() 
    {
		$this->Leave = new YourLeaveModel();
		$this->users = new UserModel(); 
    }
	public function showLeave()
	{
		$data = [
			'LeaveData' => $this->Leave->getAllYourLeave(),
			'userData' => $this->users->getAllUser(),
			'userProfile' => $this->users->userProfile(),
        ];
		return view('leaves/leave',$data);
	}
	public function index()
	{
		$to = 'chanthoeurn.tuon@student.passerellesnumeriques.org';
		$subject = "codeIgniter 4 Send Email Test";
		$message = '<fieldset style = "border:1px;dotted teal;"> Dear Rady,<br><br>
					Thank you for your information.<br><br>
					<a href = "'.base_url().'/email/verify"
					style = "padding:5px 20px 5px 20px;background:orage; color:blue;text-decoration:none;border-radius:40px">Confirm</a> 
					<br><br>
					Best Regqrds,<br><br>
					CodeIgniter 4
					</fieldset>
			';
			$email = \Config\Services::email();
			$email->setTo($to);
			$email->setfrom('nisayourm@gmail.com','Test send email');
			$email->setSubject($subject);
			$email->setMessage($message);
			$email->send();
			return redirect()->to('/leaves');
	}
	public function verify()
	{
		return "Email account actived";
	}

	//--------------------------------------------------------------------
}