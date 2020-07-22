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

    // create positon
        public function createPosition()
        {
            $position = $this->request->getVar('position');
            $data = array(
            'po_name' => $position
            );
            if ($position != "") {
            $this->position->insert($data);
            }
            return redirect()->to("/position");

            // if ($this->form_validation->run() == false) {
            //     $this->session->set_flashdata("message", validation_errors());
            //     $this->session->set_flashdata("fullname", $this->input->post('fullName'));
            // } else {
            //     $this->session->set_flashdata("message", "The email has successfully been sent!");
            // }
            // redirect("site/contact");
        }

    // delete position
        public function deletePosition($id)
            {
            $this->position->delete($id);
            return redirect()->to('/position');
            }

            // Update position
            public function updatePosition()
            {
            $positionId = $this->request->getVar('p_id');
            $position = $this->request->getVar('position');
            $data = array(
            'po_name' => $position
            );
            $this->position->update($positionId, $data);
            return redirect()->to('/position');
        }

}