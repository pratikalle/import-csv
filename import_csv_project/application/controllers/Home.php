<?php

class Home extends CI_Controller
{

    public function index()
    {
        $this->load->view('view_file');
    }

    public function get_doc_data()
    {
        $this->load->model('import_model');

        $start = intval($_POST['start']);
		$draw = intval($_POST['draw']);
		$limit = intval($_POST['length']);

        $total_rows = count($this->import_model->get_where(false, false));

        $doc_data = $this->import_model->get_where(
            $limit,
            $start
        );

        $result=array();
		
		foreach($doc_data as &$doc)
		{

            $result[]=array(
                
                $doc['fname'],
                $doc['lname'],
                $doc['age'],
                $doc['address'],
                $doc['city']
            );
		}
		echo json_encode(array("draw"=>$draw, "recordsTotal"=>$total_rows, "recordsFiltered"=>$total_rows, "data"=>$result));



    }

    public function view_details($id)
    {
        $this->load->model('import_model');
        $data['details'] = $this->import_model->get_details($id);
        $this->load->view('view_details',$data);
    }



}




?>