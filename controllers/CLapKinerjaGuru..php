<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CLapKinerjaGuru extends CI_Controller {

	function __construct() 
	{
        parent::__construct();
        $this->load->library('pdf');
        $this->load->model(['MLapKinerjaGuru']);
        $this->load->library('Excel_generator');
    }

	public function index()
	{
		$this->load->view('template/Header');
		$this->load->view('template/Sidebar');
		$this->load->view('laporan/LapKinerjaGuru');
		$this->load->view('template/Footer');
	}

	public function thnajar(){
		$thnajar = $this->input->get('thnajar');
    	$getLapKinerjaGuru = $this->MLapKinerjaGuru->getLapKinerjaGuru($thnajar);
        
        $data = [
        	'getLapKinerjaGuru' => $getLapKinerjaGuru,
            'thnajar' => $thnajar
    	];
       
        $this->load->view('template/Header',$data);
		$this->load->view('template/Sidebar');
		$this->load->view('laporan/LapKinerjaGuru');
		$this->load->view('template/Footer');
    }

    public function cetaklaporankinerja($thnajar,$nip)
    {
        $pdf = new FPDF('P','mm','A4');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        //cetak gambar
        $image1 = "assets/img/logo2.png";
        $pdf->Cell(1, 0, $pdf->Image($image1, $pdf->GetX(), $pdf->GetY(), 20.10), 0, 0, 'L', false );
        // mencetak string
        $pdf->Cell(186,10,'MADRASAH IBTIDAIYAH HIKMATUSH SHOFWAH',0,1,'C');
        $pdf->Cell(9,1,'',0,1);
        $pdf->SetFont('Arial','',9);
        $pdf->Cell(186,1,'Jl. Bulak Kelapa RT. 006/04 Kelurahan Jurangmangu Barat, Kecamatan Pondok Aren  ',0,1,'C');
        $pdf->Cell(186,7,'Kota Tangerang Selatan – Provinsi Banten',0,1,'C');

        $pdf->Line(10, 35, 210-11, 35); 
        $pdf->SetLineWidth(0.5); 
        $pdf->Line(10, 35, 210-11, 35);
        $pdf->SetLineWidth(0);     
            
        $pdf->ln(10);
        
        //thnajar masuk
        $pdf->Cell(1,1,"thnajar : ".tanggal($thnajar),0,1,'L');
        //penilaian subkriteria kompetensi
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(190,5,' ',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,1,'',0,1);
        $pdf->SetFont('Arial','B',7);
        $pdf->Cell(9,6,'No.',1,0,'C');
        $pdf->Cell(15,6,'Nip',1,0,'C');
        $pdf->Cell(30,6,'Nama Guru',1,0,'C');
        $pdf->Cell(15,6,'Nilai Skp',1,0,'C');
        $pdf->Cell(10,6,'Kehadiran',1,0,'C');
        $pdf->Cell(25,6,'Orientasi',1,0,'C');
        $pdf->Cell(20,6,'Integritas',1,0,'C');
        $pdf->Cell(15,6,'Komitmen',1,0,'C');
        $pdf->Cell(15,6,'Disiplin',1,0,'C');
        $pdf->Cell(15,6,'Kerja Sama',1,0,'C');
        $pdf->SetFont('Arial','',7);

        $hasil = $this->MLapKinerjaGuru->getLapKinerjaGuru($thnajar,$nip);

        $no = 1;
        foreach ($hasil as $row)
        {
            $pdf->Cell(10,6,'',0,1);
            $pdf->Cell(9,6,$no++.".",1,0,'C');
            $pdf->Cell(15,6,$row->nip,1,0,'C');
            $pdf->Cell(30,6,ucwords($row->nm_guru),1,0);
            $pdf->Cell(15,6,$row->nilai_skp,1,0,'C');
            $pdf->Cell(10,6,$row->kehadiran,1,0,'C');
            $pdf->Cell(25,6,$row->orientasi,1,0,'C');
            $pdf->Cell(20,6,$row->integritass,1,0,'C');
            $pdf->Cell(15,6,$row->komitmen,1,0,'C');
            $pdf->Cell(15,6,$row->Disiplin,1,0,'C');
            $pdf->Cell(15,6,$row->Kerja_sama,1,0,'C');
        }
        $pdf->Output();
    }

    public function Excel($thnajar,$id)
    {
        $query = $this->MLapKinerjaGuru->ExportExcel($thnajar,$nip);
        $this->excel_generator->set_query($query);
        $this->excel_generator->set_header(array('nip', 'NAMA GURU','KEHADIRAN','ORIENTASI','INTEGRITAS','KOMITMEN','DISIPLIN','KERJA SAMA'));
        $this->excel_generator->set_column(array('nip', 'nm_guru', 'Kehadiran','Orientasi','Integritas','Komitmen','displin','kerja_sama'));
        $this->excel_generator->set_width(array(10, 20, 10, 15,15,15,15,15,15,15,));
        $this->excel_generator->exportTo2007('Rekap Kinerja Guru '.$thnajar);
    }

    public function Word($thnajar,$id)
    {
        $hasil = $this->MLapKinerjaGuru->getLapKinerjaGuru($thnajar,$id);
        $data = [
            'word' => $hasil
        ];
        $this->load->view('laporan/word_LapKinerjaGuru',$data);
    }
}
