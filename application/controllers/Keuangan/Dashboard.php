<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if(!isset($_SESSION['Logged-Keuangan'])) {
            redirect(site_url('Keuangan/Login'));
        }
    }

	public function index()
	{
        $data = $this->Read_Admin();
        // memamnggil view dashboard
        $this->load->view('Template/Department/1/Header_V',$data);
        $this->load->view('Template/Department/2/Keuangan_V',$data);
        $this->load->view('Content/Keuangan/Dashboard_V',$data);
        $this->load->view('Template/Department/2/Footer_V');
    }

    public function Read_Admin() {
        // membuat array
        $data = array();
        $data['title'] = 'Admin PT Zetka Niagatama';
        $data['name_page'] = 'Dashboard';
        $data['status'] = 'Keuangan';
        $data['status_singkatan'] = 'BKU';
        // $data['data_user_keuangan'] = $this->Keuangan_M->Read_Data_User_Keuangan($_SESSION['Logged-Keuangan']['id']);
        return $data;
    }
	
}
