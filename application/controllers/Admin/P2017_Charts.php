<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class P2017_Charts extends CI_Controller {

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

        $data['data_charts'] = $this->P2017_M->Read_Data_Chart_Barang_Tahunan();

        $data['bulan'] = '-';
        $data['tahun'] = 2017;

        // memamnggil view dashboard
        $this->load->view('Template/Admin/2/Header_V',$data);
        $this->load->view('Content/Admin/P2017_Charts_V',$data);
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
        $data['data_charts'] = $this->P2017_M->Read_Data_Chart_Barang_Bulanan($bulan);
        $data['bulan'] = $bulan;
        $data['tahun'] = 2017;
        // memamnggil view dashboard
        $this->load->view('Template/Admin/2/Header_V',$data);
        $this->load->view('Content/Admin/P2017_Charts_V',$data);
        $this->load->view('Template/Admin/2/Footer_V');
    }
	
}
