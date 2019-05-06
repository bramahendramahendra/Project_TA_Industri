<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesanan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if(!isset($_SESSION['Logged-Admin'])) {
            redirect(site_url('Admin/Login'));
        }
    }

	public function index()
	{
        $data = $this->Read_Pesanan();
        // memamnggil view dashboard
        $this->load->view('Template/Admin/2/Header_V',$data);
        $this->load->view('Content/Admin/Pesanan_V',$data);
        $this->load->view('Template/Admin/2/Footer_V');
    }

    public function Read_Pesanan() 
    {
        // membuat array
        $data = array();
        $data['title'] = 'Admin PT Zetka Niagatama';
        $data['name_page'] = 'Dashboard';
        $data['status'] = 'Admin';
        $data['status_singkatan'] = 'ADM';
        $data['nama_tabel'] = 'Data Pesanan';
        $data['data_user_admin'] = $this->Admin_M->Read_Data_User_Admin($_SESSION['Logged-Admin']['id']);
        $data['data_pesanan'] = $this->Pesanan_M->Read_Data_Pesanan();
        return $data;
    }

    public function Create_Pesanan() 
    {
        // form validation
        if ($this->form_validation->run('create-pesanan') == FALSE) {
            redirect(site_url('Agen/Pesanan'));
        } else {
            // Cari nama 
            $data = array();
            $data['first_name'] = $this->input->post('nama_depan');
            $data['last_name'] = $this->input->post('nama_belakang');
            $id = $this->Agen_M->Find_Data_Nama_Agen($data);

            if($id == True) {
                $data = array(
                    'id_agen' => $id->id_agen,
                    'alamat' => $this->input->post('alamat'),
                    'tanggal_pemesanan' => $this->input->post('tanggal_pemesanan'),
                    'tipe_barang' => $this->input->post('tipe_barang'),
                    'jumlah_barang' => $this->input->post('jumlah_barang'),
                    'harga_zak' => $this->input->post('harga_zak'),
                    'harga_total' => $this->input->post('jumlah_barang')*$this->input->post('harga_zak'),
                    'nomor_telepon' => $this->input->post('nomor_telepon'),
                    'status' => 'pending'
                );
                $id = $this->Pesanan_M->Create_Data_Pesanan($data);
    
                $data = array(
                    'id_pesanan' => $id,
                    'status' => 0,
                );
    
                $this->Pesanan_M->Create_Notifikasi_Pesanan($data);
                redirect(site_url('Admin/Pesanan'));
            } else {
                $data = array();
                $data['username'] = $this->input->post('nama_depan').''.$this->input->post('nama_belakang').''.$this->input->post('npwp');
                $data['password'] = md5('password');
                $data['create_date'] = Date("Y-m-d H:i:s");

                $id = $this->Register_M->Register_Agen($data);
                
                $data = array();
                $data['id_agen'] = $id;
                $data['first_name'] = $this->input->post('nama_depan');
                $data['last_name'] = $this->input->post('nama_belakang');
                $data['npwp'] = $this->input->post('npwp');

                $this->Register_M->Register_Data_Agen($data);
                
                $data = array(
                    'id_agen' => $id,
                    'alamat' => $this->input->post('alamat'),
                    'tanggal_pemesanan' => $this->input->post('tanggal_pemesanan'),
                    'tipe_barang' => $this->input->post('tipe_barang'),
                    'jumlah_barang' => $this->input->post('jumlah_barang'),
                    'harga_zak' => $this->input->post('harga_zak'),
                    'harga_total' => $this->input->post('jumlah_barang')*$this->input->post('harga_zak'),
                    'nomor_telepon' => $this->input->post('nomor_telepon'),
                    'status' => 'pending'
                );
                $id = $this->Pesanan_M->Create_Data_Pesanan($data);
    
                $data = array(
                    'id_pesanan' => $id,
                    'status' => 0,
                );
    
                $this->Pesanan_M->Create_Notifikasi_Pesanan($data);
                redirect(site_url('Admin/Pesanan'));
            }
            
        }
    }

    public function Update_Pesanan($id) 
    {
        if (isset($_POST['close'])) {
            redirect(site_url('Admin/Pesanan'));
        } else {
            $data = array(
                'alamat' => $this->input->post('alamat'),
                'tanggal_pemesanan' => $this->input->post('tanggal_pemesanan'),
                'tipe_barang' => $this->input->post('tipe_barang'),
                'jumlah_barang' => $this->input->post('jumlah_barang'),
                'harga_zak' => $this->input->post('harga_zak'),
                'harga_total' => $this->input->post('jumlah_barang')*$this->input->post('harga_zak'),
                'nomor_telepon' => $this->input->post('nomor_telepon')
            );
            $this->Pesanan_M->Update_Data_Pesanan($id, $data);
            redirect(site_url('Admin/Pesanan'));
        }
    }

    public function Delete_Pesanan($id) 
    {
        $this->Pesanan_M->Delete_Data_Pesanan($id);
        $this->session->set_flashdata('Delete','Success');
        redirect(site_url('Admin/Pesanan'));
    }
	
}
