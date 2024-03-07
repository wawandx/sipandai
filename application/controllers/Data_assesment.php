<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class data_assesment extends CI_Controller {
	public function __construct()
 	{
    	parent::__construct();
    	$this->load->model('M_model');
  	}

	public function index(){
		$data_modul['data'] = $this->M_model->get_data_asc('assesmen', 'komponen');
		$data['modul'] = $this->load->view('modul/assesment/index', $data_modul, TRUE);
		$this->load->view('main/index', $data);
	}

    public function data_add(){
		
        $data['modul'] = $this->load->view('modul/assesment/add',  '', TRUE);
		$this->load->view('main/index', $data);
    }

	public function data_save(){
		$this->form_validation->set_rules('komponen', 'Komponen', 'required');
		$this->form_validation->set_rules('indikator', 'Indikator', 'required');
		
		$this->form_validation->set_message('required', '{field} harus terisi.');

		if ($this->form_validation->run() == FALSE)
		{
			$this->data_add();
		} else {
			$data = [
				'komponen' => $this->input->post('komponen'),
				'indikator' => $this->input->post('indikator')
			];
			
			if ($this->M_model->post('assesmen',$data)) {
				$this->session->set_flashdata('success_save', TRUE);
			} else {
				$this->session->set_flashdata('error_save', TRUE);
			}

			redirect('/Data_assesment/index');
		}
	}

	public function get_edit($id){
		$data_modul['data'] = $this->M_model->get_where('assesmen', $id)->row();
		
		$data['modul'] = $this->load->view('modul/assesment/edit', $data_modul, TRUE);
		$this->load->view('main/index', $data);
		
    }

	public function data_update($id){
		$this->form_validation->set_rules('komponen', 'Komponen', 'required');
		$this->form_validation->set_rules('indikator', 'Indikator', 'required');
		
		$this->form_validation->set_message('required', '{field} harus terisi.');

		if ($this->form_validation->run() == FALSE)
		{
			$this->data_add();
		} else {
			$data = [
				'indikator' => $this->input->post('indikator')
			];
			
			if ($this->M_model->update('assesmen',$data, $id)) {
				$this->session->set_flashdata('success_save', TRUE);
			} else {
				$this->session->set_flashdata('error_save', TRUE);
			}

			redirect('/Data_assesment/index');
		}
	}

	public function delete(){
		$data = new stdClass();
		if ($this->M_model->delete($this->input->post('id'), 'assesmen')) {
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
