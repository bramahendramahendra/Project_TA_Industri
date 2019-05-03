<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function index()
	{
        $data = array();
        $data['title'] = 'PT Zetka Niagatama';
        $data['title_form'] = 'Register Admin';
        // memanggil view register
		$this->load->view('Template/Admin/1/Header_V');
		$this->load->view('Content/Admin/Register_V',$data);
		$this->load->view('Template/Admin/1/Footer_V');
    }

    public function Sign_Up()
	{
        // form validation
        if ($this->form_validation->run('register') == FALSE) {
            // load failed template
            $data = array();
            $data['title'] = 'Registrasi Admin'; 
            // memanggil view register
            $this->load->view('Template/Admin/1/Header_V');
            $this->load->view('Content/Admin/Register_V');
            $this->load->view('Template/Admin/1/Footer_V');
        }
        else {
            // load success template
            //membuat array untuk username dan email
            $data = array();
            $data['username'] = $this->input->post('username1');
            $data['email'] = $this->input->post('email1');

            // mengecek duplikat username dan email admin
            $duplikat = $this->Register_M->Cek_Duplikat_Admin($data);
            if($duplikat == TRUE) {
                // jika validasi dalam kondisi fail
                $this->session->set_flashdata('FailedRegister','Failed');
                
                // buat array baru
                $data = array();
                $data['title'] = 'Registrasi Admin'; 

                // memanggil view register
                $this->load->view('Template/Admin/1/Header_V');
                $this->load->view('Content/Admin/Register_V',$data);
                $this->load->view('Template/Admin/1/Footer_V');
            } else {
                // mengeset jam timezone
                date_default_timezone_set('Asia/Jakarta');

                //membuat array untuk password dan create date
                $data['password'] = md5($this->input->post('password1'));
                $data['create_date'] = Date("Y-m-d H:i:s");

                // insert data admin
                $id = $this->Register_M->Register_Admin($data);
                
                // membuat array baru untuk data admin
                $data = array();
                $data['id_admin'] = $id;
                $data['first_name'] = $this->input->post('first_name');
                $data['last_name'] = $this->input->post('last_name');
              
                
                $this->Register_M->Register_Data_Admin($data);
                $this->session->set_flashdata('SuccessRegister','Success');
                redirect(site_url('Admin/Login'));
            }
        }
    }
}