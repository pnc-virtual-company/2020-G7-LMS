<?php namespace App\Controllers;
use App\Models\YourLeaveModel;
use App\Models\UserModel;
class Your_Leave extends BaseController
{
	protected $yourLeave;

    public function __construct() 
    {
		$this->yourLeave = new YourLeaveModel();
		$this->users = new UserModel();
    }
	public function index()
	{
		$data = [
			'yourLeaveData' => $this->yourLeave->getAllYourLeave(),
			'userProfile' => $this->users->userProfile(),
        ];
		return view('your_leave/your_leave',$data);
	}
	public function addYourLeave()
	{
		$yourLeaveData = [];
		helper(['form']);
		// Validation leave request 
		$rules = [
			'start_date' =>[
				'start_date' => 'required',
				'errors'=>[
				'required'=>'The start date must be to select!',
				],
			],
			'end_date' =>[
				'end_date' => 'required',
				'errors'=>[
				'required'=>'The end date must be to select!'
				],
			],
			'duration' =>[
				'duration' => 'required',
				'errors'=>[
				'required'=>'The duration cannot empty!'
				],
			],
		
		];			
		if($this->request->getMethod() == "post"){
			// get value from input form leave request
			$startDate = $this->request->getVar('start_date');
			$exStartDate = $this->request->getVar('time_start');
			$endDate = $this->request->getVar('end_date');
			$exEndDate = $this->request->getVar('time_end');
			$duration = $this->request->getVar('duration');
			$leaveType = $this->request->getVar('leave_type');
			$comment = $this->request->getVar('comment');
			$userId = $this->request->getVar('user_id');
		}	
		if($this->validate($rules)){
			$yourLeaveData = array(
				'start_date'=>$startDate,
				'exactime_start'=>$exStartDate,
				'end_date'=>$endDate,
				'exactime_end'=>$exEndDate,
				'duration'=>$duration,
				'leave_type'=>$leaveType,
				'comment'=>$comment,
				'user_id'=>$userId,
			);	
				$this->yourLeave->insert($yourLeaveData);
		//Send email
			$sendTo = 'nisayourm@gmail.com';
			$ccTo = 'sokly.phorn@gmail.com';
			$subject = "Leave Request";
			$employeeName = strstr(session()->get('email'),'@',true);
			$emailEmployee = session()->get('email');
			$message =   "
			<fieldset>
				From: $emailEmployee <br>
				To:nisayourm@gmail.com <br>
				Subject: $subject
				<br>
				<hr>
				<p > Hello Jack Thomas,</p>
				<p>Employee $employeeName submited the following request for approval:</p>
				
				<div class='card p-3 bg-light ml-5' >
				<div class='row-body' style='width:85%; margin:0 auto; border: 2px solid rgb(43, 42, 42); background-color: rgb(201, 198, 198); display: flex;'>
					<div class='col-6' style=' padding:10px; margin-left:30px;'>
					<p ><strong>Start date: </strong>&nbsp;&nbsp;$startDate</p>
					<p><strong>End date: </strong>&nbsp;&nbsp;$endDate </p>
					<p><strong>Duration: </strong>&nbsp;&nbsp; $duration</p>
					<p><strong>Leave type </strong>&nbsp;&nbsp;$leaveType</p>
				</div>					
				<div class='col-6' style='  padding:10px; margin-left:30px;'>
					<p><strong>Comment: </strong>&nbsp;&nbsp; $comment</p>
					<p><strong>Employee: </strong>&nbsp;&nbsp;$employeeName </p>
					<p><strong>Status: </strong>&nbsp;&nbsp; Request</p>
				</div>
			</div>
			<p style='margin-left: 20px;'>Can you please <a href='/sendback' onclick='myFunction()'>ACCEPT</a> OR <a href='/sendback' onclick='myFunction()'>REJECT</a>
			this leave request you can also access to <a href='http://localhost:8080/'>leave request details </a>to review this request.</p>
		</div>
			Best Regqrds,<br><br>
			$employeeName
		</fieldset>
	";	
					$email = \Config\Services::email();
					$email->setFrom($emailEmployee , $employeeName);
					$email->setTo(array($sendTo,$ccTo));
					$email->setSubject($subject);
					$email->setMessage(	$message);	
					$email->send();	
				$sessionSuccess = session();
				$sessionSuccess->setFlashdata('success','Successful create leave request!');

			}else{
				$sessionError = session();
				$validation = $this->validator;
				$sessionError->setFlashdata('error', $validation);
		}
		return redirect()->to(base_url('/your_leave'));
	}
	//delete your leave 
	public function deleteYourLeave($id){
		$this->yourLeave->delete($id);
		return redirect()->to(base_url('/your_leave'));
	}
	//--------------------------------------------------------------------
}
