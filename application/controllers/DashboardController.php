<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardController extends CI_Controller {

	
	public function index()
	{

		$this->load->view('templates/header');
		$this->load->view('backend/dashboard/index');
		$this->load->view('templates/footer');
	}
}
