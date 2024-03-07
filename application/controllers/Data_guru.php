<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class data_guru extends CI_Controller {
	public function __construct()
 	{
    	parent::__construct();
    	$this->load->model('M_model');
  	}

	public function index(){
		
		$data_modul['data'] = $this->M_model->get_data('guru');
		$data['modul'] = $this->load->view('modul/data_guru/index', $data_modul, TRUE);
		$this->load->view('main/index', $data);

		// echo "<pre>";
		// print_r($data_modul);
	}

    public function data_add(){
        $data['title_modal'] ='Add Data Guru';
        $data['modul'] = $this->load->view('modul/data_guru/add', $data, TRUE);
		$this->load->view('main/index', $data);
    }

    public function data_save(){
        $this->form_validation->set_rules('nip', 'nip', 'required');
		$this->form_validation->set_rules('nama', 'nama', 'required');
		$this->form_validation->set_rules('email', 'Nama Lengkap', 'required');
		$this->form_validation->set_rules('phone', 'Email', 'required');
		$this->form_validation->set_rules('tmpat_lahir', 'Nomor Telpon', 'required');
		$this->form_validation->set_rules('tgal_lahir', 'Level', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');

		$this->form_validation->set_message('required', '{field} harus terisi.');

		if ($this->form_validation->run() == FALSE)
		{
			$this->data_add();
		}else{
			$data = [
				'Nip' 			=> $this->input->post('nip'),
				'nama' 			=> $this->input->post('nama'),
				'email' 		=> $this->input->post('email'),
				'phone' 		=> $this->input->post('phone'),
				'tmpat_lahir' 	=> $this->input->post('tmpat_lahir'),
				'tgal_lahir' 	=> $this->input->post('tgal_lahir'),
				'alamat' 		=> $this->input->post('alamat'),
			];
		
			if($this->M_model->post('guru', $data)) {
				$this->session->set_flashdata('success_save', TRUE);
			}else {
				$this->session->set_flashdata('error_save', TRUE);
			}

			redirect('/Data_guru/index');
		}
    }

    public function get_edit($id){
		$data_modul['data'] = $this->M_model->get_where('guru', $id)->row();
		
		$data['modul'] = $this->load->view('modul/data_guru/get', $data_modul, TRUE);
		$this->load->view('main/index', $data);
		
    }

	public function data_update($id){

		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('phone', 'Phone', 'required');
		$this->form_validation->set_rules('tmpat_lahir', 'Tempat lahir', 'required');
		$this->form_validation->set_rules('tgal_lahir', 'Tanggal lahir', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');

		$this->form_validation->set_message('required', '{field} harus terisi.');

		if ($this->form_validation->run() == FALSE)
		{
			$this->get_edit($id);
		} else {
			$data = [
				// 'Nip' 			=> $this->input->post('nip'),
				'nama' 			=> $this->input->post('nama'),
				'email' 		=> $this->input->post('email'),
				'phone' 		=> $this->input->post('phone'),
				'tmpat_lahir' 	=> $this->input->post('tmpat_lahir'),
				'tgal_lahir' 	=> $this->input->post('tgal_lahir'),
				'alamat' 		=> $this->input->post('alamat'),
			];

			if ($this->M_model->update('guru', $data, $id)) {
				$this->session->set_flashdata('success_save', TRUE);
			} else {
				$this->session->set_flashdata('error_save', TRUE);
			}

			redirect('/Data_guru/index');
			
		}
	}


	public function delete()
	{
		$data = new stdClass();
		if ($this->M_model->delete($this->input->post('id'), 'guru')) {
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
