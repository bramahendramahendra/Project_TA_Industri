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

        $data['data_charts'] = $this->Search_Bulanan();

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

        $bulan = $this->input->post('bulan');
        $tahun = $this->input->post('tahun');
        $data['data_charts'] = $this->Charts_M->Read_Data_Chart_Barang_Bulanan($bulan, $tahun);
        // echo $data['data_charts']; die;


        // memamnggil view dashboard
        $this->load->view('Template/Admin/2/Header_V',$data);
        $this->load->view('Content/Admin/Charts_V',$data);
        $this->load->view('Template/Admin/2/Footer_V');
    }
	
}
