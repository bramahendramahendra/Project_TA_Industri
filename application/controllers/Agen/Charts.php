<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Charts extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if(!isset($_SESSION['Logged-Agen'])) {
            redirect(site_url('Agen/Login'));
        }
    }

	public function index()
	{
        // membuat array
        $data = array();
        $data['title'] = 'PT Zetka Niagatama';
        $data['name_page'] = 'Charts';
        $data['status'] = 'Agen';
        $data['status_singkatan'] = 'AGN';
        $data['data_user_agen'] = $this->Agen_M->Read_Data_User_Agen($_SESSION['Logged-Agen']['id']);
        $data['notifikasi_pesanan'] = $this->Pesanan_M->Read_Notifikasi_Penjualan_Agen($_SESSION['Logged-Agen']['id']);
        // $data['data_barang_tipe'] = $this->Charts_M->Read_Select_Chart_Barang_Tipe_Agen($_SESSION['Logged-Agen']['id']);

        // $tahun = $this->input->post('tahun');
        $data['data_charts'] = $this->Charts_M->Read_Data_Chart_Barang_Tahunan_Agen($_SESSION['Logged-Agen']['id']);

        $data['tipe'] = NULL;
        $data['bulan'] = NULL;
        $data['tahun'] = NULL;
        // memamnggil view dashboard
        $this->load->view('Template/Agen/2/Header_V',$data);
        $this->load->view('Content/Agen/Charts_V',$data);
        $this->load->view('Template/Agen/2/Footer_V');
    }

    public function Search_Bulanan()
	{
        // membuat array
        $data = array();
        $data['title'] = 'PT Zetka Niagatama';
        $data['name_page'] = 'Charts';
        $data['status'] = 'Agen';
        $data['status_singkatan'] = 'AGN';
        $data['data_user_agen'] = $this->Agen_M->Read_Data_User_Agen($_SESSION['Logged-Agen']['id']);
        $data['notifikasi_pesanan'] = $this->Pesanan_M->Read_Notifikasi_Penjualan_Agen($_SESSION['Logged-Agen']['id']);
        // $data['data_barang_tipe'] = $this->Charts_M->Read_Select_Chart_Barang_Tipe();

        // $bulan = $this->input->post('bulan');
        $tahun = $this->input->post('tahun');
        $data['data_charts'] = $this->Charts_M->Read_Data_Chart_Barang_Bulanan_Agen($_SESSION['Logged-Agen']['id'], $tahun);
        $data['bulan'] = 'active';


        // memamnggil view dashboard
        $this->load->view('Template/Agen/2/Header_V',$data);
        $this->load->view('Content/Agen/Charts_V',$data);
        $this->load->view('Template/Agen/2/Footer_V');
    }

    public function Search_Tipe()
	{
        // membuat array
        $data = array();
        $data['title'] = 'PT Zetka Niagatama';
        $data['name_page'] = 'Charts';
        $data['status'] = 'Agen';
        $data['status_singkatan'] = 'AGN';
        $data['data_user_agen'] = $this->Agen_M->Read_Data_User_Agen($_SESSION['Logged-Agen']['id']);
        $data['notifikasi_pesanan'] = $this->Pesanan_M->Read_Notifikasi_Penjualan_Agen($_SESSION['Logged-Agen']['id']);
        // $data['data_barang_tipe'] = $this->Charts_M->Read_Select_Chart_Barang_Tipe_Agen();
        
        $tipe_barang_tahun = $this->input->post('tahun');
        
        $data['data_charts'] = $this->Charts_M->Read_Data_Chart_Barang_Tipe_Agen($tipe_barang_tahun, $_SESSION['Logged-Agen']['id']);

        $data['tipe'] = NULL;
        $data['bulan'] = NULL;
        $data['tahun'] = NULL;

        // memamnggil view dashboard
        $this->load->view('Template/Agen/2/Header_V',$data);
        $this->load->view('Content/Agen/Charts_V',$data);
        $this->load->view('Template/Agen/2/Footer_V');
    }
	
}
