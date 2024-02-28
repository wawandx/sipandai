<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function index()
	{
		$data['modul'] = $this->load->view('modul/dashboard/index', '', TRUE);
		$this->load->view('main/index', $data);
	}
}
