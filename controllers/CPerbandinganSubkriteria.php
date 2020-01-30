<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CPerbandinganSubkriteria extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model(['MSubkriteria','MGuru']);
	} 

	public function index()
	{
		$getAllSubkriteria 	= $this->MSubkriteria->getAllSubkriteria();
		$getSubkriteria 	= $this->MSubkriteria->getSubkriteria('K');

		$data = [
			'getSubkriteria'	=> $getSubkriteria,
			'getAllSubkriteria' => $getAllSubkriteria
		];

		$this->load->view('template/Header');
		$this->load->view('template/Sidebar');
		$this->load->view('perbandingan/PerbandinganSubkriteria',$data);
		$this->load->view('template/Footer');
	} 

	public function perbandinganMatriks()
	{
		
		$skr01 = $this->input->post('skr01');	
		$skr02 = $this->input->post('skr02');	
		$skr03 = $this->input->post('skr03');	
		$skr04 = $this->input->post('skr04');	
		$skr05 = $this->input->post('skr05');	
		$skr06 = $this->input->post('skr06');	
		$skr07 = $this->input->post('skr07');	
		$skr08 = $this->input->post('skr08');	
		$skr09 = $this->input->post('skr09');	
		$skr010 = $this->input->post('skr010');

		$matriksA = [ 
			[1      ,  $skr01/1 , $skr02/1, $skr03/1 , $skr04/1 ],
			[1/$skr01 ,   1     , 1/$skr05, 1/$skr06 ,  1        ],
			[1/$skr02 ,  $skr05/1 ,  1      , $skr08 , $skr09/1 ],
			[1/$skr03 ,  $skr06/1 , 1/$skr08 ,  1   , 1/$skr010 ],
			[1/$skr04 ,  1      , 1/$skr09 , $skr010/1 , 1       ],
		];

		$matriksB = $matriksA;
		
		$perkalianMatriks 	 = $this->perkalian_matriks($matriksB,$matriksA);
		$penjumlahanMatriks  = $this->penjumlahan_matriks($perkalianMatriks);
		$eigenvector 		 = $this->cari_eigenvector($penjumlahanMatriks);
        $getAllSubkriteria 	 = $this->MSubkriteria->getAllSubkriteria();
        $getSubkriteria      = $this->MSubkriteria->getSubkriteria('K');

		$data = [
			'getSubkriteria'	  => $getSubkriteria,
			'matriksA' 			  => $matriksA,
			'penjumlahanMatriks'  => $penjumlahanMatriks,
			'eigenvector' 		  => $eigenvector,
			'perkalianMatriks' 	  => $perkalianMatriks,
			'getAllSubkriteria'   => $getAllSubkriteria
		];

		$alert = $this->alert($data);

		if ($data){
			$this->load->view('template/Header');
		 	$this->load->view('template/Sidebar');
		 	$this->load->view('perbandingan/PerbandinganSubkriteria',$data);
		 	$this->load->view('template/Footer');	   	
		}else{
			$this->load->view('template/Header');
		 	$this->load->view('template/Sidebar');
		 	$this->load->view('perbandingan/PerbandinganSubkriteria',$data);
		 	$this->load->view('template/Footer');
		}
	}

	//fungsi untuk menghapus data session matriks
	public function batal()
	{
		redirect('CPerbandinganSubkriteria');
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
		//key subkriteria
		$SKR01 = $this->input->post('SKR01');
		$SKR02 = $this->input->post('SKR02');
		$SKR03 = $this->input->post('SKR03');
		$SKR04 = $this->input->post('SKR04');
		$SKR05 = $this->input->post('SKR05');
		$SKR06 = $this->input->post('SKR06');
		$SKR07 = $this->input->post('SKR07');
		$SKR08 = $this->input->post('SKR08');
		$SKR09 = $this->input->post('SKR09');
		$SKR010 = $this->input->post('SKR010');

		$perilaku1 = $this->input->post('Perilaku1');
		$perilaku2 = $this->input->post('Perilaku2');
		$perilaku3 = $this->input->post('Perilaku3');
		$perilaku4 = $this->input->post('Perilaku4');
		$perilaku5 = $this->input->post('Perilaku5');		
		
		//eigenvector Perilaku
		$data1['eigenvector_sub'] = $perilaku1;
		$data2['eigenvector_sub'] = $perilaku2;
		$data3['eigenvector_sub'] = $perilaku3;
		$data4['eigenvector_sub'] = $perilaku4;
		$data5['eigenvector_sub'] = $perilaku5;

		//kriteria
		$kriteria1 = $this->input->post('subkriteria1');
		$kriteria2 = $this->input->post('subkriteria2');
		$kriteria3 = $this->input->post('subkriteria3');
		$kriteria4 = $this->input->post('subkriteria4');
		$kriteria5 = $this->input->post('subkriteria5');		

		$baris = $this->MSubkriteria->jumlah_subkriteria('subkriteria', $kriteria1); 
		
		$baris_total = $this->MGuru->jumlah('subkriteria');

		//tankap nilai banding 
		$n = 1;
		$array1 = array();
		$banding2 = "nilai_banding2";
		for($i=1; $i<=$baris; $i++){
			for($j=1; $j<=$baris; $j++){
				$nilai_banding2 = $this->input->post($banding2.$n);
				$n++;
				$array1[] = $nilai_banding2;
			}
		}

		//simpan nilai banding 
		$sktr = "SKR0";
		$q = 0;
		for($i=1; $i<=$baris; $i++){
			for($j=1; $j<=$baris; $j++){
				$data_banding = [
					'kd_subkriteria' => $sktr.$i,
					'kd_subkriteria2' => $sktr.$j,
					'nilai_banding2' => $array1[$q++]
				];
				$this->MSubkriteria->tambahBanding($data_banding);
			}
		}
		$result1 = $this->MSubkriteria->InsertEigenvector($SKR01,$data1);
		$result2 = $this->MSubkriteria->InsertEigenvector($SKR02,$data2);
		$result3 = $this->MSubkriteria->InsertEigenvector($SKR03,$data3);
		$result4 = $this->MSubkriteria->InsertEigenvector($SKR04,$data4);
		$result5 = $this->MSubkriteria->InsertEigenvector($SKR05,$data5);

		if ($result1 && $result2 && $result3 && $result4 && $result5){
			$this->session->set_flashdata('pesan','Data Berhasil Disimpan');
	   		redirect('CPerbandinganSubkriteria');
		}else{
			$this->session->set_flashdata('pesanGagal','Data Tidak Berhasil Disimpan');
    		redirect('CPerbandinganSubkriteria');
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
