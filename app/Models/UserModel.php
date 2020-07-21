<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    
    public function getAllUser(){
        return $this->db->table('users')
        ->join('departments', 'departments.de_id = users.department_id')
        ->join('positions', 'positions.po_id = users.position_id')
        ->get()->getResultArray();
    }
    protected $table      = 'users';
    protected $primaryKey = 'id';
    protected $returnType     = 'array';
    protected $allowedFields = ['firstname','lastname', 'email','password','role','profile','start_date','department_id','position_id'];
}
 