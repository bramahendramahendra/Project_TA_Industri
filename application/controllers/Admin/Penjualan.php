<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penjualan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if(!isset($_SESSION['Logged-Admin'])) {
            redirect(site_url('Admin/Login'));
        }
    }

	public function index()
	{
        $data = $this->Read_Penjualan();
        // memamnggil view dashboard
        $this->load->view('Template/Admin/2/Header_V',$data);
        $this->load->view('Content/Admin/Penjualan_V',$data);
        $this->load->view('Template/Admin/2/Footer_V');
    }

    public function Create_Penjualan() 
    {
        // form validation
        if ($this->form_validation->run('create-penjualan') == FALSE) {
            redirect(site_url('Admin/Penjualan'));
        } else {
            date_default_timezone_set('Asia/Jakarta');

            $data = array(
                'username' => $this->input->post('username'),
                'email' => $this->input->post('email'),
                'password' => md5($this->input->post('password')),
                'create_date' => Date("Y-m-d H:i:s"),
            );
            $this->Penjualan_M->Create_Data_Penjualan($data);
            redirect(site_url('Admin/Penjualan'));
        }
    }

    public function Read_Penjualan(){
        // membuat array
        $data = array();
        $data['title'] = 'PT Zetka Niagatama';
        $data['name_page'] = 'Penjualan';
        $data['status'] = 'Admin';
        $data['status_singkatan'] = 'ADM';
        $data['nama_tabel'] = 'Data User Penjualan';
        $data['data_user_admin'] = $this->Admin_M->Read_Data_User_Admin($_SESSION['Logged-Admin']['id']);
        $data['data_penjualan'] = $this->Penjualan_M->Read_Data_Penjualan();
        $data['data_barang_tipe'] = $this->Charts_M->Read_Select_Chart_Barang_Tipe();
        return $data;
    }

    public function Update_Penjualan($id) 
    {
        $data = array(
            'username' => $this->input->post('username'),
            'email' => $this->input->post('email')
        );
        $this->Penjualan_M->Update_Data_Penjualan($id, $data);
        redirect(site_url('Admin/Penjualan'));
       
    }

    public function Delete_Penjualan($id) 
    {
        $this->Penjualan_M->Delete_Data_Penjualan($id);
        $this->session->set_flashdata('Delete-Penjualan','Success');
        redirect(site_url('Admin/Penjualan'));
    }
	
}
