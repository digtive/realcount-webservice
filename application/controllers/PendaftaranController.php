<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PendaftaranController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('PendaftaranModel');
        date_default_timezone_set('Asia/Jakarta');
        if (!$this->session->has_userdata('session_username')) {
            redirect(site_url('login'));
        }
        if ($this->session->userdata('session_username') === '') {
            redirect(site_url('login'), 'refresh');
        }
        
	}
	public function prov()
	{
		$data['prov'] = $this->PendaftaranModel->getProv();
		$data['kab'] = $this->PendaftaranModel->getKab();
		$data['kec'] = $this->PendaftaranModel->getKec();
		$data['kel'] = $this->PendaftaranModel->getKel();
		$this->load->view('templates/header');
		$this->load->view('backend/form/prov',$data);
		$this->load->view('templates/footer');
	}
	

	public function generate_prov()
    {       
    	$get_prov= $this->PendaftaranModel->getProv();

        for ($i=0; $i <count($get_prov) ; $i++) { 
            $data[$i] = array(
                'petugas_id' => '2019'.$get_prov[$i]['id'] ,
                'petugas_username' => $get_prov[$i]['id'],
                'petugas_password' => $get_prov[$i]['id'],
                'petugas_kategori' => 'provinsi',
                        );

        }
        if (isset($_POST)) {
            for ($i=0; $i < count($get_prov); $i++) { 
             $this->PendaftaranModel->create($data[$i]);
            }
            echo "Berhasil";
        } else {
            redirect('tps');
        }
    }
    public function generate_kab()
    {       
    	$get_kab= $this->PendaftaranModel->getKab();

        for ($i=0; $i <count($get_kab) ; $i++) { 
            $data[$i] = array(
                'petugas_id' => '2019'.$get_kab[$i]['id'] ,
                'petugas_username' => $get_kab[$i]['id'],
                'petugas_password' => $get_kab[$i]['id'],
                'petugas_kategori' => 'kabupaten',
                        );

        }
        if (isset($_POST)) {
            for ($i=0; $i < count($get_kab); $i++) { 
             $this->PendaftaranModel->create($data[$i]);
            }
            echo "Berhasil";
        } else {
            redirect('tps');
        }
    }

    public function generate_kec()
    {       
    	$get_kec= $this->PendaftaranModel->getKec();

        for ($i=0; $i <count($get_kec) ; $i++) { 
            $data[$i] = array(
                'petugas_id' => '2019'.$get_kec[$i]['id'] ,
                'petugas_username' => $get_kec[$i]['id'],
                'petugas_password' => $get_kec[$i]['id'],
                'petugas_kategori' => 'kecamatan',
                        );

        }
        if (isset($_POST)) {
            for ($i=0; $i < count($get_kec); $i++) { 
             $this->PendaftaranModel->create($data[$i]);
            }
            echo "Berhasil";
        } else {
            redirect('tps');
        }
    }

    public function generate_kel()
    {       
    	$get_kel= $this->PendaftaranModel->getKel();

        for ($i=0; $i <count($get_kel) ; $i++) { 
            $data[$i] = array(
                'petugas_id' => '2019'.$get_kel[$i]['id'] ,
                'petugas_username' => $get_kel[$i]['id'],
                'petugas_password' => $get_kel[$i]['id'],
                'petugas_kategori' => 'kelurahan',
                        );

        }
        if (isset($_POST)) {
            for ($i=0; $i < count($get_kel); $i++) { 
             $this->PendaftaranModel->create($data[$i]);
            }
            echo "Berhasil";
        } else {
            redirect('tps');
        }
    }

}
