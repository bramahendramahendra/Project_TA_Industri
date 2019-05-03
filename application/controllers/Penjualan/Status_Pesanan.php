<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Status_Pesanan extends CI_Controller {

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
        $this->load->view('Content/Penjualan/Status-Pesanan_V',$data);
        $this->load->view('Template/Department/2/Footer_V');
    }

    public function Read_Pesanan() 
    {
        // membuat array
        $data = array();
        $data['title'] = 'PT Zetka Niagatama';
        $data['name_page'] = 'Pesanan';
        $data['status'] = 'Bagian Penjualan';
        $data['status_singkatan'] = 'BPJ';
        $data['data_user_penjualan'] = $this->Penjualan_M->Read_Data_User_Penjualan($_SESSION['Logged-Penjualan']['id']);
        $data['data_pesanan'] = $this->Pesanan_M->Read_Data_Status_Pesanan();
        $data['notifikasi_pesanan'] = $this->Pesanan_M->Read_Notifikasi_Penjualan_Pesanan();
        return $data;
    }

    public function Update_Status_Pesanan($id){
        $data = array();
        $status = array();
        if(isset($_POST['approve'])) {
            $data['status'] = 'approve';
        } else {
            $data['status'] = 'reject';
        }
        $this->Pesanan_M->Update_Status_Pesanan($id, $data);
        redirect(site_url('Penjualan/Status_Pesanan'));

    }

    
	
}
