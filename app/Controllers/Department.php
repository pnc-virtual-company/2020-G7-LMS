<?php namespace App\Controllers;
use App\Models\departmentModel;
class Department extends BaseController
{
	public function department()
	{
		$departmentModel = new DepartmentModel();
		$data['departments']=$departmentModel->findAll();
		return view('departments/department',$data);
	}

	public function addDepartment(){
		$data = [];
		
		$departmentModel = new DepartmentModel();
				$departmentName = $this->request->getVar('name');	
		$departmentData = array(
			'name'=>$departmentName,
		);
		$departmentModel->insert($departmentData);
		return redirect()->to('/departments');
}

		// edit department

		public function editDepartment($id)
		{
			$model = new DepartmentModel();
			$data['edit'] = $model->find($id);
			return view('departments',$data);
		}
	
		// update department
	
		public function updateDepartment()
		{
			$model = new DepartmentModel();
			$model->update($_POST['id'],$_POST);
			return redirect()->to('/departments');
		}

		// delete department
	public function deleteDepartment($id){
		$department = new DepartmentModel();
		$department->delete($id);
		$department->where("id",$id);
		return redirect()->to('/departments');
	}
		
		
}