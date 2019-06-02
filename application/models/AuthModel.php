<?php
	
	class AuthModel extends  GLOBAL_Model {
		
		public function __construct()
		{
			parent::__construct();
		}
		
		public function get_pengguna($username,$password)
		{
			$user = array(
				'nama_pengguna' => $username,
				'sandi_pengguna' => $password
			);
			
			return parent::get_object_of_row('pengguna',$user);
			
		}
		
		
	}