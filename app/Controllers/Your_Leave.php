<?php namespace App\Controllers;
use App\Models\YourLeaveModel;
use DateTime;

class Your_Leave extends BaseController
{
	protected $yourLeave;

    public function __construct() 
    {
        $this->yourLeave = new YourLeaveModel();
    }
	public function index()
	{
		$data = [
            'yourLeaveData' => $this->yourLeave->getAllYourLeave(),
        ];
		return view('your_leave/your_leave',$data);
	}
	public function addYourLeave()
	{
		$yourLeaveData = [];
		helper(['form']);
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
		];			
		if($this->request->getMethod() == "post"){
			$startDate = $this->request->getVar('start_date');
			$exStartDate = $this->request->getVar('time_start');
			$endDate = $this->request->getVar('end_date');
			$exEndDate = $this->request->getVar('time_end');
			$duration = $this->request->getVar('duration');
			$leaveType = $this->request->getVar('leave_type');
			$comment = $this->request->getVar('comment');
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
			);	
				$this->yourLeave->insert($yourLeaveData);
		//Send email
			
			$email_manager = 'chanthoeurn.tuon@student.passerellesnumeriques.org';
			$email_hr = 'chanthoeurntuon20@gmail.com';
			$subject = "codeIgniter 4 Send Email Test";
			$rejectAccept = '<p style="margin-left: 20px;">Can you please <a href="/sendback" onclick="myFunction()">ACCEPT</a> OR <a href="/sendback" onclick="myFunction()">REJECT</a>';
			
			$message =   "
			<fieldset>
				From:nisayourm@gmail.com<br>
				To:chanthoeurn.tuon@student.passerellesnumeriques.org <br>
				Subject: New leave request assigned to you in E-LMSimple
				<br>
				<hr>
				<p > Hello Jack Thomas,</p>
				<p>Employee lina jacks has submited the following request for approval:</p>
				<div>
					<p ><strong>Start date: </strong>&nbsp;&nbsp;$startDate &nbsp;($exStartDate) </p>
					<p><strong>Emd date: </strong>&nbsp;&nbsp;$endDate &nbsp;($exEndDate)</p>
					<p><strong>Duration: </strong>&nbsp;&nbsp; $duration</p>
					<p><strong>Leave type </strong>&nbsp;&nbsp;$leaveType</p>
				</div>
				<div>
					<p><strong>Comment: </strong>&nbsp;&nbsp; $comment</p>
					<p><strong>Employee: </strong>&nbsp;&nbsp;</p>
					<p><strong>Staus: </strong>&nbsp;&nbsp; Request</p>
				</div>
				$rejectAccept
				this leave request you can also access to >leave request details </a>to review this request</p>
				<p>Thank & regard,</p>
				<p>HR officer </p>
				<br><br>
				Best Regqrds,<br><br>
				CodeIgniter 4
				
			</fieldset>
			";	
					$email = \Config\Services::email();
					$email->setFrom('nysar@example.com', 'Nysar');
					$email->setTo(array($email_manager,$email_hr));
					$email->setSubject($subject);
					$email->setMessage(	$message);	
					if($email->send()){
						echo "Success sending";
					}else{
						echo "Cannot send";
					}
				$sessionSuccess = session();
				$sessionSuccess->setFlashdata('success','Successful create leave request!');

			}else{
				$sessionError = session();
				$validation = $this->validator;
				$sessionError->setFlashdata('error', $validation);
		}
		return redirect()->to('/your_leave');
	}
	//delete your leave 
	public function deleteYourLeave($id){
		$this->yourLeave->delete($id);
		return redirect()->to('/your_leave');
	}
	//--------------------------------------------------------------------
}
