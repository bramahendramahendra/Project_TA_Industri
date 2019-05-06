<?php
Class Laporanpdf extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->library('pdf');
    }
    
    function index(){
        $pdf = new FPDF('l','mm','A5');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string 
        $pdf->Cell(190,7,'SEKOLAH MENENGAH KEJURUSAN NEEGRI 2 LANGSA',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(190,7,'DAFTAR SISWA KELAS IX JURUSAN REKAYASA PERANGKAT LUNAK',0,1,'C');

        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);

        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(20,6,'NIM',1,0);
        $pdf->Cell(85,6,'NAMA MAHASISWA',1,0);
        $pdf->Cell(27,6,'NO HP',1,0);
        $pdf->Cell(25,6,'TANGGAL LHR',1,1);

        $pdf->SetFont('Arial','',10);

        $mahasiswa = $this->db->get('data_user_agen')->result();
        foreach ($mahasiswa as $row){
            $pdf->Cell(20,6,$row->first_name,1,0);
            $pdf->Cell(85,6,$row->last_name,1,0);
            $pdf->Cell(27,6,$row->npwp,1,0);
            $pdf->Cell(25,6,$row->alamat,1,1); 
        }

        $pdf->Output();
    }

    function DataAgen(){
        $pdf = new FPDF('l','mm','A5');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string 
        $pdf->Cell(190,7,'Data Agen',0,1,'C');

        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);

        $pdf->SetFont('Arial','B',8);
        $pdf->Cell(30,6,'Nama Agen',1,0);
        $pdf->Cell(15,6,'NPWP',1,0);
        $pdf->Cell(40,6,'Email',1,0);
        $pdf->Cell(30,6,'Pemilik',1,0);
        $pdf->Cell(50,6,'Alamat',1,0);
        $pdf->Cell(20,6,'No Telpon',1,1);

        $pdf->SetFont('Arial','',8);

        $data = $this->Agen_M->Read_Data_Agen();
        foreach ($data as $row){
            $pdf->Cell(30,6,$row['first_name'].' '.$row['last_name'],1,0);
            $pdf->Cell(15,6,$row['npwp'],1,0);
            $pdf->Cell(40,6,$row['email'],1,0);
            $pdf->Cell(30,6,$row['pemilik'],1,0);
            $pdf->Cell(50,6,$row['alamat'],1,0);
            $pdf->Cell(20,6,$row['nomor_telepon'],1,1); 
        }

        $pdf->Output();
    }

    function DataPesanan(){
        $pdf = new FPDF('l','mm','A5');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string 
        $pdf->Cell(190,7,'Data Pemesanan',0,1,'C');

        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);

        $pdf->SetFont('Arial','B',8);
        $pdf->Cell(35,6,'Nama Agen',1,0);
        $pdf->Cell(15,6,'NPWP',1,0);
        $pdf->Cell(20,6,'Tanggal',1,0);
        $pdf->Cell(15,6,'Tipe',1,0);
        $pdf->Cell(15,6,'Jumlah',1,0);
        $pdf->Cell(18,6,'Harga(Zak)',1,0);
        $pdf->Cell(15,6,'Total',1,0);
        $pdf->Cell(20,6,'No Telpon',1,1);

        $pdf->SetFont('Arial','',8);

        $data = $this->Pesanan_M->Read_Data_Pesanan();
        foreach ($data as $row){
            $pdf->Cell(35,6,$row['first_name'].' '.$row['last_name'],1,0);
            $pdf->Cell(15,6,$row['npwp'],1,0);
            $pdf->Cell(20,6,$row['tanggal_pemesanan'],1,0);
            $pdf->Cell(15,6,$row['tipe_barang'],1,0);
            $pdf->Cell(15,6,$row['jumlah_barang'],1,0);
            $pdf->Cell(18,6,$row['harga_zak'],1,0);
            $pdf->Cell(15,6,$row['harga_total'],1,0);
            $pdf->Cell(20,6,$row['nomor_telepon'],1,1); 
        }

        $pdf->Output();
    }

    function DataPesananUser(){
        $pdf = new FPDF('l','mm','A5');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string 
        $pdf->Cell(190,7,'Data Pemesanan Agen',0,1,'C');

        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);

        $pdf->SetFont('Arial','B',8);
        $pdf->Cell(35,6,'Nama Agen',1,0);
        $pdf->Cell(15,6,'NPWP',1,0);
        $pdf->Cell(20,6,'Tanggal',1,0);
        $pdf->Cell(15,6,'Tipe',1,0);
        $pdf->Cell(15,6,'Jumlah',1,0);
        $pdf->Cell(18,6,'Harga(Zak)',1,0);
        $pdf->Cell(15,6,'Total',1,0);
        $pdf->Cell(20,6,'No Telpon',1,1);

        $pdf->SetFont('Arial','',8);
        $user = $this->Agen_M->Read_Data_User_Agen($_SESSION['Logged-Agen']['id']);
        $data = $this->Pesanan_M->Read_Data_Pesanan_Agen($_SESSION['Logged-Agen']['id']);
        foreach ($data as $row){
            $pdf->Cell(35,6,$user->first_name.' '.$user->last_name,1,0);
            $pdf->Cell(15,6,$user->npwp,1,0);
            $pdf->Cell(20,6,$row['tanggal_pemesanan'],1,0);
            $pdf->Cell(15,6,$row['tipe_barang'],1,0);
            $pdf->Cell(15,6,$row['jumlah_barang'],1,0);
            $pdf->Cell(18,6,$row['harga_zak'],1,0);
            $pdf->Cell(15,6,$row['harga_total'],1,0);
            $pdf->Cell(20,6,$row['nomor_telepon'],1,1); 
        }

        $pdf->Output();
    }

    function DataPesananStatus(){
        $pdf = new FPDF('l','mm','A5');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string 
        $pdf->Cell(190,7,'Data Pemesanan',0,1,'C');

        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);

        $pdf->SetFont('Arial','B',8);
        $pdf->Cell(35,6,'Nama Agen',1,0);
        $pdf->Cell(15,6,'NPWP',1,0);
        $pdf->Cell(20,6,'Tanggal',1,0);
        $pdf->Cell(15,6,'Tipe',1,0);
        $pdf->Cell(15,6,'Jumlah',1,0);
        $pdf->Cell(18,6,'Harga(Zak)',1,0);
        $pdf->Cell(15,6,'Total',1,0);
        $pdf->Cell(20,6,'No Telpon',1,0);
        $pdf->Cell(20,6,'Status',1,1);

        $pdf->SetFont('Arial','',8);

        $data = $this->Pesanan_M->Read_Data_Pesanan();
        foreach ($data as $row){
            $pdf->Cell(35,6,$row['first_name'].' '.$row['last_name'],1,0);
            $pdf->Cell(15,6,$row['npwp'],1,0);
            $pdf->Cell(20,6,$row['tanggal_pemesanan'],1,0);
            $pdf->Cell(15,6,$row['tipe_barang'],1,0);
            $pdf->Cell(15,6,$row['jumlah_barang'],1,0);
            $pdf->Cell(18,6,$row['harga_zak'],1,0);
            $pdf->Cell(15,6,$row['harga_total'],1,0);
            $pdf->Cell(20,6,$row['nomor_telepon'],1,0); 
            $pdf->Cell(20,6,$row['status'],1,1); 
        }

        $pdf->Output();
    }
}