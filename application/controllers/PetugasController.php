<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PetugasController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->model('PetugasModel');
        $this->load->model('PendaftaranModel');
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
        $data['prov'] = $this->PendaftaranModel->getProv();
        $data['kab'] = $this->PendaftaranModel->getKab();
        $data['kec'] = $this->PendaftaranModel->getKec();
        $data['kel'] = $this->PendaftaranModel->getKel();
		$data['petugas'] = $this->PetugasModel->getPetugas();
		$this->load->view('templates/header');
		$this->load->view('backend/petugas/index',$data);
		$this->load->view('templates/footer');
	}

	public function create()
    {     
        $data  = array(
        	'petugas_nama' => $this->input->post('nama'),
            'petugas_username' => $this->input->post('username'),
            'petugas_password' => $this->input->post('password'),
        	'petugas_telepon' => $this->input->post('telepon'),
        	'petugas_alamat' => $this->input->post('alamat'),
        	'petugas_jenis_kelamin' => $this->input->post('jenis_kelamin')
        );
        if (isset($_POST)) {
            
            $this->PetugasModel->create($data);
            echo "Berhasil";
        } else {
            redirect('tps');
        }
    }
}
