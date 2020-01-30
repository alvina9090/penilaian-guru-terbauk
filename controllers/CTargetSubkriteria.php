<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CTargetSubkriteria extends CI_Controller {
 
	public function __construct() 
	{
		parent::__construct();
		$this->load->model(['MTargetSubkriteria','MMatriksSubkriteria','MSubkriteria','MKriteria','MGuru']);
	}

	public function index()
	{
		$getAllSubkriteria = $this->MSubkriteria->getAllSubkriteria();
		$getAllguru		   = $this->MGuru->getAllguru();
		$data = [
			'getAllSubkriteria'  => $getAllSubkriteria,
			'getAllguru'		 => $getAllguru
		];

		$this->load->view('template/Header');
		$this->load->view('template/Sidebar');
		$this->load->view('target/TargetSubkriteria',$data);
		$this->load->view('target/EntryNilaiTargetSubkriteria',$data);
		$this->load->view('template/Footer');
	}

	//fungsi menampilkan data calon berdasarkan periode masuk
	public function periode()
	{
		$thnajar 		   = $this->input->get('thnajar');
		$kriteria		   = $this->input->get('kriteria');
		$getAllguru 	   = $this->MTargetSubkriteria->getAllguru();
		$getAllSubkriteria = $this->MSubkriteria->getAllSubkriteria();
		$getAllKriteria    = $this->MKriteria->getAllKriteria();
		$nilaiDetail       = $this->MTargetSubkriteria->nilaiDetail();
		
		
		$data = [
			'getAllKriteria' 	 => $getAllKriteria,
		 	'nilaiDetail'	  	 => $nilaiDetail,
		 	'getAllSubkriteria'  => $getAllSubkriteria,
			'kriteria'		 	 => $kriteria,
			'thnajar'			 => $thnajar,
			'getAllguru' 	  	 => $getAllguru,
			'tanggalPeriode'  	 => $periode
		];

		$this->load->view('template/Header');
		$this->load->view('template/Sidebar');
		$this->load->view('target/TargetSubkriteria', $data);
		$this->load->view('target/EntryNilaiTargetSubkriteria', $data);
		$this->load->view('target/nilaiSubkriteria',$data);
		$this->load->view('template/Footer');
	}

	public function simpanTarget() 
	{
		$kd_subkriteria  = $this->input->post('kd_subkriteria');
		$nip	     = $this->input->post('nip');
		$nilai_guru2 = $this->input->post('nilai_guru2');
		$data = [
			'nip'     		=> $nip,
			'kd_subkriteria'	=> $kd_subkriteria,
			'nilai_guru2' 	=> $nilai_guru2
		];

		$result = $this->MTargetSubkriteria->simpanTarget($data);
		
		if ($result){
			$this->session->set_flashdata('pesan','Data Berhasil Disimpan');
	   		redirect('CTargetSubkriteria');
		}else{
			$this->session->set_flashdata('pesanGagal','Data Tidak Berhasil Disimpan');
    		redirect('CTargetSubkriteria');
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

	//kayanya ga kepake
	public function HitungTarget()
	{
		$getAllSubkriteria = $this->MSubkriteria->getAllSubkriteria();

		$nilai 			  = $this->MTargetSubkriteria->nilaiDetail();
		$eigenvector_sub = $this->MTargetSubkriteria->eigenvector_sub();

		$max = $this->MTargetSubkriteria->max();
		$getAllSAW_sub = $this->MTargetSubkriteria->getAllSAW_sub();



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


		foreach ($max as $key) {
			foreach ($getAllSAW_sub as $data) {
				echo $total = round(
					(($data->SK1/$key->maxSK1)*$bobot[0])+
					(($data->SK2/$key->maxSK2)*$bobot[1])+
					(($data->SK3/$key->maxSK3)*$bobot[2]),4);
			}
		}

		foreach ($max as $key) {
			foreach ($getAllSAW_sub as $data) {
				echo $total = round(
					(($data->SK4/$key->maxSK4)*$bobot[3])+
					(($data->SK5/$key->maxSK5)*$bobot[4]),4);
			}
		}

		foreach ($max as $key) {
			foreach ($getAllSAW_sub as $data) {
				echo $total = round(
					(($data->SK6/$key->maxSK6)*$bobot[5])+
					(($data->SK7/$key->maxSK7)*$bobot[6]),4);
			}
		}
	}


}
