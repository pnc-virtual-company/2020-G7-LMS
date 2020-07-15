<?php namespace App\Models;

use CodeIgniter\Model;

class EmployeeModel extends Model
{
    protected $table      = 'user';
    protected $primaryKey = 'id';
    protected $returnType     = 'array';
    protected $allowedFields = ['firstname','lastname', 'email','password','role','profile','start_date','department_id','position_id'];

    public function addStudent($studentInfo){
        $this->insert([
            'name'=>$studentInfo['name'],
            'email'=>$studentInfo['email'],
            'age'=>$studentInfo['age'],
            'profile'=>$studentInfo['profile']
        ]);
    }
}
