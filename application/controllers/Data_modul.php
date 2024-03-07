<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_modul extends CI_Controller {
	public function __construct()
  {
    parent::__construct();
    $this->load->model('modul_model');
  }

	public function index()
	{
		$data_modul['data'] = $this->modul_model->get_modul();
		$data['modul'] = $this->load->view('modul/data_modul/index', $data_modul, TRUE);
		$this->load->view('main/index', $data);
	}

	public function add()
	{
		$data['modul'] = $this->load->view('modul/data_modul/add', '', TRUE);
		$this->load->view('main/index', $data);
	}

	public function post()
	{
		$this->form_validation->set_rules('judul_modul', 'Judul Modul', 'required');
		$this->form_validation->set_rules('link_berkas', 'Link Berkas', 'required');

		$this->form_validation->set_message('required', '{field} harus terisi.');

		if ($this->form_validation->run() == FALSE)
		{
			$this->add();
		} else {
			$data = [
				'judul_modul' => $this->input->post('judul_modul'),
				'deskripsi' => $this->input->post('deskripsi'),
				'link_berkas' => $this->input->post('link_berkas')
			];
			
			if ($this->modul_model->post_modul($data)) {
				$this->session->set_flashdata('success_save', TRUE);
			} else {
				$this->session->set_flashdata('error_save', TRUE);
			}

			redirect('/data_modul/index');
		}
	}
	public function edit($id)
	{
		$data_modul['data'] = $this->modul_model->get_modul_one($id)->row();
		$data['modul'] = $this->load->view('modul/data_modul/edit', $data_modul, TRUE);
		$this->load->view('main/index', $data);
	}

	public function update($id)
	{
		$this->form_validation->set_rules('judul_modul', 'Judul Modul', 'required');
		$this->form_validation->set_rules('link_berkas', 'Link Berkas', 'required');

		$this->form_validation->set_message('required', '{field} harus terisi.');

		if ($this->form_validation->run() == FALSE)
		{
			$this->edit($id);
		} else {
			$data = [
				'judul_modul' => $this->input->post('judul_modul'),
				'deskripsi' => $this->input->post('deskripsi'),
				'link_berkas' => $this->input->post('link_berkas')
			];
			
			if ($this->modul_model->update_modul($data, $id)) {
				$this->session->set_flashdata('success_update', TRUE);
			} else {
				$this->session->set_flashdata('error_update', TRUE);
			}

			redirect('/data_modul/index');
		}
	}

	public function delete_modul()
	{
		$data = new stdClass();
		if ($this->modul_model->delete_modul($this->input->post('id'))) {
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
