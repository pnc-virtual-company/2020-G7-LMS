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

	
	public function createDepartment()
	{
		$data = [];
		if ($this->request->getMethod() == "post") {
			helper(['form']);
			$rules = [
				'de_name' => [
					'rules' => 'required|is_unique[departments.de_name]',
					'errors' => [
						'required' => 'Sorry, department field is required',
						'is_unique' => 'This department name already exists.',
					]
				],
			];

			if ($this->validate($rules)) {
				$department = $this->request->getVar('de_name');
				$data = array(
					'de_name' => $department
				);
				$this->department->insert($data);
				$sessionSuccess = session();
				$sessionSuccess->setFlashdata('success','Successful update department!');
				return redirect()->to('/department');
			} else {
				$data['validation'] = $this->validator;
				$sessionError = session();
				$validation = $this->validator;
				$sessionError->setFlashdata('error', $validation);
				return redirect()->to('/department');
			}

		}
	}

	// delete department
	public function deleteDepartment($id)
	{
		$this->department->delete($id);
		return redirect()->to('/department');
	}

	// Update department
	public function updateDepartment()
	{
	$data = [];
	if($this->request->getMethod() == "post"){
	helper(['form']);
	$rules = [
		'de_name'=> [
		'rules'=> 'required|is_unique[departments.de_name]',
		'errors'=> [
			'required'=> ' Department name can not empty! ',
			'is_unique' => ' This department name already exists ',
		]
		],
	];
	
	if($this->validate($rules)){
	$departmentId = $this->request->getVar('d_id');
	$department = $this->request->getVar('de_name');
	$data = array(
		'de_name' => $department
	);
	$this->department->update($departmentId, $data);
	$sessionSuccess = session();
	$sessionSuccess->setFlashdata('success','Successful update department!');
	return redirect()->to('/department');
	}else{
		$data['validation'] = $this->validator;
		$sessionError = session();
		$validation = $this->validator;
		$sessionError->setFlashdata('error', $validation);
		return redirect()->to('/department');
	}
}
}
}
