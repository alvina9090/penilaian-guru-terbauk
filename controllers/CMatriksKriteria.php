<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CMatriksKriteria extends CI_Controller {
 
	public function __construct() 
	{
		parent::__construct();
		$this->load->model(['MTargetSubkriteria','MKriteria','MSubkriteria','MMatriksSubkriteria','MMatriksKriteria', 'MGuru']);
	}

	public function index()
	{	
		$getAllKriteria = $this->MKriteria->getAllKriteria();
		$getAllguru 	= $this->MGuru->getAllguru();
		$data = [
			'getAllguru'	  => $getAllguru,
			'getAllKriteria'  => $getAllKriteria
		];
	
		$this->load->view('template/Header');
		$this->load->view('template/Sidebar');
		$this->load->view('matriks/MatriksKriteria');
		$this->load->view('template/Footer');
	}

	
	public function periode()
	{
		$periode 		 = $this->input->get('periode_masuk');
		$getPeriodeCalon = $this->MTargetSubkriteria->periode($periode);
		$getAllKriteria  = $this->MKriteria->getAllKriteria();
		$matriksISI 	 = $this->MMatriksSubkriteria->matriksNormalisasiISI($periode);

		$maxLoop = array();
		foreach($this->max() as $key=>$value) {
			array_push($maxLoop, $value);
		}

		$bobot = array();
		foreach($this->bobot() as $key=>$value) {
			array_push($bobot, $value);
		}

		$total = $this->total($periode);
		$tanggal = $this->tanggal($periode);

		$data = [
			'matriksISI'      => $matriksISI,
			'tanggal'		  => $tanggal,
			'total'			  => $total,
			'max'			  => $maxLoop,
			'tanggalPeriode'  => $periode,
			'getAllKriteria'  => $getAllKriteria,
			'getPeriodeCalon' => $getPeriodeCalon
		];
		
		$this->load->view('template/V_Header',$data);
		$this->load->view('template/V_Sidebar');
		$this->load->view('matriks/V_MatriksKriteria');
		$this->load->view('template/V_Footer');
	}

	public function max()
	{
		$max = $this->M_MatriksKriteria->max();
		$array = array();
		foreach($max as $key) {
			$array[] = $key->maxK1;
			$array[] = $key->maxK2;
			$array[] = $key->maxK3;
		} return $array;
	}

	public function bobot()
	{
		$eigenvector = $this->M_MatriksKriteria->eigenvector();
		$array = array();
		foreach($eigenvector as $key) {
			$array[] = $key->eigenvector; 
		} return $array;
	}

	public function total($periode)
	{
		$getAllSAW = $this->M_MatriksKriteria->getAllSAW($periode);
		$max 	   = $this->M_MatriksKriteria->max();

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

	public function simpanHasil($tanggalPeriode)
	{
		$periode_masuk = $this->input->post('periode_masuk');
		$barisCalon    = $this->MMatriksSubkriteria->barisCalon($tanggalPeriode);

		$name = "nip";
		$calon = array();
		for($i=1; $i<=$barisCalon; $i++) {
			$var = $name.$i;
			$calon[] = $this->input->post($var);	
		}

		$total = $this->total($periode_masuk);

		$i=0;
		while($i<$barisCalon){
			$dataSAW = [
				'id_calon'	=> $calon[$i],
				'hasil_akhir'	=> $total[$i]
			];
			$result = $this->MMatriksKriteria->simpanHasilSAW($dataSAW);
			$i++;
		}
	
		if ($result){
			$this->session->set_flashdata('pesan','Data Berhasil Disimpan');
	   		redirect('CMatriksKriteria/periode?periode_masuk='.$periode_masuk);
		}else{
			$this->session->set_flashdata('pesanGagal','Data Tidak Berhasil Disimpan');
    		redirect('CMatriksKriteria/periode?periode_masuk='.$periode_masuk);
		}
	}
}
