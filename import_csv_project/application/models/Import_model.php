<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Import_model extends CI_Model {

    public $table = 'import_csv_details';

    public function __construct()
    {
        $this->load->database();
    }

    public function insert($data) {
        $res = $this->db->insert_batch('import_csv_details',$data);
        if($res){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    public function get_where($limit,$offset)
    {
        $query = $this->db->get($this->table, $limit, $offset);
        if($query->num_rows() > 0)
        {
            return $query->result_array();
        }
        else return array();
    }

    public function get_details($id)
    {
        $this->db->select('*');
        $this->db->from('import_csv_details');
        $this->db->where('id', $id);

        $query = $this->db->get();
        
        if($query->num_rows() > 0)
        {
            return $query->result_array();
        }
        else return array();
    }

}
?>