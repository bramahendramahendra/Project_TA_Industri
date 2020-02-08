<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    // public function SignUp() 
    // {
    //     $data = $this->Read_Register();
    //     $this->load->view('Template/Agen/1/Header_V');
    //     $this->load->view('Content/Agen/Sign_In_Up_V');
    //     $this->load->view('Template/Agen/1/Footer_V');
    // }

   
	public function index()
	{
        // form validation
        if ($this->form_validation->run('signup-agen') == FALSE) {
            // load failed template
            $this->session->set_flashdata('SignUp','FailedInput');
            // memanggil view register
            $data = $this->Read_Register();
            $this->load->view('Template/Agen/1/Header_V');
            $this->load->view('Content/Agen/Sign_In_Up_V',$data);
            $this->load->view('Template/Agen/1/Footer_V');
        } else {
            // load success template
            //membuat array untuk username dan email
            $data = array();
            $data['username'] = $this->input->post('username');
            $data['email'] = $this->input->post('email');
            // mengecek duplikat username dan email agen
            $duplikat = $this->Register_M->Cek_Duplikat_Agen($data);
            // kondisi if else
            if($duplikat == TRUE) { // jika validasi dalam kondisi failed
                $this->session->set_flashdata('SignUp','FailedDuplikat');

                // memanggil view register
                $data = $this->Read_Register();
                $this->load->view('Template/Agen/1/Header_V');
                $this->load->view('Content/Agen/Sign_In_Up_V',$data);
                $this->load->view('Template/Agen/1/Footer_V');
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
                

                $this->Register_M->Register_Data_Agen($data);
                $this->session->set_flashdata('SignUp','Success');
                redirect(site_url('Agen/Login'));
            }
        }
    }

    public function Read_Register() {
        $data = array();
        $data['title'] = 'PT Zetka Niagatama';
        $data['title_form'] = 'Register Agen';
        return $data;
    }

}