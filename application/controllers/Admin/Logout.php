<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {

	public function index()
	{
		$cookie = $this->input->cookie('Logged-Admin');
        if(isset($cookie)) {
			delete_cookie('Logged-Admin');
			session_destroy();
            redirect('Admin/Login');
        } else {
            session_destroy();
            redirect('Admin/Login');
        }
    }
    
}
