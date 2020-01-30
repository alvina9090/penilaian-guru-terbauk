<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CMatriksKriteria extends CI_Controller {
 
	public function __construct() 
	{
		parent::__construct();
		$this->load->model(['MTargetSubkriteria','MKriteria','MSubkriteria','MMatriksSubkriteria','MMatriksKriteria']);
	}

	public function index()
	{	
		$this->load->view('template/Header');
		$this->load->view('template/Sidebar');
		$this->load->view('matriks/MatriksKriteria');
		$this->load->view('template/Footer');
	}

	public function tanggal($thnajar)
	{
		$getthnajar = $this->MTargetSubkriteria->thnajar($thnajar);
			if($getthnajar != null) {
				foreach ($getthnajar as $thnajar) {
				$tanggal = $thnajar->thnajar;
			} return $tanggal;	
		}
	}

	public function thnajar()
	{
		$thnajar 		 = $this->input->get('thnajar');
		$getthnajar = $this->MTargetSubkriteria->thnajar($thnajar);
		$getAllKriteria  = $this->MKriteria->getAllKriteria();
		$matriksISI 	 = $this->MMatriksSubkriteria->matriksNormalisasiISI($thnajar);

		$maxLoop = array();
		foreach($this->max() as $key=>$value) {
			array_push($maxLoop, $value);
		}

		$bobot = array();
		foreach($this->bobot() as $key=>$value) {
			array_push($bobot, $value);
		}

		$total = $this->total($thnajar);
		$tanggal = $this->tanggal($thnajar);

		$data = [
			'matriksISI'      => $matriksISI,
			'tanggal'		  => $tanggal,
			'total'			  => $total,
			'max'			  => $maxLoop,
			'tanggalthnajar'  => $thnajar,
			'getAllKriteria'  => $getAllKriteria,
			'getthnajar' => $getthnajar
		];
		
		$this->load->view('template/Header',$data);
		$this->load->view('template/Sidebar');
		$this->load->view('matriks/MatriksKriteria');
		$this->load->view('template/Footer');
	}

	public function max()
	{
		$max = $this->MMatriksKriteria->max();
		$array = array();
		foreach($max as $key) {
			$array[] = $key->maxK1;
			$array[] = $key->maxK2;
			$array[] = $key->maxK3;
		} return $array;
	}

	public function bobot()
	{
		$eigenvector = $this->MMatriksKriteria->eigenvector();
		$array = array();
		foreach($eigenvector as $key) {
			$array[] = $key->eigenvector; 
		} return $array;
	}

	public function total($thnajar)
	{
		$getAllSAW = $this->MMatriksKriteria->getAllSAW($thnajar);
		$max 	   = $this->MMatriksKriteria->max();

		$maxLoop = array();
		foreach($this->max() as $key=>$value) {
			array_push($maxLoop, $value);
		}

		$bobot = array();
		foreach($this->bobot() as $key=>$value) {
			array_push($bobot, $value);
		}

		foreach ($max as $key) {
			foreach ($getAllSAW as $data) {
				round($data->K1/$key->maxK1,4);
				round($data->K2/$key->maxK2,4);
				round($data->K3/$key->maxK3,4);
			}
		}

		$total = array();
		foreach ($max as $key) {
			foreach ($getAllSAW as $data) {
				$total[] = round(
					(($data->K1/$key->maxK1)*$bobot[0])+
					(($data->K2/$key->maxK2)*$bobot[1])+
					(($data->K3/$key->maxK3)*$bobot[2]),4);
			}
		}
		return $total;
	}

	public function simpanHasil($tanggalthnajar)
	{
		$thnajar_masuk = $this->input->post('thnajar');
		$baris	    = $this->MMatriksSubkriteria->baris($tanggalthnajar);

		$name = "nip";
		$nip = array();
		for($i=1; $i<=$baris; $i++) {
			$var = $name.$i;
			$nip[] = $this->input->post($var);	
		}

		$total = $this->total($thnajar);

		$i=0;
		while($i<$baris){
			$dataSAW = [
				'nip'	=> $nip[$i],
				'hasil_akhir'	=> $total[$i]
			];
			$result = $this->MMatriksKriteria->simpanHasilSAW($dataSAW);
			$i++;
		}
	
		if ($result){
			$this->session->set_flashdata('pesan','Data Berhasil Disimpan');
	   		redirect('CMatriksKriteria/thnajar?thnajar='.$thnajar);
		}else{
			$this->session->set_flashdata('pesanGagal','Data Tidak Berhasil Disimpan');
    		redirect('CMatriksKriteria/thnajar?thnajar='.$thnajar);
		}
	}
}
