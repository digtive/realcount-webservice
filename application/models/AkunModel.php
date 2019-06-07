<?php


class AkunModel extends CI_Model{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

    function getPengguna()
    {
         $this->db->select('*');
        $this->db->from('rcapp_pengguna');
        $query = $this->db->get();
        return $query->result_array();
    }
    function create($data)
    {
        return $this->db->insert('rcapp_pengguna',$data);
    }

    

    function update($id,$data){
        $this->db->where('pengguna_id', $id);
        return $this->db->update('rcapp_pengguna', $data);
    }

    function delete($id){
        $this->db->where('pengguna_id',$id);
        return $this->db->delete('rcapp_pengguna');
    }

}