<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesanan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if(!isset($_SESSION['Logged-Penjualan'])) {
            redirect(site_url('Penjualan/Login'));
        }
    }

	public function index()
	{
        $data = $this->Read_Pesanan();
        // memamnggil view dashboard
        $this->load->view('Template/Department/1/Header_V',$data);
        $this->load->view('Template/Department/2/Penjualan_V',$data);
        $this->load->view('Content/Penjualan/Pesanan_V',$data);
        $this->load->view('Template/Department/2/Footer_V');
    }

    public function Read_Pesanan() 
    {
        // membuat array
        $data = array();
        $data['title'] = 'Admin PT Zetka Niagatama';
        $data['name_page'] = 'Dashboard';
        $data['status'] = 'Penjualan';
        $data['status_singkatan'] = 'BPJ';
        // $data['data_user_admin'] = $this->Admin_M->Read_Data_User_Admin($_SESSION['Logged-Admin']['id']);
        $data['data_pesanan'] = $this->Pesanan_M->Read_Data_Pesanan();
        $data['notifikasi_pesanan'] = $this->Pesanan_M->Read_Notifikasi_Penjualan_Pesanan();
        return $data;
    }

    
}
