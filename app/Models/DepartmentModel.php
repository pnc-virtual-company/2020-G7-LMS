<?php namespace App\Models;
use CodeIgniter\Model;

class DepartmentModel extends Model
{
    public function getAllDepartment() 
    {
        return $this->db->table('departments')->get()->getResultArray();
    }
}