<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WilayahController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->model('WilayahModel');
        date_default_timezone_set('Asia/Jakarta');
        // if (!$this->session->has_userdata('session_username')) {
        //     redirect(site_url('login'));
        // }
        // if ($this->session->userdata('session_username') === '') {
        //     redirect(site_url('login'), 'refresh');
        // }
        
	}
	
	
	public function index()
	{
		$data['wilayah'] = $this->WilayahModel->getWilayah();
		$this->load->view('templates/header');
		$this->load->view('backend/wilayah/index',$data);
		$this->load->view('templates/footer');
	}
}
