<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Charts extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if(!isset($_SESSION['Logged-Admin'])) {
            redirect(site_url('Admin/Login'));
        }
    }

	public function index()
	{
        // membuat array
        $data = array();
        $data['title'] = 'Admin PT Zetka Niagatama';
        $data['name_page'] = 'Charts';
        $data['status'] = 'Admin';
        $data['status_singkatan'] = 'ADM';
        $data['data_user_admin'] = $this->Admin_M->Read_Data_User_Admin($_SESSION['Logged-Admin']['id']);
        $data['data_barang_tipe'] = $this->Charts_M->Read_Select_Chart_Barang_Tipe();

        $tahun = $this->input->post('tahun');
        $data['data_charts'] = $this->Charts_M->Read_Data_Chart_Barang_Tahunan($tahun);

        $data['tipe'] = NULL;
        $data['bulan'] = '-';
        $data['tahun'] = $tahun;
        // memamnggil view dashboard
        $this->load->view('Template/Admin/2/Header_V',$data);
        $this->load->view('Content/Admin/Charts_V',$data);
        $this->load->view('Template/Admin/2/Footer_V');
    }

    public function Search_Bulanan()
	{
        // membuat array
        $data = array();
        $data['title'] = 'Admin PT Zetka Niagatama';
        $data['name_page'] = 'Charts';
        $data['status'] = 'Admin';
        $data['status_singkatan'] = 'ADM';
        $data['data_user_admin'] = $this->Admin_M->Read_Data_User_Admin($_SESSION['Logged-Admin']['id']);
        $data['data_barang_tipe'] = $this->Charts_M->Read_Select_Chart_Barang_Tipe();

        $bulan = $this->input->post('bulan');
        $tahun = $this->input->post('tahun');
        $data['data_charts'] = $this->Charts_M->Read_Data_Chart_Barang_Bulanan($bulan, $tahun);
        $data['tipe'] = NULL;

        if($bulan == 1) {
            $data['bulan'] = 'Januari';
        } elseif($bulan == 2) {
            $data['bulan'] = 'Februari';
        } elseif($bulan == 3) {
            $data['bulan'] = 'Maret';
        } elseif($bulan == 4) {
            $data['bulan'] = 'April';
        } elseif($bulan == 5) {
            $data['bulan'] = 'Mei';
        } elseif($bulan == 6) {
            $data['bulan'] = 'Juni';
        } elseif($bulan == 7) {
            $data['bulan'] = 'Juli';
        } elseif($bulan == 8) {
            $data['bulan'] = 'Agustus';
        } elseif($bulan == 9) {
            $data['bulan'] = 'September';
        } elseif($bulan == 10) {
            $data['bulan'] = 'Oktober';
        } elseif($bulan == 11) {
            $data['bulan'] = 'November';
        } elseif($bulan == 12) {
            $data['bulan'] = 'Desember';
        }

        $data['tahun'] = $tahun;
        // memamnggil view dashboard
        $this->load->view('Template/Admin/2/Header_V',$data);
        $this->load->view('Content/Admin/Charts_V',$data);
        $this->load->view('Template/Admin/2/Footer_V');
    }

    public function Search_Tipe()
	{
        // membuat array
        $data = array();
        $data['title'] = 'Admin PT Zetka Niagatama';
        $data['name_page'] = 'Charts';
        $data['status'] = 'Admin';
        $data['status_singkatan'] = 'ADM';
        $data['data_user_admin'] = $this->Admin_M->Read_Data_User_Admin($_SESSION['Logged-Admin']['id']);
        $data['data_barang_tipe'] = $this->Charts_M->Read_Select_Chart_Barang_Tipe();
        $tipe_barang = $this->input->post('tipe_barang');
        
        $data['data_charts'] = $this->Charts_M->Read_Data_Chart_Barang_Tipe($tipe_barang);

        $data['tipe'] = $tipe_barang;
        $data['bulan'] = NULL;
        $data['tahun'] = NULL;

        // memamnggil view dashboard
        $this->load->view('Template/Admin/2/Header_V',$data);
        $this->load->view('Content/Admin/Charts_V',$data);
        $this->load->view('Template/Admin/2/Footer_V');
    }
	
}
