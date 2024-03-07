<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class List_assesment extends CI_Controller {
	public function __construct()
  {
    parent::__construct();
    $this->load->model('asesmen_model');
  }

	public function index()
	{
		$data_modul['data'] = $this->asesmen_model->get_asesmen_guru_grup();
		$data['modul'] = $this->load->view('modul/list_assesment/index', $data_modul, TRUE);
		$this->load->view('main/index', $data);
	}

	public function detail($username)
	{
		$data_modul['data'] = $this->asesmen_model->get_asesmen_guru($username);
		$data_modul['username'] = $username;
		$data['modul'] = $this->load->view('modul/list_assesment/detail', $data_modul, TRUE);
		$this->load->view('main/index', $data);
	}

	public function setujui()
	{
		$data = new stdClass();
		$data_update = [
			'status' => 'disetujui'
		];
		if ($this->asesmen_model->update_assesmen_guru($data_update, $this->input->post('id'))) {
			$data->status = "success";	
			$data->id = $this->input->post('id');
		} else {
			$data->status = "failed";	
			$data->id = $this->input->post('id');	
		}

		$json = json_encode($data);
		echo $json;
	}

	public function tolak()
	{
		$data = new stdClass();
		$data_update = [
			'status' => 'ditolak'
		];
		if ($this->asesmen_model->update_assesmen_guru($data_update, $this->input->post('id'))) {
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
