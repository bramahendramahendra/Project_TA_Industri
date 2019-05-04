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
        $data = $this->Read_Keuangan();
        // memamnggil view dashboard
        $this->load->view('Template/Department/1/Header_V',$data);
        $this->load->view('Template/Department/2/Keuangan_V',$data);
        $this->load->view('Content/Keuangan/Dashboard_V',$data);
        $this->load->view('Template/Department/2/Footer_V');
    }

    public function Read_Keuangan() {
        
        // membuat array
        $data = array();
        $data['title'] = 'PT Zetka Niagatama';
        $data['name_page'] = 'Dashboard';
        $data['status'] = 'Keuangan';
        $data['status_singkatan'] = 'BKU';
        $data['data_user_keuangan'] = $this->Keuangan_M->Read_Data_User_Keuangan($_SESSION['Logged-Keuangan']['id']);

        
        return $data;
    }

    public function Update_Password($menu) {
        // form validation
        if ($this->form_validation->run('ganti-password') == FALSE) {
            $this->session->set_flashdata('modal_alert','FailedPasswordConfirm');
            if($menu == 'Dashboard') {
                redirect(site_url('Keuangan/Dashboard'));
            } else {
                redirect(site_url('Keuangan/Pesanan'));
            }

        } else {
            $password = $this->Keuangan_M->Read_Data_User_Keuangan($_SESSION['Logged-Keuangan']['id']);
            $password_lama = md5($this->input->post('password_lama'));
        
            if ($password->password != $password_lama) {
                // jika validasi dalam kondisi fail
                $this->session->set_flashdata('modal_alert','FailedPasswordLama');
                if($menu == 'Dashboard') {
                    redirect(site_url('Keuangan/Dashboard'));
                } else {
                    redirect(site_url('Keuangan/Pesanan'));
                }
                
            } else {
                $data = array();
                $data['password'] = md5($this->input->post('password_baru'));
                $this->Keuangan_M->Update_Data_Keuangan($_SESSION['Logged-Keuangan']['id'],$data);
                $this->session->set_flashdata('modal_alert','SuccessPassword');
                if($menu == 'Dashboard') {
                    redirect(site_url('Keuangan/Dashboard'));
                } else {
                    redirect(site_url('Keuangan/Pesanan'));
                }
            }
        }


        
       
    }
	
}
