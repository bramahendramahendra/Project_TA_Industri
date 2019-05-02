<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keuangan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if(!isset($_SESSION['Logged-Admin'])) {
            redirect(site_url('Admin/Login'));
        }
    }

	public function index()
	{
        $data = $this->Read_Keuangan();
        // memamnggil view dashboard
        $this->load->view('Template/Admin/2/Header_V',$data);
        $this->load->view('Content/Admin/Keuangan_V',$data);
        $this->load->view('Template/Admin/2/Footer_V');
    }

    public function Create_Keuangan() 
    {
        // form validation
        if ($this->form_validation->run('create-keuangan') == FALSE) {
            redirect(site_url('Admin/Keuangan'));
        } else {
            date_default_timezone_set('Asia/Jakarta');

            $data = array(
                'username' => $this->input->post('username'),
                'email' => $this->input->post('email'),
                'password' => md5($this->input->post('password')),
                'create_date' => Date("Y-m-d H:i:s"),
            );
            $this->Keuangan_M->Create_Data_Keuangan($data);
            redirect(site_url('Admin/Keuangan'));
        }
    }

    public function Read_Keuangan(){
        // membuat array
        $data = array();
        $data['title'] = 'PT Zetka Niagatama';
        $data['name_page'] = 'Keuangan';
        $data['status'] = 'Admin';
        $data['status_singkatan'] = 'ADM';
        $data['data_user_admin'] = $this->Admin_M->Read_Data_User_Admin($_SESSION['Logged-Admin']['id']);
        $data['data_keuangan'] = $this->Keuangan_M->Read_Data_Keuangan();
        return $data;
    }

    public function Update_Keuangan($id) 
    {
        $data = array(
            'username' => $this->input->post('username'),
            'email' => $this->input->post('email')
        );
        $this->Keuangan_M->Update_Data_Keuangan($id, $data);
        redirect(site_url('Admin/Keuangan'));
       
    }

    public function Delete_Keuangan($id) 
    {
        $this->Keuangan_M->Delete_Data_Keuangan($id);
        $this->session->set_flashdata('Delete-Keuangan','Success');
        redirect(site_url('Admin/Keuangan'));
    }
	
}
