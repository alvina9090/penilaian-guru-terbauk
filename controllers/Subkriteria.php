<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subkriteria extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();
		$this->load->model(['MSubkriteria','MKriteria','MGuru']);
	}

	public function index()
	{
		$getAllKriteria    = $this->MKriteria->getAllKriteria();
		$getAllSubkriteria = $this->MSubkriteria->getAllSubkriteria();
		$getKdSubkriteria  = $this->MSubkriteria->getKdSubkriteria();
		$getNmKSubkriteria = $this->MSubkriteria->getNmKSubkriteria();
		$data = [
			'getNmKSubkriteria' => $getNmKSubkriteria,
			'getKdSubkriteria' => $getKdSubkriteria,
			'getAllSubkriteria' => $getAllSubkriteria,
			'getAllKriteria' => $getAllKriteria
		];

		$this->load->view('template/Header');
		$this->load->view('template/Sidebar');
		$this->load->view('subkriteria/SubKriteria',$data);
		$this->load->view('subkriteria/TambahSubKriteria',$data);
		$this->load->view('subkriteria/UpdateSubKriteria',$data);
		$this->load->view('subkriteria/HapusSubKriteria',$data);
		$this->load->view('template/Footer');
	}

	public function tambahSubkriteria() 
	{
		$kriteria = $this->input->post('kriteria');
		$kd_subkriteria = $this->input->post('kd_subkriteria');
		$nm_subkriteria = $this->input->post('nm_subkriteria');
		
		$data = [
			'kd_subkriteria' => $kd_subkriteria,
			'nm_subkriteria' => $nm_subkriteria,
			'kd_kriteria'=> $kriteria
		];

		$result = $this->MSubkriteria->tambahSubkriteria($data);
		
		if ($result){
			$this->session->set_flashdata('pesan','Data Berhasil Disimpan');
	   		redirect('Subkriteria');
		}else{
			$this->session->set_flashdata('pesanGagal','Data Tidak Berhasil Disimpan');
    		redirect('Subkriteria');
		}
	}

	public function updateSubkriteria()
	{
		$kd_kriteria    = $this->input->post('kriteria');
		$nm_subkriteria = $this->input->post('nm_subkriteria');
		$kd_subkriteria = $this->input->post('kd_subkriteria');

		$data = [
			'kd_kriteria' 	 => $kd_kriteria,
			'nm_subkriteria' => $nm_subkriteria
		];
		
		$result = $this->MSubkriteria->UpdateSubkriteria($kd_subkriteria,$data);
		
		if ($result){
			$this->session->set_flashdata('pesan','Data Berhasil Diubah');
	   		redirect('Subkriteria');
		}else{
			$this->session->set_flashdata('pesanGagal','Data Tidak Berhasil Diubah');
    		redirect('Subkriteria');
		}
	}

	public function deleteSubkriteria()
	{
		$kd_subkriteria = $this->input->post('kd_subkriteria');
		$validasi 	    = $this->MGuru->validasiHapus('kd_subkriteria','punya2',$kd_subkriteria);

		if($validasi->kd_subkriteria == $kd_subkriteria){
			$this->session->set_flashdata('pesanGagal','Data Kriteria Terhubung Dengan Data Lain');
			redirect('Subkriteria');
		} else {
			$result = $this->MSubkriteria->DeleteSubkriteria($kd_subkriteria);
			if ($result){
				$this->session->set_flashdata('pesan','Data Berhasil Dihapus');
		   		redirect('Subkriteria');
			}else{
				$this->session->set_flashdata('pesanGagal','Data Tidak Berhasil Dihapus');
	    		redirect('Subkriteria');
			}
		}
	}

}

