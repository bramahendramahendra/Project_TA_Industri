<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if(!isset($_SESSION['Logged-Admin'])) {
            redirect(site_url('Admin/Login'));
        }
    }

	public function index()
	{
        $data = $this->Read_Admin();
        // memamnggil view dashboard
        $this->load->view('Template/Admin/2/Header_V',$data);
        $this->load->view('Content/Admin/Dashboard_V',$data);
        $this->load->view('Template/Admin/2/Footer_V');
    }

    public function Read_Admin() {
        // membuat array
        $data = array();
        $data['title'] = 'PT Zetka Niagatama';
        $data['name_page'] = 'Dashboard';
        $data['status'] = 'Admin';
        $data['status_singkatan'] = 'ADM';
        $data['data_user_admin'] = $this->Admin_M->Read_Data_User_Admin($_SESSION['Logged-Admin']['id']);
        $data['data_barang_tipe'] = $this->Charts_M->Read_Select_Chart_Barang_Tipe();
        
        return $data;
    }

    public function Update_Profile() {
        $id = $_SESSION['Logged-Admin']['id'];
        
        $data = array(
            'first_name' => $this->input->post('first_name'),
            'last_name' => $this->input->post('last_name'),
            'alamat' => $this->input->post('alamat'),
        );
        $this->Admin_M->Update_Data_Admin($id, $data);
        redirect(site_url('Admin/Dashboard'));
    }

    // public function 
	
}
