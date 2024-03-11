<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class biodata extends CI_Controller {
	public function __construct()
 	{
    	parent::__construct();
    	$this->load->model('M_model');
  	}

	public function index(){

        $data_modul['data'] = $this->M_model->get_where_biodata($this->session->username)->row();

	    $data['modul'] = $this->load->view('modul/biodata/index', $data_modul, TRUE);
		$this->load->view('main/index',$data);

	}

	 public function data_update($username){

    	$this->form_validation->set_rules('tmpat_lahir', 'Tempat lahir', 'required');
		$this->form_validation->set_rules('tgal_lahir', 'Tanggal lahir', 'required');
		$this->form_validation->set_rules('pangkat', 'Pangkat', 'required');
		$this->form_validation->set_rules('golongan', 'Golongan', 'required');
		$this->form_validation->set_rules('jenjang_akhir', 'Jenjang Akhir', 'required');
		$this->form_validation->set_rules('nm_institusi_pendidikan_akhir', 'Nama Institusi pendidikan Akhir', 'required');
    	$this->form_validation->set_rules('jurusan', 'Jurusan', 'required');
		$this->form_validation->set_rules('tahun_lulus', 'Tahun Lulus', 'required');

		$this->form_validation->set_message('required', '{field} harus terisi.');

		if ($this->form_validation->run() == FALSE)
		{
			$this->index();
		} else {
	 		$data = [
                'nip'                               => $this->input->post('nip'),                                                                     
                'tmpat_lahir'                       => $this->input->post('tmpat_lahir'),                           
                'tgal_lahir'                        => $this->input->post('tgal_lahir'),                            
                'pangkat'                           => $this->input->post('pangkat'),                               
                'golongan'                          => $this->input->post('golongan'),                              
                'jenjang_pendidikan_akhir'          => $this->input->post('jenjang_akhir'),                         
                'nama_institut_pendidikan_akhir'    => $this->input->post('nm_institusi_pendidikan_akhir'),         
                'jurusan'                           => $this->input->post('jurusan'),                               
                'tahun_lulus'                       => $this->input->post('tahun_lulus')
	 		];

			if ($this->M_model->update_biodata('guru', $data, $username)) {
				$this->session->set_flashdata('success_save', TRUE);
			} else {
				$this->session->set_flashdata('error_save', TRUE);
			}

			redirect('/biodata/index');
			
	 	}
	}
}
