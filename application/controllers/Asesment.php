<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Asesment extends CI_Controller {
	public function __construct()
 	{
    	parent::__construct();
    	$this->load->model('M_model');
			$this->load->model('asesmen_model');
  	}

	public function index() {
		$data_modul['data'] = $this->asesmen_model->get_asesmen_guru($this->session->username);
		$data_modul['data_ada'] = $this->asesmen_model->get_asesmen_guru_ada($this->session->username);
		$data_modul['data_menunggu'] = $this->asesmen_model->get_asesmen_guru_menunggu($this->session->username);
		$data['modul'] = $this->load->view('modul/assesment_guru/index', $data_modul, TRUE);
		$this->load->view('main/index', $data);
	}

  public function pengajuan_asesmen() {
		$data_modul['data'] = $this->asesmen_model->get_asesmen();
		$data['modul'] = $this->load->view('modul/assesment_guru/pengajuan_asesmen', $data_modul, TRUE);
		$this->load->view('main/index', $data);
	}

	public function post_pengajuan_asesmen() {
		$data_asesmen = $this->asesmen_model->get_asesmen();
		
		$this->db->trans_start();
		foreach ($data_asesmen->result() as $key => $value) {
			$data = [
				'username' => $this->session->username,
				'id_assesmen' => $value->id,
				'analisis' => $this->input->post('analisis_'.$value->id),
				'link_berkas' => $this->input->post('link_berkas_'.$value->id),
				'status' => 'menunggu'
			];
			
			$this->asesmen_model->post_assesmen_guru($data);
		}
		$this->db->trans_complete();

		if ($this->db->trans_status() === FALSE) {
			$this->db->trans_rollback();
			$this->session->set_flashdata('error_save', TRUE);
		} else {
			$this->db->trans_commit();
			$this->session->set_flashdata('success_save', TRUE);            
		}

		redirect('/asesment/index');
	}
}
