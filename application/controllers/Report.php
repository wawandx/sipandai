<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class report extends CI_Controller {
	public function __construct()
 	{
    	parent::__construct();
    	$this->load->model('M_model');
  	}

	public function index(){

	    $data['modul'] = $this->load->view('modul/report/index', '', TRUE);
		$this->load->view('main/index',$data);

		// echo "<pre>";
		// print_r($data_modul['data']);
	}
}