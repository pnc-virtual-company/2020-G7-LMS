<?php namespace App\Controllers;
use App\Models\PositionModel;

class Position extends BaseController

{
    protected $postion;

        public function __construct()
            {
            $this->position = new PositionModel();
            }
            public function index()
            {
            $data = [
            "title" => "List All position Information",
            'positionData' => $this->position->getAllPosition(),
            ];
            //print_r($data);
            return view('positions/position', $data);
        }

        //function create position
        public function createPosition()
        {
            $data = [];
            if($this->request->getMethod() == "post"){
            helper(['form']);
            $rules = [
                'po_name'=> [
                'rules'=> 'required|is_unique[positions.po_name]',
                'errors'=> [
                    'required'=> 'Sorry, positions field is required.',
                    'is_unique' => 'This positions name already exists.',
                ]
                ],
            ];
            
            if($this->validate($rules)){
            $position = $this->request->getVar('po_name');
            $data = array(
                'po_name' => $position
            );
            $this->position->insert($data);
            $sessionSuccess = session();
            $sessionSuccess->setFlashdata('success','Successful update position!');
            return redirect()->to('/position');
            }else{
                $data['validation'] = $this->validator;
                $sessionError = session();
                $validation = $this->validator;
                $sessionError->setFlashdata('error', $validation);
                return redirect()->to(base_url('/position'));
            }
        }
    }
        

        // delete position
        public function deletePosition($id)
            {
            $this->position->delete($id);
            return redirect()->to(base_url('/position'));
            }

            // Update position
            public function updatePosition()
            {
            $data = [];
            if($this->request->getMethod() == "post"){
            helper(['form']);
            $rules = [
                'po_name'=> [
                'rules'=> 'required|is_unique[positions.po_name]',
                'errors'=> [
                    'required'=> ' Position name can not empty! ',
                    'is_unique' => ' This positions name already exists ',
                ]
                ],
            ];
            if($this->validate($rules)){
            $positionId = $this->request->getVar('p_id');
            $position = $this->request->getVar('po_name');
            $data = array(
                'po_name' => $position
            );
            $this->position->update($positionId, $data);
            $sessionSuccess = session();
            $sessionSuccess->setFlashdata('success','Successful update position!');
            return redirect()->to('/position');
            }else{
                $data['validation'] = $this->validator;
                $sessionError = session();
                $validation = $this->validator;
                $sessionError->setFlashdata('error', $validation);
                return redirect()->to(base_url('/position'));
            }
        }
        }

   
}