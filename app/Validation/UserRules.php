<?php 
namespace App\Validation;
use App\Models\UserModel;
class UserRules{
    public function validateUser(string $str,string $fields, array $data){
        $model = new UserModel();
        $user = $model->where('de_name',$data['de_name'])->first();
        if(!$user){
            return false;
      
        }
    }
}