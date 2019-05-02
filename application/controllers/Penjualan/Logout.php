<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {

	public function index()
	{
		$cookie = $this->input->cookie('Logged-Penjualan');
        if(isset($cookie)) {
			delete_cookie('Logged-Penjualan');
			session_destroy();
            redirect('Penjualan/Login');
        } else {
            session_destroy();
            redirect('Penjualan/Login');
        }
    }
    
}
