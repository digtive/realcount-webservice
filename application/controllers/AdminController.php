<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class AdminController extends GLOBAL_Controller {
		
		public function __construct()
		{
			parent::__construct();
		}
		
		public function index()
		{
			$data['title'] = 'Admin Index';
			$data['page_title'] = '';
			$data['menu'] = '';
			$this->template('dashboard/index',$data);
		}
		
		public function detail()
		{
			$data['title'] = 'Detail Admin';
			
			parent::template('admin/detail',$data);
		}
		
		public function logout()
		{
			$this->session->sess_destroy();
			redirect(site_url());
		}
		
	}