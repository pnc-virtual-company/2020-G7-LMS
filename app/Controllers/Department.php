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
		$data = [];
		if($this->request->getMethod() == "post"){
		$department = $this->request->getVar('department');
		helper(['form']);
		$rules = [
		'de_name'=>'required',
		];
		$departmentData = array(
			'de_name' => $department
		);
		if($this->validate($rules)){
		
			$this->department->insert($departmentData);
		
			$sessionSuccess = session();
			$sessionSuccess->setFlashdata('success','Successful create department!');
		}else{
			$sessionError = session();
			$validation = $this->validator;
			$sessionError->setFlashdata('error', $validation);
		}
	}
		
		return redirect()->to("/department");
		
	}

	// delete department
	public function deleteDepartment($id)
	{
		$this->department->delete($id);
		return redirect()->to('/department');
	}

	// // Update department
	// public function updateDepartment()
	// {
	// 	$departmentId = $this->request->getVar('d_id');
	// 	$department = $this->request->getVar('department');
	// 	$data = array(
	// 		'de_name' => $department
	// 	);
	// 	$this->department->update($departmentId, $data);
	// 	return redirect()->to('/department');
	// }

	
public function updateDepartment(){
	$data = [];
	if($this->request->getMethod() == "post"){
	helper(['form']);
	$rules = [
	'po_name'=>'required',
	];
	
	if($this->validate($rules)){
	
	$departmentId = $this->request->getVar('p_id');
	$department = $this->request->getVar('department');
	$data = array(
	'de_name' => $department
	);
	$this->department->update($departmentId, $data);
	return redirect()->to('/department');
	
	$this->user->update($departmentId, $department);
	$sessionSuccess = session();
	$sessionSuccess->setFlashdata('success','Successful update department!');
	}else{
	$sessionError = session();
	$validation = $this->validator;
	$sessionError->setFlashdata('error', $validation);
	}
	}
	return redirect()->to('/department');
	}
	

	
	}

