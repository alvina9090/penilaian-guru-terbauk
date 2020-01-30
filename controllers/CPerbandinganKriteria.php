<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CPerbandinganKriteria extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model(['MKriteria','MGuru']);
	} 

	public function index()
	{
		$getAllKriteria = $this->MKriteria->getAllKriteria();

		$data = [
			'getAllKriteria' => $getAllKriteria
		];

		$this->load->view('template/Header');
		$this->load->view('template/Sidebar');
		$this->load->view('perbandingan/PerbandinganKriteria',$data);
		$this->load->view('template/Footer');
	}
 
	public function perbandinganMatriks()
	{
		
		$kri01 = $this->input->post('kri01');	
		$kri02 = $this->input->post('kri02');	
		$kri03 = $this->input->post('kri03');

		$matriksA = [ 
			[1     ,  $kri01/1 , $kri02/1],
			[1/$kri01 ,   1    , $kri03/1],
			[1/$kri02 ,  1/$kri03 ,   1  ],
		];

		$matriksB = $matriksA;

		$perkalianMatriks 	= $this->perkalian_matriks($matriksB,$matriksA);
		$penjumlahanMatriks = $this->penjumlahan_matriks($perkalianMatriks);
		$eigenvector 		= $this->cari_eigenvector($penjumlahanMatriks);
        $getAllKriteria 	= $this->MKriteria->getAllKriteria();

		$data = [
			'matriksA' 			 => $matriksA,
			'perkalianMatriks' 	 => $perkalianMatriks,
			'penjumlahanMatriks' => $penjumlahanMatriks,
			'eigenvector'  		 => $eigenvector,
			'getAllKriteria' 	 => $getAllKriteria
		];

		// $alert = $this->alert($data);

		if ($data){
			$this->load->view('template/Header');
		 	$this->load->view('template/Sidebar');
		 	$this->load->view('perbandingan/PerbandinganKriteria',$data);
		 	$this->load->view('template/Footer');	   	
		}else{
			$this->load->view('template/Header');
		 	$this->load->view('template/Sidebar');
		 	$this->load->view('perbandingan/PerbandinganKriteria',$data);
		 	$this->load->view('template/Footer');
		}
	}

	//fungsi untuk menghapus data session matriks
	public function batal()
	{
		redirect('PerbandinganKriteria');
	}

	//memunculkan alert sukses
	public function alert($nilai)
	{	
		if($nilai != null){
			$alert = $this->session->set_flashdata('pesan','Data Berhasil Diproses');
			return $alert;
		} else {
			$alert = $this->session->set_flashdata('pesanGagal','Data Tidak Berhasil Diproses');
			return $alert;
		}
	}

	//fungsi simpan nilai eigenvector
	public function simpanEigenvector()
	{
		$e1 = $this->input->post('E1');	
		$e2 = $this->input->post('E2');	
		$e3 = $this->input->post('E3');

		$kri01 = $this->input->post('KRI01');	
		$kri02 = $this->input->post('KRI02');	
		$kri03 = $this->input->post('KRI03');

		$baris = $this->MGuru->jumlah('kriteria');

		$n = 1;
		$array = array();
		$banding = "nilai_banding";
		for($i=1; $i<=$baris; $i++){
			for($j=1; $j<=$baris; $j++){
				$nilai_banding = $this->input->post($banding.$n);
				$n++;
				$array[] = $nilai_banding;
			}
		}

		$ktr = "KRI0";
		$q = 0;
		for($i=1; $i<=$baris; $i++){
			for($j=1; $j<=$baris; $j++){
				$data_banding = [
					'kd_kriteria' => $ktr.$i,
					'kd_kriteria2' => $ktr.$j,
					'nilai_banding' => $array[$q++]
				];
				//simpan table banding
				$this->MKriteria->tambahBanding($data_banding);
			}
		}

		$data1['eigenvector'] = $e1;
		$data2['eigenvector'] = $e2;
		$data3['eigenvector'] = $e3;

		$result1 = $this->MKriteria->InsertEigenvector($kri01,$data1);
		$result2 = $this->MKriteria->InsertEigenvector($kri02,$data2);
		$result3 = $this->MKriteria->InsertEigenvector($kri03,$data3);

		if ($result1 && $result2 && $result3){
			$this->session->set_flashdata('pesan','Data Berhasil Disimpan');
	   		redirect('CPerbandinganKriteria');
		}else{
			$this->session->set_flashdata('pesanGagal','Data Tidak Berhasil Disimpan');
    		redirect('CPerbandinganKriteria');
		}

	}

	//fungsi menghitung perkalian matriks
	public function perkalian_matriks($matriks_a, $matriks_b) 
	{
		$hasil = array();
		for ($i=0; $i<sizeof($matriks_a); $i++) {
			for ($j=0; $j<sizeof($matriks_b[0]); $j++) {
				$temp = 0;
				for ($k=0; $k<sizeof($matriks_b); $k++) {
					$temp += $matriks_a[$i][$k] * $matriks_b[$k][$j];
				}
				$hasil[$i][$j] = $temp;
			}
		}
		return $hasil;
	}

	//fungsi mencari eigenvector
	public function cari_eigenvector($cari_total) 
	{
        $hasil3 = array();
        for ($i=0; $i<sizeof($cari_total); $i++) {
            $temp2 = $cari_total[$i];
            $hasil3[$i] = $temp2;
        }
        $total = array_sum($hasil3);
        for ($j=0; $j<sizeof($cari_total); $j++) {
            $eigenvektor = $cari_total[$j]/$total;
            $hasil3[$j] = $eigenvektor;
        }
        return $hasil3;
    }

    //fungsi menjumlahkan matriks
    public function penjumlahan_matriks($matriks1) 
    {
        $hasil1 = array();
        for ($i=0; $i<sizeof($matriks1); $i++) {
           	$temp2 = 0;
            for ($k=0; $k<sizeof($matriks1); $k++) {
              	$temp2 = $temp2+$matriks1[$i][$k];
            }
            $hasil1[$i] = $temp2;
        }
        return $hasil1;
   	}
}
