<?php namespace App\Controllers;
use App\Models\departmentModel;
class Department extends BaseController
{
	public function department()
	{
		$departmentModel = new departmentModel();
		$data['departments']=$departmentModel->findAll();
		return view('departments/department',$data);
	}

	public function addDepartment(){
		$data = [];
		
		$departmentModel = new departmentModel();
				$departmentName = $this->request->getVar('name');	
		$departmentData = array(
			'name'=>$departmentName,
		);
		$departmentModel->insert($departmentData);
		return redirect()->to('/departments');
}

		
}