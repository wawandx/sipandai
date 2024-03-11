<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class report extends CI_Controller {
	public function __construct()
 	{
    	parent::__construct();
    	$this->load->model('report_model');
  	}

	public function index(){

	    $data['modul'] = $this->load->view('modul/report/index', '', TRUE);
		$this->load->view('main/index',$data);

		// echo "<pre>";
		// print_r($data_modul['data']);
	}

	public function guru(){
		$inputFileName = './docs/guru.xlsx';

		$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
		$spreadsheet = $reader->load($inputFileName);

		$data_guru = $this->report_model->get_guru();
		$sheet = $spreadsheet->getSheetByName('Sheet1');

		$i = 4;
		foreach ($data_guru->result_array() as $show) {
			$sheet->setCellValue('A'.$i, $show['fullname']);
			$sheet->setCellValue('B'.$i, '="'.$show['no_telp'].'"');
			$sheet->setCellValue('C'.$i, $show['alamat']);
			$sheet->setCellValue('D'.$i, $show['tmpat_lahir']);
			$sheet->setCellValue('E'.$i, $show['tgal_lahir']);
			$sheet->setCellValue('F'.$i, $show['jenis_pegawai']);
			$sheet->setCellValue('G'.$i, '="'.$show['nip'].'"');
			$sheet->setCellValue('H'.$i, $show['pangkat']);
			$sheet->setCellValue('I'.$i, $show['golongan']);
			$sheet->setCellValue('J'.$i, $show['jenjang_pendidikan_akhir']);
			$sheet->setCellValue('K'.$i, $show['nama_institut_pendidikan_akhir']);
			$sheet->setCellValue('L'.$i, $show['jurusan']);
			$sheet->setCellValue('M'.$i, $show['tahun_lulus']);
			$i++;
		}
		
    $writer = new Xlsx($spreadsheet);
    $filename = 'Data Guru';
    
    header('Content-Type: application/vnd.ms-excel');
    header('Content-Disposition: attachment;filename="'. $filename .'.xlsx"'); 
    header('Cache-Control: max-age=0');

    $writer->save('php://output');
	}

	public function assesmen(){
		$inputFileName = './docs/assesmen.xlsx';

		$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
		$spreadsheet = $reader->load($inputFileName);

		$data_asesmen = $this->report_model->get_asesmen();
		$sheet = $spreadsheet->getSheetByName('Sheet1');

		$i = 4;
		foreach ($data_asesmen->result_array() as $show) {
			$jumlah_keseluruhan = $this->report_model->get_asesmen_by_username($show['username'])->num_rows();
			$jumlah_ada = $this->report_model->get_asesmen_guru_ada($show['username'])->num_rows();
			$nilai = ($jumlah_ada/$jumlah_keseluruhan)*100;
			
			$predikat = "";
			if($nilai > 85) {
				$predikat = "Profesional";
			} else if($nilai > 70) {
				$predikat = "Layak";
			} else if($nilai > 55) {
				$predikat = "Pembinaan";
			} else if($nilai <= 55) {
				$predikat = "Dipertimbangkan";
			}

			$sheet->setCellValue('A'.$i, $show['fullname']);
			$sheet->setCellValue('B'.$i, $jumlah_ada);
			$sheet->setCellValue('C'.$i, $jumlah_keseluruhan);
			$sheet->setCellValue('D'.$i, number_format($nilai, 2, ",", ".") );
			$sheet->setCellValue('E'.$i, $predikat);
			$i++;
		}
		
    $writer = new Xlsx($spreadsheet);
    $filename = 'Data Asesmen';
    
    header('Content-Type: application/vnd.ms-excel');
    header('Content-Disposition: attachment;filename="'. $filename .'.xlsx"'); 
    header('Cache-Control: max-age=0');

    $writer->save('php://output');
	}
}
