<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller {

	public function index()
	{
		$this->load->view('Template/Landing/Header_V');
		$this->load->view('Content/Landing_V');
		$this->load->view('Template/Landing/Footer_V');
	}

	public function menu() {
		if(isset($_POST['admin'])) {
			redirect(site_url('Admin/Login'));
		} 
		if(isset($_POST['agen'])) {
			redirect(site_url('Agen/Login'));
		} 
		if(isset($_POST['keuangan'])) {
			redirect(site_url('Keuangan/Login'));
		} 
		if(isset($_POST['penjualan'])) {
			redirect(site_url('Penjualan/Login'));
		} 
		
	}
}
