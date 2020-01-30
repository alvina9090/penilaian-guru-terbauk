<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kriteria extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->model(['MKriteria','MGuru']);
	}
	
	public function index()
	{
		$getAllKriteria = $this->MKriteria->getAllKriteria();
		$getKdKriteria  = $this->MKriteria->getKdKriteria();
		$data = [
			'getKdKriteria'  => $getKdKriteria,
			'getAllKriteria' => $getAllKriteria
		];
		$this->load->view('template/Header');
		$this->load->view('template/Sidebar');
		$this->load->view('kriteria/Kriteria', $data);
		$this->load->view('kriteria/TambahKriteria', $data);
		$this->load->view('kriteria/UpdateKriteria', $data);
		$this->load->view('kriteria/HapusKriteria', $data);
		$this->load->view('template/Footer');
	}
	
	public function tambahKriteria() 
	{
		$kd_kriteria = $this->input->post('kd_kriteria');
		$nm_kriteria = $this->input->post('nm_kriteria');
		
		$data = [
			'kd_kriteria' => $kd_kriteria,
			'nm_kriteria' => $nm_kriteria,
		];

		$result = $this->MKriteria->tambahKriteria($data);
		
		if ($result){
			$this->session->set_flashdata('pesan','Data Berhasil Disimpan');
	   		redirect('Kriteria');
		}else{
			$this->session->set_flashdata('pesanGagal','Data Tidak Berhasil Disimpan');
    		redirect('Kriteria');
		}
	}
	
	public function updateKriteria()
	{
		$kd_kriteria = $this->input->post('kd_kriteria');
		$nm_kriteria = $this->input->post('nm_kriteria');

		$data = [
			'nm_kriteria' => $nm_kriteria
		];
		
		$result = $this->MKriteria->UpdateKriteria($kd_kriteria,$data);
		
		if ($result){
			$this->session->set_flashdata('pesan','Data Berhasil Diubah');
	   		redirect('Kriteria');
		}else{
			$this->session->set_flashdata('pesanGagal','Data Tidak Berhasil Diubah');
    		redirect('Kriteria');
		}
	}
	
	public function deleteKriteria()
	{
		$kd_kriteria = $this->input->post('kd_kriteria');
		$validasi 	 = $this->MGuru->validasiHapus('kd_kriteria','subkriteria',$kd_kriteria);

		/*if($validasi->kd_kriteria == $kd_kriteria){
			$this->session->set_flashdata('pesanGagal','Data Kriteria Terhubung Dengan Data Lain');
	   		redirect('Kriteria');
		} else*/ 
			$result = $this->MKriteria->DeleteKriteria($kd_kriteria);
			if ($result){
				$this->session->set_flashdata('pesan','Data Berhasil Dihapus');
		   		redirect('Kriteria');
			}else{
				$this->session->set_flashdata('pesanGagal','Data Tidak Berhasil Dihapus');
	    		redirect('Kriteria');
			}
		
	}
	
}