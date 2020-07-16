<?php namespace App\Models;

use CodeIgniter\Model;

class EmployeeModel extends Model
{
    
    public function get_employee(){
        return $this->db->table('user')
        ->join('department','department.id = user.id' )
        ->join('position','position.id = user.id' )
        ->get()->getResultArray();
    }
    protected $table      = 'user';
    protected $primaryKey = 'id';
    protected $returnType     = 'array';
    protected $allowedFields = ['firstname','lastname', 'email','password','role','profile','start_date','department_id','position_id'];
   
        
}
