<?php


class PetugasModel extends CI_Model{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

    function getPetugas()
    {
         $this->db->select('*');
        $this->db->from('rcapp_petugas');
        $query = $this->db->get();
        return $query->result_array();
    }
    function create($data)
    {
        return $this->db->insert('rcapp_petugas',$data);
    }

    


    function update($id,$data){
        $this->db->where('petugas_id', $id);
        return $this->db->update('rcapp_petugas', $data);
    }

    function delete($id){
        $this->db->where('petugas_id',$id);
        return $this->db->delete('rcapp_petugas');
    }

}