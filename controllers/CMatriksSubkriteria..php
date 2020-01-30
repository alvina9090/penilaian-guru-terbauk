<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CMatriksSubkriteria extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();
		$this->load->model(['MTargetSubkriteria','MKriteria','MSubkriteria','MMatriksSubkriteria','MGuru']);
	}

	public function index()
	{
		$getAllKriteria    = $this->MKriteria->getAllKriteria();
		
		$data = [
			'getAllKriteria' 	 => $getAllKriteria
		];

		$this->load->view('template/Header',$data);
		$this->load->view('template/Sidebar');
		$this->load->view('matriks/MatriksSubkriteria');
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

	public function bobot()
	{
		$eigenvector_sub = $this->MTargetSubkriteria->eigenvector_sub();
		$array = array();
		foreach($eigenvector_sub as $key) {
			$array[] = $key->eigenvector_sub; 
		} return $array;
	}

	public function max()
	{
		$max = $this->MTargetSubkriteria->max();
		$array = array();
		foreach($max as $key) {
			$array[] = $key->maxSK1;
			$array[] = $key->maxSK2;
			$array[] = $key->maxSK3;
			$array[] = $key->maxSK4;
			$array[] = $key->maxSK5;
			$array[] = $key->maxSK6;
			$array[] = $key->maxSK7;
		} return $array;
	}

	public function thnajar()
	{

		$thnajar 		   = $this->input->get('thnajar');
		$getthnajar   = $this->MTargetSubkriteria->thnajar($thnajar);
		$getAllguru	   = $this->MTargetSubkriteria->getAllguru();
		
		$getAllKriteria    = $this->MKriteria->getAllKriteria();
		$nilaiDetail       = $this->MTargetSubkriteria->nilaiDetail();

		$max 			   = $this->MTargetSubkriteria->max();

		$getAllSAW_sub 	   = $this->MTargetSubkriteria->getAllSAW_sub($thnajar);

		$matriksISI 	   = $this->MMatriksSubkriteria->matriksNormalisasiISI($thnajar);

		$maxLoop = array();
		foreach($this->max() as $key=>$value) {
			array_push($maxLoop, $value);
		}

		$bobot = array();
		foreach($this->bobot() as $key=>$value) {
			array_push($bobot, $value);
		}

		foreach ($max as $key) {
			foreach ($getAllSAW_sub as $data) {
				round($data->SK1/$key->maxSK1,4);
				round($data->SK2/$key->maxSK2,4);
				round($data->SK3/$key->maxSK3,4);
				round($data->SK4/$key->maxSK4,4);
				round($data->SK5/$key->maxSK5,4);
				round($data->SK6/$key->maxSK6,4);
				round($data->SK7/$key->maxSK7,4);
			}
		}

		$total1 = array();
		foreach ($max as $key) {
			foreach ($getAllSAW_sub as $data) {
				$total1[] = round(
					(($data->SK1/$key->maxSK1)*$bobot[0])+
					(($data->SK2/$key->maxSK2)*$bobot[1])+
					(($data->SK3/$key->maxSK3)*$bobot[2]),4);
			}
		}

		$total2 = array();
		foreach ($max as $key) {
			foreach ($getAllSAW_sub as $data) {
				$total2[] = round(
					(($data->SK4/$key->maxSK4)*$bobot[3])+
					(($data->SK5/$key->maxSK5)*$bobot[4]),4);
			}
		}

		$total3 = array();
		foreach ($max as $key) {
			foreach ($getAllSAW_sub as $data) {
				$total3[] = round(
					(($data->SK6/$key->maxSK6)*$bobot[5])+
					(($data->SK7/$key->maxSK7)*$bobot[6]),4);
			}
		}

		$tanggal = $this->tanggal($thnajar);

		$data = [
			'matriksISI'		=> $matriksISI,
			'tanggal'			=> $tanggal,
			'total1'			=> $total1,
			'total2'			=> $total2,
			'total3'			=> $total3,
			'bobot'				=> $bobot,
			'max'				=> $maxLoop,
			'getAllKriteria' 	=> $getAllKriteria,
		 	'nilaiDetail'	  	=> $nilaiDetail,
			'getthnajar' 	=> $getthnajar,
			'getAllnip' 	  	=> $getAllnip,
			'tanggalthnajar'  	=> $thnajar
		];

		$this->load->view('template/Header',$data);
		$this->load->view('template/Sidebar');
		$this->load->view('matriks/MatriksSubkriteria');
		$this->load->view('template/Footer');
	}

	private function kriteria()
	{
		$kriteria = array();
		$getAllKriteria    = $this->MKriteria->getAllKriteria();
		foreach ($getAllKriteria as $row) {
			$kriteria[] = $row->kd_kriteria;
		}
		return $kriteria;
	} 

	public function simpanNilai($thnajar)
	{

		$getthnajar   = $this->MTargetSubkriteria->thnajar($tanggalthnajar);

		$max 			= $this->MTargetSubkriteria->max();		
		$getAllSAW_sub 	= $this->MTargetSubkriteria->getAllSAW_sub($tanggalthnajar);
		$getAllKriteria    = $this->MKriteria->getAllKriteria();

		$maxLoop = array();
		foreach($this->max() as $key=>$value) {
			array_push($maxLoop, $value);
		}

		$bobot = array();
		foreach($this->bobot() as $key=>$value) {
			array_push($bobot, $value);
		}

		foreach ($max as $key) {
			foreach ($getAllSAW_sub as $data) {
				round($data->SK1/$key->maxSK1,4);
				round($data->SK2/$key->maxSK2,4);
				round($data->SK3/$key->maxSK3,4);
				round($data->SK4/$key->maxSK4,4);
				round($data->SK5/$key->maxSK5,4);
				round($data->SK6/$key->maxSK6,4);
				round($data->SK7/$key->maxSK7,4);
			}
		}

		$total1 = array();
		foreach ($max as $key) {
			foreach ($getAllSAW_sub as $data) {
				$total1[] = round(
					(($data->SK1/$key->maxSK1)*$bobot[0])+
					(($data->SK2/$key->maxSK2)*$bobot[1])+
					(($data->SK3/$key->maxSK3)*$bobot[2]),4);
			}
		}

		$total2 = array();
		foreach ($max as $key) {
			foreach ($getAllSAW_sub as $data) {
				$total2[] = round(
					(($data->SK4/$key->maxSK4)*$bobot[3])+
					(($data->SK5/$key->maxSK5)*$bobot[4]),4);
			}
		}

		$total3 = array();
		foreach ($max as $key) {
			foreach ($getAllSAW_sub as $data) {
				$total3[] = round(
					(($data->SK6/$key->maxSK6)*$bobot[5])+
					(($data->SK7/$key->maxSK7)*$bobot[6]),4);
			}
		}

		$baris 		   = $this->MGuru->jumlah('kriteria');
		$barisnip = $this->MMatriksSubkriteria->barisnip($tanggalthnajar);

		$name = "nip";
		$nip = array();
		for($i=1; $i<=$baris; $i++) {
			$var = $name.$i;
			$nip[] = $this->input->post($var);	
		}

		//simpan ke table target
		foreach ($getAllKriteria as $kriteria) {
			$i=0;
			while($i<$baris){
				$dataTarget = [
					'kd_kriteria' 	=> $kriteria->kd_kriteria,
					'nip'		=> $nip[$i],
				];
				$result1 = $this->MMatriksSubkriteria->simpanTarget($dataTarget);
				$i++;
			}	
		}
	
		$kriteria = $this->kriteria();
		$j=0;
		for($i=0; $i<$baris; $i++){
			while($j<$baris){
				$result2 = $this->MMatriksSubkriteria->isiTarget($total1[$j],$nip[$j],$kriteria[$i]);
				$j++;
			}
		}

		$j=0;
		for($i=1; $i<$baris; $i++){
			while($j<$baris){
				$result2 = $this->MMatriksSubkriteria->isiTarget($total2[$j],$nip[$j],$kriteria[$i]);
				$j++;
			}
		}

		$j=0;
		for($i=2; $i<$baris; $i++){
			while($j<$baris){
				$result2 = $this->MMatriksSubkriteria->isiTarget($total3[$j],$nip[$j],$kriteria[$i]);
				$j++;
			}
		}

		if (!$result2){
			$this->session->set_flashdata('pesan','Data Berhasil Disimpan');
	   		redirect('CMatriksSubkriteria/thnajar?thnajar='.$thnajar);
		}else{
			$this->session->set_flashdata('pesanGagal','Data Tidak Berhasil Disimpan');
    		redirect('CMatriksSubkriteria/thnajar?thnajar='.$thnajar);
		}
	}
}
