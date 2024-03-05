<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class data_assesor extends CI_Controller {

	public function index(){
		
		$data['modul'] = $this->load->view('modul/assesor/index', '', TRUE);
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
