<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MTargetKriteria extends CI_Model {

    public function __construct()
    {
		parent::__construct();
	}

	public function simpanTarget($data)
    {
		$checkinsert = false;
		try{
			$this->db->insert('punya',$data);
			$checkinsert = true;
		}catch (Exception $ex) {
			$checkinsert = false;
		}
		return $checkinsert;
	}
	
	public function getAllguru()
    {
		$result = $this->db->get('guru');
		return $result->result();
	}

    public function thnajar($thn_ajar)
    {
    	$result = $this->db->query("SELECT * FROM punya WHERE thn_ajar = '".$thn_ajar."'");
    	return $result->result();
    }

    public function nilaiDetail()
    {
    	$result = $this->db->query("SELECT * FROM guru JOIN punya ON guru.nip = punya.nip");
    	return $result->result();
    }

    public function nilai($nip)
    {
    	$result = $this->db->query("SELECT * FROM punya JOIN kriteria ON punya.kd_kriteria = kriteria.kd_kriteria WHERE nip ='".$nip."'");
    	return $result->result();
    }
	
	public function getNilaiDetail($thn_ajar, $kriteria){
		$result = $this->db->query("SELECT a.nip, a.nama, b.nilai_guru FROM guru AS a JOIN punya AS b ON a.nip = b.nip WHERE b.thn_ajar = '".$thn_ajar."' AND b.kd_kriteria = '".$kriteria."'");
		return $result->result();
	}
}