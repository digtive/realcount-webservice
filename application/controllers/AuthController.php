<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('AuthModel');
    }

    public function index()
    {

        $this->load->view('backend/auth/login');
    }
    

    public function login()
    {
        
        if (isset($_POST['login'])) {

            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $user = array(
                'petugas_username' => $username,
                'petugas_password' => md5($password)
            );

            $validate = $this->AuthModel->getUsers($user)->num_rows();
            $admin = $this->AuthModel->getUserAccount($user);
            $username = $admin['petugas_username'];
            
            $nama = $admin['petugas_nama'];
            $telepon = $admin['petugas_telepon'];

            $kategori = $admin['petugas_kategori'];

            if ($validate > 0 ) {
                $data_session = array(
                   	
                    'session_username' => $username,
                    'session_telepon' => $telepon,
                    'session_nama' => $nama,
                    'session_kategori' => $kategori
                );

                $this->session->set_flashdata('alert', 'success_login');
                $this->session->set_userdata($data_session);

                
                redirect(site_url());

            }
            
            
            else{
                $this->session->set_flashdata('alert','gagalLogin');
                redirect(site_url('login'));
                
            }

        } else {
            $this->load->view('backend/auth/login');
        }
    }

    
    

    
    public function logout()
    {
        $this->session->sess_destroy();
        redirect(site_url('login'));
    }
}
