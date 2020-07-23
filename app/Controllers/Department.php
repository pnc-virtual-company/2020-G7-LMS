<?php namespace App\Controllers;

use App\Models\DepartmentModel;

class Department extends BaseController
{
    protected $departments;

    public function __construct() 
    {
        $this->departments = new DepartmentModel();
    }

	public function department()
	{
        $data = [
            'departmentData' => $this->departments->getAllDepartment(),
        ];
		return view('departments/department', $data);
	}

	//--------------------------------------------------------------------

}
