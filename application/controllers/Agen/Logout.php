<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {

	public function index()
	{
		$cookie = $this->input->cookie('Logged-Agen');
        if(isset($cookie)) {
			delete_cookie('Logged-Agen');
			session_destroy();
            redirect('Agen/Login');
        } else {
            session_destroy();
            redirect('Agen/Login');
        }
    }
    
}
