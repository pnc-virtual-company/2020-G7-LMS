<?php namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
    protected $table      = 'users';
    protected $primaryKey = 'id';
    protected $returnType     = 'array';
    protected $allowedFields = ['lastname','lastname','email', 'password','role','profile','start_date','department_id','position_id'];

    public function registerUser($user)
    {
        $this->insert([
            'firstname'=>$user['firstname'],
            'lastname'=>$user['lastname'],
            'email'=>$user['email'],
            'password'=>password_hash($user['password'],PASSWORD_DEFAULT),
            'role'=>$user['role'], 
            'profile'=>$user['profile'],
            'start_date'=>$user['start_date'], 
            'department_id'=>$user['department_id'], 
            'position_id'=>$user['position_id'], 
        ]);
    }
  
}