<?php 
namespace App\Validation;
use App\Models\UserModel;
class UserRules{
    public function validateUser(string $str,string $fields, array $data){
        $model = new UserModel();
        $user = $model->where('email',$data['email'])->first();
        $password = $model->where('password',$data['password'])->first();
        if(!$user || !$password ){
            return false;
        return password_verify($data['password'],$user['password']);
        }
    }
}