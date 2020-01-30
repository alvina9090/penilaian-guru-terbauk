<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MMatriksSubkriteria extends CI_Model {

    public function __construct()
    {
		parent::__construct();
	}

	public function matriksTarget($kd_kriteria)
    {
    	$result = $this->db->query("SELECT * FROM guru,punya2,subkriteria where subkriteria.kd_subkriteria = punya2.kd_subkriteria and guru.nip = punya2.nip AND kd_kriteria = '".$kd_kriteria."'");
    	return $result->result();
    }

    public function matriksTargetNilai($nip,$kd_kriteria)
    {
    	$result = $this->db->query("SELECT * FROM punya2,kriteria,subkriteria WHERE punya2.kd_subkriteria = subkriteria.kd_subkriteria and kriteria.kd_kriteria = subkriteria.kd_kriteria and nip = '".$nip."' and kriteria.kd_kriteria = '".$kd_kriteria."'");
    	return $result->result();
    }
    
    public function matriksNormalisasi($tgl,$nip)
    {
        $result = $this->db->query("
            SELECT guru.nip as calon_id,periode_masuk,
                (SELECT target2.nilai_target2 FROM target2 WHERE target2.kd_subkriteria = 'SK1' AND id_calon = calon_id) as SK1,
                (SELECT target2.nilai_target2 FROM target2 WHERE target2.kd_subkriteria = 'SK2' AND id_calon = calon_id) as SK2,
                (SELECT target2.nilai_target2 FROM target2 WHERE target2.kd_subkriteria = 'SK3' AND id_calon = calon_id) as SK3,
                (SELECT target2.nilai_target2 FROM target2 WHERE target2.kd_subkriteria = 'SK4' AND id_calon = calon_id) as SK4,
                (SELECT target2.nilai_target2 FROM target2 WHERE target2.kd_subkriteria = 'SK5' AND id_calon = calon_id) as SK5,
                (SELECT target2.nilai_target2 FROM target2 WHERE target2.kd_subkriteria = 'SK6' AND id_calon = calon_id) as SK6,
                (SELECT target2.nilai_target2 FROM target2 WHERE target2.kd_subkriteria = 'SK7' AND id_calon = calon_id) as SK7
            FROM target2,calon WHERE calon.id_calon = target2.id_calon and periode_masuk = '$tgl' and calon.id_calon = '$id_calon' GROUP by SK1
        ");
        return $result->result();
    }

    public function matriksNormalisasiISI($tgl)
    {
        $result = $this->db->query("
            SELECT calon.id_calon as calon_id,periode_masuk,
                (SELECT target2.nilai_target2 FROM target2 WHERE target2.kd_subkriteria = 'SK1' AND id_calon = calon_id) as SK1,
                (SELECT target2.nilai_target2 FROM target2 WHERE target2.kd_subkriteria = 'SK2' AND id_calon = calon_id) as SK2,
                (SELECT target2.nilai_target2 FROM target2 WHERE target2.kd_subkriteria = 'SK3' AND id_calon = calon_id) as SK3,
                (SELECT target2.nilai_target2 FROM target2 WHERE target2.kd_subkriteria = 'SK4' AND id_calon = calon_id) as SK4,
                (SELECT target2.nilai_target2 FROM target2 WHERE target2.kd_subkriteria = 'SK5' AND id_calon = calon_id) as SK5,
                (SELECT target2.nilai_target2 FROM target2 WHERE target2.kd_subkriteria = 'SK6' AND id_calon = calon_id) as SK6,
                (SELECT target2.nilai_target2 FROM target2 WHERE target2.kd_subkriteria = 'SK7' AND id_calon = calon_id) as SK7
            FROM target2,calon WHERE calon.id_calon = target2.id_calon and periode_masuk = '$tgl' GROUP by calon.id_calon
        ");
        return $result->result();
    }

    public function simpanTarget($data)
    {
        $status = $this->db->insert('punya', $data);
        return $status;
    }

    public function isiTarget($nilai_target,$nip,$kd_kriteria)
    {
        $this->db->query("UPDATE target SET nilai_target = '".$nilai_target."' WHERE id_calon = '".$id_calon."' and kd_kriteria = '".$kd_kriteria."'");
    }

    public function barisCalon($tgl)
    {
        $query = $this->db->query("SELECT * FROM guru WHERE guru.periode_masuk = '$tgl'");
        return $query->num_rows();
    }

    public function hilangkanTombol($tgl)
    {
        $result = $this->db->query("SELECT * FROM target JOIN guru on target.nip = calon.nip WHERE nip.periode_masuk = '$tgl'");
        return $result->result();
    }  
     
}