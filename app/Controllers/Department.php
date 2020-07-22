<?php

namespace App\Controllers;

use App\Models\DepartmentModel;

class Department extends BaseController

{
	protected $department;

	public function __construct()
	{
		$this->department = new DepartmentModel();
	}
	public function index()
	{
		$data = [
			"title" => "List All department Information",
			'departmentData' => $this->department->getAllDepartment(),
		];
		//print_r($data);
		return view('departments/department', $data);
	}

	// create positon
	public function createDepartment()
	{
		$department = $this->request->getVar('department');
		$data = array(
			'de_name' => $department
		);
		if ($department != "") {
			$this->department->insert($data);
		}
		return redirect()->to("/department");
		
	}

	// delete position
	public function deleteDepartment($id)
	{
		$this->department->delete($id);
		return redirect()->to('/department');
	}

	// Update position
	public function updateDepartment()
	{
		$departmentId = $this->request->getVar('d_id');
		$department = $this->request->getVar('department');
		$data = array(
			'de_name' => $department
		);
		$this->department->update($departmentId, $data);
		return redirect()->to('/department');
	}

	
	}

