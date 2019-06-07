<?php


class TpsModel extends CI_Model{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

    function getSuara()
    {
         $this->db->select('*');
        $this->db->from('rcapp_tps');
        $query = $this->db->get();
        return $query->result_array();
    }
    function create($data)
    {
        return $this->db->insert('rcapp_tps',$data);
    }

    

    function update($id,$data){
        $this->db->where('tps_id', $id);
        return $this->db->update('rcapp_tps', $data);
    }

    function delete($id){
        $this->db->where('tps_id',$id);
        return $this->db->delete('rcapp_tps');
    }

}