<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class data_assesment extends CI_Controller {

	public function index(){
		
		$data['modul'] = $this->load->view('modul/assesment/index', '', TRUE);
		$this->load->view('main/index', $data);
	}

    public function data_add(){
		
		$data['title_modal'] ='Add Data Assessment';
        $data['modul'] = $this->load->view('modul/assesment/add',  $data, TRUE);

		$this->load->view('main/index', $data);
    }

	public function data_save(){
		
	}
}
