<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'user';
    protected $primaryKey = 'id';
    protected $returnType     = 'array';
    protected $allowedFields = ['firstname','lastname','email', 'password','role','profile','start_date','department_id','position_id'];
 
}
