<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class P2017 extends CI_Controller {

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
        $this->load->view('Content/Admin/P2017_V',$data);
        $this->load->view('Template/Admin/2/Footer_V');
    }

    public function Create_Pesanan() 
    {
        
        date_default_timezone_set('Asia/Jakarta');

        $data = array(
            'nama_agen' => $this->input->post('nama_agen'),
            'januari' => $this->input->post('januari'),
            'februari' => $this->input->post('februari'),
            'maret' => $this->input->post('maret'),
            'april' => $this->input->post('april'),
            'mei' => $this->input->post('mei'),
            'juni' => $this->input->post('juni'),
            'juli' => $this->input->post('juli'),
            'agustus' => $this->input->post('agustus'),
            'september' => $this->input->post('september'),
            'oktober' => $this->input->post('oktober'),
            'november' => $this->input->post('november'),
            'desember' => $this->input->post('desember'),
            'total' => $this->input->post('januari')+$this->input->post('februari')+$this->input->post('maret')+ $this->input->post('april')+$this->input->post('mei')+$this->input->post('juni')+$this->input->post('juli')+$this->input->post('agustus')+$this->input->post('september')+$this->input->post('oktober')+$this->input->post('november')+$this->input->post('desember'),
        );
        $this->P2017_M->Create_Data_Pesanan($data);
        redirect(site_url('Admin/P2017'));
    }

    public function Read_Pesanan() 
    {
        // membuat array
        $data = array();
        $data['title'] = 'Admin PT Zetka Niagatama';
        $data['name_page'] = 'Pesanan 2017';
        $data['status'] = 'Admin';
        $data['status_singkatan'] = 'ADM';
        $data['nama_tabel'] = 'Data Pesanan 2017';
        $data['data_user_admin'] = $this->Admin_M->Read_Data_User_Admin($_SESSION['Logged-Admin']['id']);
        $data['data_pesanan'] = $this->P2017_M->Read_Data_Pesanan();
        $data['data_barang_tipe'] = $this->Charts_M->Read_Select_Chart_Barang_Tipe();
        return $data;
    }

    public function Update_Pesanan($id) 
    {
        if (isset($_POST['close'])) {
            redirect(site_url('Admin/P2017'));
        } else {
            $data = array(
                'nama_agen' => $this->input->post('nama_agen'),
                'januari' => $this->input->post('januari'),
                'februari' => $this->input->post('februari'),
                'maret' => $this->input->post('maret'),
                'april' => $this->input->post('april'),
                'mei' => $this->input->post('mei'),
                'juni' => $this->input->post('juni'),
                'juli' => $this->input->post('juli'),
                'agustus' => $this->input->post('agustus'),
                'september' => $this->input->post('september'),
                'oktober' => $this->input->post('oktober'),
                'november' => $this->input->post('november'),
                'desember' => $this->input->post('desember'),
                'total' => $this->input->post('januari')+$this->input->post('februari')+$this->input->post('maret')+ $this->input->post('april')+$this->input->post('mei')+$this->input->post('juni')+$this->input->post('juli')+$this->input->post('agustus')+$this->input->post('september')+$this->input->post('oktober')+$this->input->post('november')+$this->input->post('desember'),
            );
            $this->P2017_M->Update_Data_Pesanan($id, $data);
            redirect(site_url('Admin/P2017'));
        }
    }

    public function Delete_Pesanan($id) 
    {
        $this->P2017_M->Delete_Data_Pesanan($id);
        $this->session->set_flashdata('Delete','Success');
        redirect(site_url('Admin/P2017'));
    }
	
}
