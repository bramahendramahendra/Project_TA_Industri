<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesanan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if(!isset($_SESSION['Logged-Keuangan'])) {
            redirect(site_url('Keuangan/Login'));
        }
    }

	public function index()
	{
        $data = $this->Read_Pesanan();
        // memamnggil view dashboard
        $this->load->view('Template/Department/1/Header_V',$data);
        $this->load->view('Template/Department/2/Keuangan_V',$data);
        $this->load->view('Content/Keuangan/Pesanan_V',$data);
        $this->load->view('Template/Department/2/Footer_V');
    }

    public function Read_Pesanan() 
    {
        // membuat array
        $data['title'] = 'PT Zetka Niagatama';
        $data['name_page'] = 'Pesanan';
        $data['status'] = 'Keuangan';
        $data['status_singkatan'] = 'BKU';
        $data['data_user_keuangan'] = $this->Keuangan_M->Read_Data_User_Keuangan($_SESSION['Logged-Keuangan']['id']);
        $data['data_pesanan'] = $this->Pesanan_M->Read_Data_Pesanan();
        return $data;
    }

   
}
