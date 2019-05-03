<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
        $cookie = $this->input->cookie('Logged-Keuangan'); 
        if(isset($cookie)){
            $data = array();
            $data['id'] = $cookie;
            $data['logged'] = True;
            $this->session->set_userdata('Logged-Keuangan', $data);
            redirect(site_url('Keuangan/Dashboard'));
        } elseif(isset($_SESSION['Logged-Keuangan'])) {
            redirect(site_url('Keuangan/Dashboard'));
        } else {
            $data = $this->Read_Login();
            // memanggil view Login
            $this->load->view('Template/Department/1/Header_V');
            $this->load->view('Content/Keuangan/Login_V',$data);
            $this->load->view('Template/Department/1/Footer_V');
        }
    }

    public function Read_Login() {
        $data = array();
        $data['title'] = 'PT Zetka Niagatama';
        $data['title_form'] = 'Login Keuangan';
        return $data;
    }
    
    public function Sign_In()
	{
        // form validation
        if ($this->form_validation->run('login-department') == FALSE) {
            // load failed template
            $data = $this->Read_Login();
            // memanggil view Login
            $this->load->view('Template/Department/1/Header_V');
            $this->load->view('Content/Keuangan/Login_V',$data);
            $this->load->view('Template/Department/1/Footer_V');
        }
        else {
            // load success template
            $data = array();
            $data['username']= $this->input->post('username1');
            $data['password'] = md5($this->input->post('password1'));
            
            // mencari user admin
            $user_keuangan = $this->Login_M->Cari_User_Keuangan($data);
            if($user_keuangan == FALSE) {

                // jika validasi dalam kondisi fail
                $this->session->set_flashdata('FailedLogin','Failed');
                
                // buat array baru
                $data = $this->Read_Login();

                // memanggil view register
                $this->load->view('Template/Department/1/Header_V');
                $this->load->view('Content/Keuangan/Login_V',$data);
                $this->load->view('Template/Department/1/Footer_V');
            } else {
                
                // mengeset jam timezone
                date_default_timezone_set('Asia/Jakarta');
                //membuat array untuk last login
                $data = array();
                $data['last_login'] = Date("Y-m-d H:i:s");

                // mengeset id
                $id = $user_keuangan->id;

                // mengupdate last login
                $this->Login_M->Login_Keuangan($id,$data);
                
                // mengcreate cookie
                if($this->input->post('remember') != null) {
                    // mengeset cookie login
                    set_cookie('Logged-Keuangan', $id, '3600');
                    redirect(site_url('Keuangan/Login'));
                } else {
                    $data = array();
                    $data['id'] = $id;
                    $data['logged'] = True;
                    $this->session->set_userdata('Logged-Keuangan', $data);
                    redirect(site_url('Keuangan/Login'));
                }

            }
        }
    }

	
}
