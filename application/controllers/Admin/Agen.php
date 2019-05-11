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
        $data['data_barang_tipe'] = $this->Charts_M->Read_Select_Chart_Barang_Tipe();
        return $data;
    }

    public function Create_Agen() 
    {
        // form validation
        if ($this->form_validation->run('create-agen') == FALSE) {
            // set flash data
            $this->session->set_flashdata('create','FailedInput');
            // memanggil view create agen
            $data = $this->Read_Agen();
            // memamnggil view dashboard
            $this->load->view('Template/Admin/2/Header_V',$data);
            $this->load->view('Content/Admin/Agen_V',$data);
            $this->load->view('Template/Admin/2/Footer_V');
        } else {
            $data = array();
            $data['username'] = $this->input->post('username');
            $data['email'] = $this->input->post('email');
            // mengecek duplikat username dan email agen
            $duplikat = $this->Register_M->Cek_Duplikat_Agen($data);

            if($duplikat == TRUE) { // jika validasi dalam kondisi failed
                // set flash data
                $this->session->set_flashdata('create','FailedDuplikat');

                // memanggil view create agen
                // memanggil view create agen
                $data = $this->Read_Agen();
                // memamnggil view dashboard
                $this->load->view('Template/Admin/2/Header_V',$data);
                $this->load->view('Content/Admin/Agen_V',$data);
                $this->load->view('Template/Admin/2/Footer_V');
            } else { // jika validasi dalam kondisi success
                // mengeset jam timezone
                date_default_timezone_set('Asia/Jakarta');

                //membuat array untuk password dan create date
                $data['password'] = md5($this->input->post('password'));
                $data['create_date'] = Date("Y-m-d H:i:s");

                // insert data admin
                $id = $this->Register_M->Register_Agen($data);

                // membuat array baru untuk data agen
                $data = array();
                $data['id_agen'] = $id;
                $data['first_name'] = $this->input->post('first_name');
                $data['last_name'] = $this->input->post('last_name');
                $data['npwp'] = $this->input->post('npwp');
                $data['alamat'] = $this->input->post('alamat');
                $data['nomor_telepon'] = $this->input->post('nomor_telepon');
                $data['pemilik'] = $this->input->post('pemilik');
                

                $this->Register_M->Register_Data_Agen($data);
                $this->session->set_flashdata('create','Success');
                redirect(site_url('Admin/Agen'));
            }
            
        }
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
