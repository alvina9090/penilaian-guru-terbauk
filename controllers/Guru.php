<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();
		$this->load->model('MGuru');
	}

	//halaman awal semua   guru
	public function index()
	{
		$getAllguru 	= $this->MGuru->getAllguru();
		$data = [
			'getAllguru'  => $getAllguru
		];
		$this->load->view('template/Header');
		$this->load->view('template/Sidebar');
		$this->load->view('guru/Guru', $data);
		$this->load->view('guru/EntryGuru', $data);
		$this->load->view('guru/UpdateGuru', $data);
		$this->load->view('guru/HapusGuru', $data);
		$this->load->view('template/Footer');
	}
	
	//fungsi menambah data   guru
	public function tambahguru()
	{
		$nip	 			= $this->input->post('nip');
		$nm_guru 			= $this->input->post('nm_guru');
		$alamat 			= $this->input->post('alamat');
		$no_tlp				= $this->input->post('no_tlp');
		$email 				= $this->input->post('email');
				
		$data = [
			'nip'					=> $nip,
			'nm_guru' 				=> $nm_guru,
			'alamat' 				=> $alamat,
			'no_tlp' 				=> $no_tlp,
			'email'			 		=> $email
						
		];

		$result = $this->MGuru->tambahguru($data);

		if ($result){
			$this->session->set_flashdata('pesan','Data Berhasil Disimpan');
	   		redirect('Guru');
		}else{
			$this->session->set_flashdata('pesanGagal','Data Tidak Berhasil Disimpan');
    		redirect('Guru');
		}
	}
	
	//fungsi mengupdate data   guru
	public function Updateguru()
	{
		$nip	 			= $this->input->post('nip');
		$nm_guru 			= $this->input->post('nm_guru');
		$alamat 			= $this->input->post('alamat');
		$no_tlp				= $this->input->post('no_tlp');
		$email 				= $this->input->post('email');
				
		$data = [
			'nm_guru' 				=> $nm_guru,
			'alamat' 				=> $alamat,
			'no_tlp' 				=> $no_tlp,
			'email'			 		=> $email
						
		];

		$result = $this->MGuru->Updateguru($nip, $data);
		
		if ($result){
			$this->session->set_flashdata('pesan','Data Berhasil Diubah');
	   		redirect('Guru');
		}else{
			$this->session->set_flashdata('pesanGagal','Data Tidak Berhasil Diubah');
    		redirect('Guru');
		}
	}
	
	//fungsi menghapus data   guru
	public function deleteguru()
	{
		$nip = $this->input->post('nip');
		// $validasi = $this->MGuru->validasiHapus('nip','punya2',$nip);

		// if($validasi->nip == $nip){
			// $this->session->set_flashdata('pesanGagal','Data guru Terhubung Dengan Data Lain');
	   		// redirect('Guru');
		// } else {
			$result = $this->MGuru->DeleteGuru($nip);
			if ($result){
				$this->session->set_flashdata('pesan','Data Berhasil Dihapus');
		   		redirect('Guru');
			}else{
				$this->session->set_flashdata('pesanGagal','Data Tidak Berhasil Dihapus');
	    		redirect('Guru');
			}
		// }
	}
}