<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class data_assesor extends CI_Controller {

	public function __construct()
 	{
    	parent::__construct();
    	$this->load->model('M_model');
  	}

	public function index(){
		$data_modul['data'] = $this->M_model->get_data_whare('users');
		$data['modul'] = $this->load->view('modul/assesor/index', $data_modul, TRUE);
		$this->load->view('main/index', $data);
	}

    public function data_add(){
		$data['title_modal'] ='Add Data Assesor';
        $data['modul'] = $this->load->view('modul/assesor/add', $data, TRUE);
		$this->load->view('main/index', $data);
    }

	public function data_edit(){
		$data['title_modal'] ='Edit Data Assesor';
        $data['modul'] = $this->load->view('modul/assesor/add', $data, TRUE);
		$this->load->view('main/index', $data);
    }
}
