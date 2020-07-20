<?php namespace App\Models;
use CodeIgniter\Model;

class PositionModel extends Model
{
    public function getAllPosition() 
    {
        return $this->db->table('positions')->get()->getResultArray();
    }
}