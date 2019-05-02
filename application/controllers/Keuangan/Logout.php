<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {

	public function index()
	{
		$cookie = $this->input->cookie('Logged-Keuangan');
        if(isset($cookie)) {
			delete_cookie('Logged-Keuangan');
			session_destroy();
            redirect('Keuangan/Login');
        } else {
            session_destroy();
            redirect('Keuangan/Login');
        }
    }
    
}
