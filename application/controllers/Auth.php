<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model("users_model");
	}
	
	public function index()
	{
    $this->load->view('main/login', '');
  }

  public function proc_login()
	{
		$username=html_escape($this->input->post('username'));
		$password=html_escape($this->input->post('password'));

		if(empty($username)){
			$data['error'] = 'Email belum terisi';
			$this->load->view('main/login', $data);
		}elseif (empty($password)) {
			$data['error'] = 'Password belum terisi';
			$this->load->view('main/login', $data);
		}else{
			$q_cek_login = $this->users_model->get_user($username);
			$cek_login= $q_cek_login->row();
		
			if ($q_cek_login->num_rows() > 0) {
				if(hash_equals($cek_login->password, hash('sha256', $password))) {
					$data_session = array(
						'username' => $cek_login->username,
						'fullname' => $cek_login->fullname,
						'email' => $cek_login->email,
						'id_level' => $cek_login->id_level,
						'level' => $cek_login->level,
					);
					
					$this->session->set_userdata($data_session);
					redirect('dashboard');
				} else {
					$recaptcha = $this->recaptcha->create_box();
					$data['recaptcha'] = $recaptcha;
					$data['error'] = 'Maaf Email atau password yang dimasukkan salah';		 
					
					$this->load->view('main/login', $data);
				}
			} else {
				$data['error'] = 'Maaf Email tidak terdaftar';		 
				
				$this->load->view('main/login', $data);
			}
    }
	}

  public function logout()
	{
		$this->session->sess_destroy();
		redirect('auth');
	}
}
