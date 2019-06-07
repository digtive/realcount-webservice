<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TpsController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->model('TpsModel');
        date_default_timezone_set('Asia/Jakarta');
        // if (!$this->session->has_userdata('session_username')) {
        //     redirect(site_url('login'));
        // }
        // if ($this->session->userdata('session_username') === '') {
        //     redirect(site_url('login'), 'refresh');
        // }
        
	}
	
	
	function index()
    {
        $data['suara'] = $this->TpsModel->getSuara();
        $this->load->view('templates/header');
        $this->load->view('backend/suara/index',$data);
        $this->load->view('templates/footer');
    }
    function tes()
    {
        
        $this->load->view('templates/header');
        $this->load->view('backend/tps/index');
        $this->load->view('templates/footer');
    }



    public function daftar()
    {       


        $tps_id ='2019-'.substr(time(),3);
        for ($i=1; $i <=$this->input->post('jml_tps') ; $i++) { 
            $data[$i] = array(
                'tps_id' => $tps_id.'-'.$i ,
                'tps_nohp' => $this->input->post("no_hp".$i)
                        );

        }
        if (isset($_POST)) {
            for ($i=1; $i <=$this->input->post('jml_tps') ; $i++) { 
             $this->TpsModel->create($data[$i]);
            }
            echo "Berhasil";
        } else {
            redirect('tps');
        }
    }
}
