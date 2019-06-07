<?php


class WilayahModel extends CI_Model{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

    function getWilayah()
    {
         $this->db->select('*');
        $this->db->from('rcapp_wilayah');
        $query = $this->db->get();
        return $query->result_array();
    }
    function create($data)
    {
        return $this->db->insert('rcapp_wilayah',$data);
    }

    

    function update($id,$data){
        $this->db->where('wilayah_id', $id);
        return $this->db->update('rcapp_wilayah', $data);
    }

    function delete($id){
        $this->db->where('wilayah_id',$id);
        return $this->db->delete('rcapp_wilayah');
    }

}