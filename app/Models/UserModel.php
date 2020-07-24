<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    
    protected $table      = 'users';
    protected $primaryKey = 'id';
    protected $returnType     = 'array';
    protected $allowedFields = ['firstname','lastname', 'email','password','role','profile','start_date','department_id','position_id'];
  
    public function getAllUser(){
        return $this->db->table('users')
        ->join('positions', 'users.position_id = positions.po_id')
        ->join('departments', 'departments.de_id = users.department_id')
        ->get()->getResultArray();
    }
}
 
