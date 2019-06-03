<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if(!isset($_SESSION['Logged-Agen'])) {
            redirect(site_url('Agen/Login'));
        }
    }

	public function index()
	{
        $data = $this->Read_Agen();
        // membuat array
        
        // memamnggil view dashboard
        $this->load->view('Template/Agen/2/Header_V',$data);
        $this->load->view('Content/Agen/Dashboard_V',$data);
        $this->load->view('Template/Agen/2/Footer_V');
    }

    public function Read_Agen() {
        // membuat array
        $data = array();
        $data['title'] = 'PT Zetka Niagatama';
        $data['name_page'] = 'Dashboard';
        $data['status'] = 'Agen';
        $data['status_singkatan'] = 'AGN';
        $data['data_user_agen'] = $this->Agen_M->Read_Data_User_Agen($_SESSION['Logged-Agen']['id']);
        $data['notifikasi_pesanan'] = $this->Pesanan_M->Read_Notifikasi_Penjualan_Agen($_SESSION['Logged-Agen']['id']);
        // $data['data_barang_tipe'] = $this->Charts_M->Read_Select_Chart_Barang_Tipe_Agen($_SESSION['Logged-Agen']['id']);
        return $data;
    }

    public function Update_Profile() {
        $id = $_SESSION['Logged-Agen']['id'];
        
        $data = array(
            'npwp' => $this->input->post('npwp'),
            'alamat' => $this->input->post('alamat'),
            'nomor_telepon' => $this->input->post('nomor_telepon'),
            'pemilik' => $this->input->post('pemilik')
        );
        $this->Agen_M->Update_Data_Agen($id, $data);
        redirect(site_url('Agen/Dashboard'));
    }
	
}
