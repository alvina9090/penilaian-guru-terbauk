<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CTargetKriteria extends CI_Controller {
 
	public function __construct() 
	{
		parent::__construct();
		$this->load->model(['MTargetKriteria','MKriteria', 'MGuru']);
	}

	public function index()
	{
		$getAllKriteria = $this->MKriteria->getAllKriteria();
		$getAllguru 	= $this->MGuru->getAllguru();
		$getNilaiDetail = $this->MTargetKriteria->nilaiDetail();
		$data = [
			'getAllguru'	  => $getAllguru,
			'getAllKriteria'  => $getAllKriteria,
			'getNilaiDetail'=> $getNilaiDetail
		];
		
		$this->load->view('template/Header');
		$this->load->view('template/Sidebar');
		$this->load->view('target/TargetKriteria',$data);
		$this->load->view('target/nilaiKriteria');
		$this->load->view('target/EntryNilaiTargetKriteria',$data);
		$this->load->view('template/Footer');
	}

	//fungsi menampilkan data 
	public function thnajar($thn_ajar, $kriteria)
	{
		$getNilaiDetail  = $this->MTargetKriteria->getNilaiDetail($thn_ajar, $kriteria);
		// $getAllguru 	 = $this->MTargetKriteria->getAllguru();
		// $getAllKriteria  = $this->MKriteria->getAllKriteria();
		// $getNilaiDetail  = $this->input->getNilaiDetail();
		
		
		$data = [
			'getNilaiDetail'  => $getNilaiDetail,
			// 'getAllKriteria'  => $getAllKriteria,
			// 'getAllguru' 	  => $getAllguru
		];

		$this->load->view('template/Header');
		$this->load->view('template/Sidebar');
		$this->load->view('target/TargetKriteria', $data);
		$this->load->view('target/EntryNilaiTargetKriteria', $data);
		$this->load->view('target/nilaiKriteria',$data);
		$this->load->view('templateFooter');
	}

	public function simpanTarget() 
	{
		$kd_kriteria  = $this->input->post('kd_kriteria');
		$nip	     = $this->input->post('nip');
		$nilai_guru = $this->input->post('nilai_guru');
		$data = [
			'nip'     		=> $nip,
			'kd_kriteria'	=> $kd_kriteria,
			'nilai_guru' 	=> $nilai_guru
		];

		$result = $this->MTargetKriteria->simpanTarget($data);
		
		if ($result){
			$this->session->set_flashdata('pesan','Data Berhasil Disimpan');
	   		redirect('CTargetKriteria');
		}else{
			$this->session->set_flashdata('pesanGagal','Data Tidak Berhasil Disimpan');
    		redirect('Kriteria');
		}
	}
}
