<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct()
 	{
		parent::__construct();
		$this->load->model('dashboard_model');
		$this->load->model('report_model');
	}
	public function index()
	{
		$data_modul['guru'] = $this->dashboard_model->get_guru();
		$data['modul'] = $this->load->view('modul/dashboard/index', $data_modul, TRUE);
		$this->load->view('main/index', $data);
	}
}
