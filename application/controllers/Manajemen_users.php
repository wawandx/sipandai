<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manajemen_users extends CI_Controller {
	public function __construct()
  {
    parent::__construct();
    $this->load->model('users_model');
  }

	public function index()
	{
		$data_modul['data'] = $this->users_model->get_users();
		$data['modul'] = $this->load->view('modul/manajemen_users/index', $data_modul, TRUE);
		$this->load->view('main/index', $data);
	}

	public function add()
	{
		$data_modul['level'] = $this->users_model->get_levels();
		$data['modul'] = $this->load->view('modul/manajemen_users/add', $data_modul, TRUE);
		$this->load->view('main/index', $data);
	}

	public function post()
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('fullname', 'Nama Lengkap', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('no_telp', 'Nomor Telpon', 'required');
		$this->form_validation->set_rules('level', 'Level', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');

		$this->form_validation->set_message('required', '{field} harus terisi.');

		if ($this->form_validation->run() == FALSE)
		{
			$this->add();
		} else {
			$data = [
				'username' => $this->input->post('username'),
				'password' => hash('sha256', $this->input->post('password')),
				'fullname' => $this->input->post('fullname'),
				'email' => $this->input->post('email'),
				'no_telp' => $this->input->post('no_telp'),
				'id_level' => $this->input->post('level'),
				'alamat' => $this->input->post('alamat'),
				'status' => 'active'
			];
			
			if ($this->users_model->post_users($data)) {
				$this->session->set_flashdata('success_save', TRUE);
			} else {
				$this->session->set_flashdata('error_save', TRUE);
			}

			redirect('/manajemen_users/index');
		}
	}

	public function edit($username)
	{
		$data_modul['data'] = $this->users_model->get_user($username)->row();
		$data_modul['level'] = $this->users_model->get_levels();
		$data['modul'] = $this->load->view('modul/manajemen_users/edit', $data_modul, TRUE);
		$this->load->view('main/index', $data);
	}

	public function update($username)
	{
		$this->form_validation->set_rules('fullname', 'Nama Lengkap', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('no_telp', 'Nomor Telpon', 'required');
		$this->form_validation->set_rules('level', 'Level', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');

		$this->form_validation->set_message('required', '{field} harus terisi.');

		if ($this->form_validation->run() == FALSE)
		{
			$this->edit($username);
		} else {
			$data = [
				'fullname' => $this->input->post('fullname'),
				'email' => $this->input->post('email'),
				'no_telp' => $this->input->post('no_telp'),
				'id_level' => $this->input->post('level'),
				'alamat' => $this->input->post('alamat')
			];
			
			if ($this->input->post('password') != "") {
				$data['password'] = hash('sha256', $this->input->post('password'));
			}

			if ($this->users_model->update_users($data, $username)) {
				$this->session->set_flashdata('success_save', TRUE);
			} else {
				$this->session->set_flashdata('error_save', TRUE);
			}

			redirect('/manajemen_users/index');
		}
	}
	public function delete_user()
	{
		$data = new stdClass();
		if ($this->users_model->delete_user($this->input->post('id'))) {
			$data->status = "success";	
			$data->id = $this->input->post('id');
		} else {
			$data->status = "failed";	
			$data->id = $this->input->post('id');	
		}

		$json = json_encode($data);
		echo $json;
	}
}
