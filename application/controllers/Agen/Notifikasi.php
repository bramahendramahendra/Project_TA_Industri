<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notifikasi extends CI_Controller {

	public function index($id)
	{
        $this->Pesanan_M->Update_Status_Agen($id);
        redirect(site_url('Agen/Pesanan'));
    }
    
}
