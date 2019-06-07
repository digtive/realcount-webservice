<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AuthModel extends CI_Model{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    function getUser(){
        $this->db->order_by('user_date_created','DESC');
        $query = $this->db->get('rcapp_petugas');
        return $query->result_array();
    }

    function getUsers($user){
        return $this->db->get_where('rcapp_petugas',$user);
    }

    function getId($id){
        return $this->db->get_where('rcapp_petugas',$user);
    }
    function getUserAccount($user){
        $query = $this->db->get_where('rcapp_petugas',$user);
        return $query->row_array();
    }
    function getUserById($id)
    {
        $this->db->from('rcapp_petugas');
        $this->db->where('petugas_username',$id);
        $query = $this->db->get();
        return $query->row_array();
    }
    function createUser($dataUser)
    {
        return $this->db->insert('rcapp_petugas',$dataUser);
    }
    function deleteUser($id)
    {
        $this->db->where('user_id',$id);
        return $this->db->delete('rcapp_petugas');
    }
    function UbahPassword($data,$id)
    {

        $this->db->where('petugas_username',$id);
        $this->db->update('rcapp_petugas',$data);
    }
}


