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
		$data = [];
		helper(['form']);
		if($this->request->getMethod() == "post"){
			$startDate = $this->request->getVar('start_date');
			$exStartDate = $this->request->getVar('ex_start');
			$endDate = $this->request->getVar('end_date');
			$exEndDate = $this->request->getVar('ex_end');
			$duration = $this->request->getVar('duration');
			$leaveType = $this->request->getVar('leave_type');
			$comment = $this->request->getVar('comment');
		}	
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
		return redirect()->to('/your_leave');
	}
	//delete your leave 
	public function deleteYourLeave($id){
		$this->yourLeave->delete($id);
		return redirect()->to('/your_leave');
	}
	//--------------------------------------------------------------------
}
