<?php namespace App\Models;
use CodeIgniter\Model;

class YourLeaveModel extends Model
{
    protected $table      = 'your_leave';
    protected $primaryKey = 'le_id';
    protected $returnType     = 'array';
    protected $allowedFields = ['start_date','exactime_start','end_date','exactime_end','duration','leave_type','comment','user_id'];
    public function getAllYourLeave() 
    {
        return $this->db->table('your_leave')->get()->getResultArray();
    }
}