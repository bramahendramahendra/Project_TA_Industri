<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agen extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if(!isset($_SESSION['Logged-Admin'])) {
            redirect(site_url('Admin/Login'));
        }
    }

	public function index()
	{
        $data = $this->Read_Agen();
        // memamnggil view dashboard
        $this->load->view('Template/Admin/2/Header_V',$data);
        $this->load->view('Content/Admin/Agen_V',$data);
        $this->load->view('Template/Admin/2/Footer_V');
    }

    public function Read_Agen() 
    {
        // membuat array
        $data = array();
        $data['title'] = 'Admin PT Zetka Niagatama';
        $data['name_page'] = 'Agen';
        $data['status'] = 'Admin';
        $data['status_singkatan'] = 'ADM';
        $data['nama_tabel'] = 'Data Agen';
        $data['data_user_admin'] = $this->Admin_M->Read_Data_User_Admin($_SESSION['Logged-Admin']['id']);
        $data['data_agen'] = $this->Agen_M->Read_Data_Agen();
        return $data;
    }

    public function Update_Agen($id) 
    {
        if (isset($_POST['close'])) {
            redirect(site_url('Admin/Agen'));
        } else {
            $data = array(
                'first_name' => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),
                'npwp' => $this->input->post('npwp'),
                'alamat' => $this->input->post('alamat'),
                'pemilik' => $this->input->post('pemilik'),
                'nomor_telepon' => $this->input->post('nomor_telepon'),
            );
            $this->Agen_M->Update_Data_Agen($id, $data);
            redirect(site_url('Admin/Agen'));
        }
    }

    public function Delete_Agen($id) 
    {
        $this->Agen_M->Delete_Data_Agen($id);
        $this->session->set_flashdata('Delete-Agen','Success');
        redirect(site_url('Admin/Agen'));
    }
	
}
