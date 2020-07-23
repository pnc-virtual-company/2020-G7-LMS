<?php namespace App\Controllers;
use App\Models\PositionModel;

class Position extends BaseController

{
    protected $position;

    public function __construct() 
    {
        $this->position = new PositionModel();
    }
    
	public function position()
	{
        $data = [
            'positionData' => $this->position->getAllPosition(),
        ];
		return view('positions/position', $data);
	}
}