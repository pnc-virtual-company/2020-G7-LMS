<?php namespace App\Models;

use CodeIgniter\Model;


class UserModel extends Model
{
    
    protected $table      = 'users';
    protected $primaryKey = 'id';
    protected $returnType     = 'array';
    protected $allowedFields = ['firstname','lastname', 'email','password','role','profile','start_date','department_id','position_id', 'manager'];
  
    public function getAllUser(){
        return $this->db->table('users')
        ->join('positions', 'users.position_id = positions.po_id')
        ->join('departments', 'departments.de_id = users.department_id')
        ->get()->getResultArray();
    }

    public function userProfile(){
        $userId = session()->get('id');
        return $this->db->table('users')
        ->join('positions', 'users.position_id = positions.po_id')
        ->join('departments', 'departments.de_id = users.department_id')
        ->where('id = "'.$userId.'"')
        ->get()->getResultArray();
    }
    public function registerUser($userInfo){

        $firstname = $userInfo['firstname'];
        $lastname = $userInfo['lastname'];
        $email = $userInfo['email'];
        $passwordEncrypted = password_hash($userInfo['password'],PASSWORD_DEFAULT);
        $role = $userInfo['role'];
        $profile = $userInfo['profile'];
        $start_date = $userInfo['start_date'];
        $manager = $userInfo['manager'];
        $department_id = $userInfo['department_id'];
        $position_id = $userInfo['position_id'];

        $this->insert([
            'firstname' 	=> $firstname,
            'lastname' 	=> $lastname,
            'email' 	=> $email,
            'password' 	=> $passwordEncrypted,
            'role' 		=> $role,
            'profile' 		=> $profile,
            'start_date' 		=> $start_date,
            'manager' 		=> $manager,
            'department_id' 		=> $department_id,
            'position_id' 		=> $position_id,
        ]);
    }
} 
 
