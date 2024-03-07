<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Download_modul extends CI_Controller {
	public function __construct()
  {
    parent::__construct();
    $this->load->model('modul_model');
  }

	public function index()
	{
		$data_modul['data'] = $this->modul_model->get_modul();
		$data['modul'] = $this->load->view('modul/download_modul/index', $data_modul, TRUE);
		$this->load->view('main/index', $data);
	}
}
