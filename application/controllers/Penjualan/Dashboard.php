<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if(!isset($_SESSION['Logged-Penjualan'])) {
            redirect(site_url('Penjualan/Login'));
        }
    }

	public function index()
	{
        $data = $this->Read_Penjualan();
        // memamnggil view dashboard
        $this->load->view('Template/Department/1/Header_V',$data);
        $this->load->view('Template/Department/2/Penjualan_V',$data);
        $this->load->view('Content/Penjualan/Dashboard_V',$data);
        $this->load->view('Template/Department/2/Footer_V');
    }

    public function Read_Penjualan() {
        // membuat array
        $data = array();
        $data['title'] = 'PT Zetka Niagatama';
        $data['name_page'] = 'Dashboard';
        $data['status'] = 'Penjualan';
        $data['status_singkatan'] = 'BPJ';
        $data['data_user_penjualan'] = $this->Penjualan_M->Read_Data_User_Penjualan($_SESSION['Logged-Penjualan']['id']);
        $data['notifikasi_pesanan'] = $this->Pesanan_M->Read_Notifikasi_Penjualan_Pesanan();

        
        return $data;
    }

    public function Update_Password($menu) {
        // form validation
        if ($this->form_validation->run('ganti-password') == FALSE) {
            $this->session->set_flashdata('modal_alert','FailedPasswordConfirm');
            if($menu == 'Dashboard') {
                redirect(site_url('Penjualan/Dashboard'));
            } elseif($menu =='Pesanan') {
                redirect(site_url('Penjualan/Pesanan'));
            } else {
                redirect(site_url('Penjualan/Status_Pesanan'));
            }

        } else {
            $password = $this->Penjualan_M->Read_Data_User_Penjualan($_SESSION['Logged-Penjualan']['id']);
            $password_lama = md5($this->input->post('password_lama'));
        
            if ($password->password != $password_lama) {
                // jika validasi dalam kondisi fail
                $this->session->set_flashdata('modal_alert','FailedPasswordLama');
                if($menu == 'Dashboard') {
                    redirect(site_url('Penjualan/Dashboard'));
                } elseif($menu =='Pesanan') {
                    redirect(site_url('Penjualan/Pesanan'));
                } else {
                    redirect(site_url('Penjualan/Status_Pesanan'));
                }
                
            } else {
                $data = array();
                $data['password'] = md5($this->input->post('password_baru'));
                $this->Penjualan_M->Update_Data_Penjualan($_SESSION['Logged-Penjualan']['id'],$data);
                $this->session->set_flashdata('modal_alert','SuccessPassword');
                if($menu == 'Dashboard') {
                    redirect(site_url('Penjualan/Dashboard'));
                } elseif($menu =='Pesanan') {
                    redirect(site_url('Penjualan/Pesanan'));
                } else {
                    redirect(site_url('Penjualan/Status_Pesanan'));
                }
            }
        }
    }
}
