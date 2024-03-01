<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	function __construct(){
		parent::__construct();
		//$this->load->model("users_model");
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
			$recaptcha = $this->recaptcha->create_box();
			$data['recaptcha'] = $recaptcha;
			$data['error'] = 'Email belum terisi';
			$this->load->view('main/login', $data);
		}elseif (empty($password)) {
			$recaptcha = $this->recaptcha->create_box();
			$data['recaptcha'] = $recaptcha;
			$data['error'] = 'Password belum terisi';
			$this->load->view('main/login', $data);
		}else{
			$q_cek_login = $this->users_model->get_user_one($username);
			$cek_login= $q_cek_login->row();
		
			$is_valid = $this->recaptcha->is_valid();
			
			if ($is_valid['success'] == 1) {
				if ($q_cek_login->num_rows() > 0) {
					if (password_verify($this->input->post('password'), $cek_login->password)) {
						$data_session = array(
							'id' => $cek_login->id,
							'name' => $cek_login->name,
							'email' => $cek_login->email,
							'level' => $cek_login->level,
							'kd_unit_kerja' => $cek_login->kd_unit_kerja,
							'sub_bagian' => $cek_login->sub_bagian,
						);
						
						$this->session->set_userdata($data_session);
						redirect('home');
					} else {
						$recaptcha = $this->recaptcha->create_box();
						$data['recaptcha'] = $recaptcha;
						$data['error'] = 'Maaf Email atau password yang dimasukkan salah';		 
						
						$this->load->view('main/login', $data);
					}
				} else {
					$recaptcha = $this->recaptcha->create_box();
					$data['recaptcha'] = $recaptcha;
					$data['error'] = 'Maaf Email tidak terdaftar';		 
					
					$this->load->view('main/login', $data);
				}
			} else {
				$recaptcha = $this->recaptcha->create_box();
				$data['error'] = 'Maaf Captcha Salah';		 
				$data['recaptcha'] = $recaptcha;
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
