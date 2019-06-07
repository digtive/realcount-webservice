<?php


class PendaftaranModel extends CI_Model{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

    function getProv()
    {
        $this->db->select('*');
        $this->db->from('provinces');
        $query = $this->db->get();
        return $query->result_array();
    }
    function getKab()
    {
        $this->db->select('*');
        $this->db->from('regencies');
        $query = $this->db->get();
        return $query->result_array();
    }
    function getKec()
    {
        $this->db->select('*');
        $this->db->from('districts');
        $query = $this->db->get();
        return $query->result_array();
    }
    function getKel()
    {
        $this->db->select('*');
        $this->db->from('villages');
        $query = $this->db->get();
        return $query->result_array();
    }
    function create($data)
    {
        return $this->db->insert('rcapp_petugas',$data);
    }

    


    function update($id,$data){
        $this->db->where('Pendaftaran_id', $id);
        return $this->db->update('rcapp_Pendaftaran', $data);
    }

    function delete($id){
        $this->db->where('Pendaftaran_id',$id);
        return $this->db->delete('rcapp_Pendaftaran');
    }

}