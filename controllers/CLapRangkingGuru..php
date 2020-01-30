<?php
if(!defined('BASEPATH')  exit('No direct script access allowed');

class CLapRangkingGuru. extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->library('pdf');
        $this->load->model('MLapRangkingGuru');
        $this->load->library('Excel_generator');
    }

	public function index()
	{
		$this->load->view('template/Header');
		$this->load->view('template/Sidebar');
		$this->load->view('laporan/LapRangkingGuru');
		$this->load->view('template/Footer');
	}

    public function thnajar(){
        $thnajar = $this->input->get('thnajar');
        $getLapPerangkinganNilai = $this->MLapRangkingGuru->getLapRangkingGuru($thnajar);
        
        $data = [
            'getLapRangkingGuru' => $getLapRangkingGuru,
            'thnajar' => $thnajar
    
         ];
       
        $this->load->view('template/Header',$data);
		$this->load->view('template/Sidebar');
		$this->load->view('laporan/LapRangkingGuru');
		$this->load->view('template/Footer');
    }

	public function cetaklaporanrank($thnajar)
    {
        $pdf = new FPDF('P','mm','A4');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Times New Roman','B',16);
        $pdf->Cell(1, 0, $pdf->Image($image1, $pdf->GetX(), $pdf->GetY(), 20.10), 0, 0, 'L', false );
       
        $pdf->Cell(186,10,'MADRASAH IBTIDAIYAH HIKMATUSH SHOFWAH',0,1,'C');
        $pdf->Cell(9,1,'',0,1);
        $pdf->SetFont('Times New Roman','',9);
        $pdf->Cell(186,1,'Jl. Bulak Kelapa RT. 006/04 Kelurahan Jurangmangu Barat, Kecamatan Pondok Aren , ',0,1,'C');
        $pdf->Cell(186,7,'Kota Tangerang Selatan – Provinsi Banten. Telp',0,1,'C');

        $pdf->Line(10, 35, 210-11, 35); 
        $pdf->SetLineWidth(0.5); 
        $pdf->Line(10, 35, 210-11, 35);
        $pdf->SetLineWidth(0);     
            
        $pdf->ln(10);
        
        //thnajar
        $pdf->Cell(1,1,"thnajar : ".tanggal($thnajar),0,1,'L');
        //penilaian subkriteria kompetensi
        $pdf->SetFont('Times New Roman','B',12);
        $pdf->Cell(190,5,' ',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,1,'',0,1);
        $pdf->SetFont('Times New Roman','B',10);
        $pdf->Cell(10,6,'Keterangan',1,0,'C');
        $pdf->Cell(25,6,'Nip',1,0,'C');
        $pdf->Cell(68,6,'Nama Guru',1,0,'C');
        $pdf->Cell(43,6,'Hasil Akhir',1,0,'C');
        $pdf->SetFont('Times New Roman','',10);

		$hasil = $this->MLapRangkingGuru->getLapRangkingGuru($thnajar);

        $no = 1;
        foreach ($hasil as $row)
        {
            $pdf->Cell(10,6,$no++.".",1,0,'C');
            $pdf->Cell(25,6,$row->nip,1,0,'C');
            $pdf->Cell(68,6,ucwords($row->nm_guru),1,0);
            $pdf->Cell(43,6,$row->hasil_akhir,1,0,'C');
            if($row->keterangan != null){
                $pdf->Cell(43,6,$row->keterangan,1,1,'C');
            } else {
                $pdf->Cell(43,6,"Tidak Lolos",1,1,'C');
            }    
        }

        $pdf->Output();
    }

    public function Excel($thnajar)
    {
        $query = $this->MLapRangkingGuru->ExportExcel($thnajar);
        $this->excel_generator->set_query($query);
        $this->excel_generator->set_header(array('KETERANGAN', 'NIP', 'NAMA GURU','HASIL AKHIR'));
        $this->excel_generator->set_column(array('keterangan', 'nip', 'nm_guru','hasil_akhir'));
        $this->excel_generator->set_width(array(10, 20, 10, 15));
        $this->excel_generator->exportTo2007('Rangking Guru '.$thnajar);
    }

    public function Word($thnajar)
    {
        $hasil = $this->MLapRangkingGuru->getLapRangkingGuru($thnajar);
        $data = [
            'word' => $hasil
        ];
        $this->load->view('laporan/word_LapRangkingGuru',$data);
    }

}
