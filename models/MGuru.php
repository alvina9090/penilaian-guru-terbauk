<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MGuru extends CI_Model {

    public function __construct()
    {
		parent::__construct();
	}

	public function tambahguru($data)
	{
		$checkinsert = false;
		try{
			$this->db->insert('guru',$data);
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

	public function getguru($id)
	{
		$result = $this->db->where('nip',$id)->get('guru');
		return $result->row();
	}

	public function Updateguru($id,$data)
	{
		$checkupdate = false;
		try{
			$this->db->where('nip',$id);
			$this->db->update('guru',$data);
			$checkupdate = true;
		}catch (Exception $ex) {
			$checkupdate = false;
		}
		return $checkupdate;
	}

	public function Deleteguru($id)
	{
		$checkupdate = false;
		try{
			$this->db->where('nip',$id);
			$this->db->delete('guru');
			$checkupdate = true;
		}catch (Exception $ex) {
			$checkupdate = false;
		}
		return $checkupdate;
	}

	public function getKodeguru()
    {
       	$q  = $this->db->query("select MAX(RIGHT(id_guru,3)) as kd_max from guru");
       	$kd = "";
    	if($q->num_rows() > 0) {
        	foreach ($q->result() as $k) {
          		$tmp = ((int)$k->kd_max)+1;
           		$kd = sprintf("%03s",$tmp);
        	}
    	} else {
         $kd = "001";
    	}
       	return "CL".$kd;
    }

    public function periode($periode_masuk)
    {
     	$result = $this->db->query("SELECT * FROM guru WHERE periode_masuk = '".$periode_masuk."'");
     	return $result->result();
    }

    public function CetakPeriode($periode)
    {
    	$result = $this->db->query("SELECT * FROM guru WHERE periode_masuk = '".$periode."'");
     	return $result->result();
    }

    public function jumlah($table)
  	{
    	$query = $this->db->query("SELECT * FROM $table");
    	return $query->num_rows();
  	}

  	public function validasiHapus($kolom,$table,$id)
    {
     	$result = $this->db->query("SELECT $kolom FROM $table WHERE $kolom = '$id'");
     	return $result->row();
    }
}
