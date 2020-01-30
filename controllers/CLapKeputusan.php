<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CLapKeputusan extends CI_Controller {

	public function index()
	{
		$this->load->view('template/Header');
		$this->load->view('template/Sidebar');
		$this->load->view('laporan/LapKeputusan');
		$this->load->view('template/Footer');
	}
}
