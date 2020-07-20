<?php namespace App\Controllers;

use App\Models\DepartmentModel;

class Department extends BaseController
{
    protected $department;

    public function __construct() 
    {
        $this->department= new DepartmentModel();
    }

	public function department()
	{
        $data = [
            "title" => "List All department Information",
            'departmentData' => $this->department->getAllDepartment(),
        ];
		return view('departments/department', $data);
	}

	//--------------------------------------------------------------------

}
