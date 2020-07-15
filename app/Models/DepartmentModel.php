<?php namespace App\Models;

use CodeIgniter\Model;

class DepartmentModel extends Model
{
    protected $table      = 'department';
    protected $primaryKey = 'id';
    protected $returnType     = 'array';
    protected $allowedFields = ['name'];

    public function listdepartment($user)
    {
    $this->insert([
        'name'=>$user['name'],     
]);
    
    } 
}