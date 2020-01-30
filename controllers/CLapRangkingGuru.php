<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CLapRangkingGuru extends CI_Controller {

	public function index()
	{
		$this->load->view('template/Header');
		$this->load->view('template/Sidebar');
		$this->load->view('laporan/LapRangkingGuru');
		$this->load->view('template/Footer');
	}
}
