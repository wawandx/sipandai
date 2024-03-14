<?php

use PhpParser\Node\Stmt\Echo_;

defined('BASEPATH') OR exit('No direct script access allowed');

class List_assesment extends CI_Controller {
	public function __construct()
  {
    parent::__construct();
    $this->load->model('asesmen_model');
  }

	public function index()
	{
		$data_modul['data'] = $this->asesmen_model->get_asesmen_guru_grup();
		$data['modul'] = $this->load->view('modul/list_assesment/index', $data_modul, TRUE);
		$this->load->view('main/index', $data);
	}

	// function tidak terpakai
	// public function perhitungan(){
	// 	// Mendapatkan daftar nama pengguna dari model
	// 	$usernames = $this->asesmen_model->get_guru()->result();

	// 	foreach ($usernames as $user) {
	// 		// Mengambil nama pengguna dari hasil query
	// 		$username = $user->username;

	// 		// Mendapatkan data asesmen guru untuk setiap nama pengguna
	// 		$query_data = $this->asesmen_model->get_asesmen_guru($username)->result();
	// 		$query_ada  = $this->asesmen_model->get_asesmen_guru_ada($username)->result();
	// 		// Menghitung jumlah total data asesmen guru
	// 		$total_data = count($query_data);
	// 		$total_ada = count($query_ada);
	// 		$nilai = ($total_ada/$total_data)*100;

	// 		$nilai_per_user[$username] = $nilai;
			
	// 	}

	// 	return $nilai_per_user;

	// }

	public function detail($username)
	{
		$data_modul['data'] = $this->asesmen_model->get_asesmen_guru($username);
		$data_modul['username'] = $username;
		$data['modul'] = $this->load->view('modul/list_assesment/detail', $data_modul, TRUE);
		$this->load->view('main/index', $data);
	}

	public function setuju_semua($username){
		$data = new stdClass();

		if($this->session->id_level == 5) {
			$data_update = [
				'status' => 'menunggu assesor'
			];
		} elseif ($this->session->id_level == 3) {
			$data_update = [
				'status' => 'disetujui'
			];
		}
		$this->db->where('username', $username);
		$this->db->update('assesmen_guru', $data_update);
		
		$data->status = "success";	
		$data->username = $this->input->post('username');
		$json = json_encode($data);
		echo $json;
	}

	public function setujui()
	{
		$status = $this->input->post('status');
		$data = new stdClass();
		if($status == 'kepsek') {
			$data_update = [
				'status' => 'menunggu assesor'
			];
		} elseif ($status == 'assesor') {
			$data_update = [
				'status' => 'disetujui'
			];
		}
		if ($this->asesmen_model->update_assesmen_guru($data_update, $this->input->post('id'))) {
			$data->status = "success";	
			$data->id = $this->input->post('id');
		} else {
			$data->status = "failed";	
			$data->id = $this->input->post('id');	
		}

		$json = json_encode($data);
		echo $json;
	}

	public function tolak()
	{
		$data = new stdClass();
		$data_update = [
			'status' => 'ditolak'
		];
		if ($this->asesmen_model->update_assesmen_guru($data_update, $this->input->post('id'))) {
			$data->status = "success";	
			$data->id = $this->input->post('id');
		} else {
			$data->status = "failed";	
			$data->id = $this->input->post('id');	
		}

		$json = json_encode($data);
		echo $json;
	}
}
