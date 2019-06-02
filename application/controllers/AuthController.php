<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class AuthController extends GLOBAL_Controller {
		
		public function __construct()
		{
			parent::__construct();
			$this->load->model('AuthModel');
			if (parent::hasLogin())
			{
				redirect(site_url('dashboard'));
			}
		}
		
		public function login()
		{
			$data['title'] = 'Masuk ke Sistem Informasi Registrasi Pernikahan';
			if (isset($_POST['masuk'])){
				$username = parent::post('username');
				$password = parent::post('password');
				
				$loginData = parent::model('AuthModel')->get_pengguna($username,$password);
				$existsStatus = $loginData->num_rows();
				$existsData   = $loginData->row_array();
				
				if ($existsStatus > 0)
				{
					$sessData = array(
						'sess_id' => $existsData['pengguna_id'],
						'sess_user' => $existsData['nama_pengguna'],
						'sess_level' => $existsData['level_pengguna']
					);
					$this->session->set_userdata($sessData);
					parent::alert('alert','welcome');
					redirect(site_url('dashboard'));
				}else{
					parent::alert('alert','invalid');
					redirect(site_url());
				}
			}else{
				parent::authPage('auth/login',$data);
			}
		}
		
		
	}