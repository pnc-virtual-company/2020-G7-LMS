<?php namespace App\Controllers;
use App\Models\PositionModel;

class Position extends BaseController

{
    protected $postion;

    public function __construct() 
    {
        
        $this->position= new PositionModel();
    }
	public function position()
	{
        $data = [
            "title" => "List All position Information",
            'positionData' => $this->position->getAllPosition(),
        ];
		return view('positions/position', $data);
	}
}