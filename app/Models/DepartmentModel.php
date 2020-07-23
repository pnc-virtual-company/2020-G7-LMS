<?php namespace App\Models;
use CodeIgniter\Model;

class DepartmentModel extends Model
{
    protected $table      = 'departments';
    protected $primaryKey = 'de_id';

    protected $returnType     = 'array';

    protected $allowedFields = ['de_name']; 
    
    public function getAllDepartment() 
    {
        return $this->db->table('departments')->get()->getResultArray();
    }
}