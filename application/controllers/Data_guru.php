<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class data_guru extends CI_Controller {
	public function index(){
		
		$data['modul'] = $this->load->view('modul/data_guru/index', '', TRUE);
		$this->load->view('main/index', $data);
	}

    public function data_add(){
        $data['modul'] = $this->load->view('modul/data_guru/add', '', TRUE);
		$this->load->view('main/index', $data);
    }

    public function data_save(){
        // [nip] => 1234567 
        // [company_name] => nama 
        // [email] => nal@gmail.com 
        // [phone] => 08 
        // [tempat_lahir] => palu 
        // [tgal_lahir] => 2024-02-29 
        // [alamat] => JLN SISINGAMANGARAJA, LRG. SIMAJA 3 NO 8A 
        echo "simpan";
    }

    public function get_edit(){
        //$data = array ('nip' => nip);
        // [nip] => 1234567 
        // [company_name] => nama 
        // [email] => nal@gmail.com 
        // [phone] => 08 
        // [tempat_lahir] => palu 
        // [tgal_lahir] => 2024-02-29 
        // [alamat] => JLN SISINGAMANGARAJA, LRG. SIMAJA 3 NO 8A

        $data['modul'] = $this->load->view('modul/data_guru/get', '', TRUE);
		$this->load->view('main/index', $data);
    }
}
