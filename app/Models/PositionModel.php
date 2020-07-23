<?php namespace App\Models;
use CodeIgniter\Model;

class PositionModel extends Model
{
    protected $table      = 'positions';
    protected $primaryKey = 'po_id';
    protected $returnType     = 'array';
    protected $allowedFields = ['po_name']; 
    public function getAllPosition() 
    {
        return $this->db->table('positions')->get()->getResultArray();
    }
}