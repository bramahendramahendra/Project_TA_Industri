<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesanan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if(!isset($_SESSION['Logged-Agen'])) {
            redirect(site_url('Agen/Login'));
        }
    }

	public function index()
	{
        $data = $this->Read_Pesanan();
        // memamnggil view dashboard
        $this->load->view('Template/Agen/2/Header_V',$data);
        $this->load->view('Content/Agen/Pesanan_V',$data);
        $this->load->view('Template/Agen/2/Footer_V');
    }

    public function Create_Pesanan() 
    {
        // form validation
        if ($this->form_validation->run('create-pesanan') == FALSE) {
            redirect(site_url('Agen/Pesanan'));
        } else {
            $data = array(
                'id_agen' => $_SESSION['Logged-Agen']['id'],
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
            redirect(site_url('Agen/Pesanan'));
        }
    }

    public function Read_Pesanan(){
        // membuat array
        $data = array();
        $data['title'] = 'PT Zetka Niagatama';
        $data['name_page'] = 'Pesanan';
        $data['status'] = 'Agen';
        $data['status_singkatan'] = 'AGN';
        $data['nama_tabel'] = 'Data Pesanan';
        $data['data_user_agen'] = $this->Agen_M->Read_Data_User_Agen($_SESSION['Logged-Agen']['id']);
        $data['data_pesanan'] = $this->Pesanan_M->Read_Data_Pesanan_Agen($_SESSION['Logged-Agen']['id']);
        $data['count_status_pesanan'] = $this->Pesanan_M->Read_Count_Status_Pesanan($_SESSION['Logged-Agen']['id']);
        return $data;
    }

    public function Update_Pesanan($id) 
    {
        if (isset($_POST['close'])) {
            redirect(site_url('Agen/Pesanan'));
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
            redirect(site_url('Agen/Pesanan'));
        }
    }

    public function Delete_Pesanan($id) 
    {
        $this->Pesanan_M->Delete_Data_Pesanan($id);
        $this->session->set_flashdata('Delete','Success');
        redirect(site_url('Agen/Pesanan'));
    }
	
}
