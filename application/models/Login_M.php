<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_M extends CI_Model {

    public function Cari_User_Admin($data)
    {
        $this->db->select('id');
        $this->db->from('user_admin');
        $this->db->where($data);
        $query = $this->db->get();
        return $query->first_row();
    }

    public function Cari_User_Agen($data)
    {
        $this->db->select('id');
        $this->db->from('user_agen');
        $this->db->where($data);
        $query = $this->db->get();
        return $query->first_row();
    }

    public function Cari_User_Keuangan($data)
    {
        $this->db->select('id');
        $this->db->from('user_keuangan');
        $this->db->where($data);
        $query = $this->db->get();
        return $query->first_row();
    }

    public function Cari_User_Penjualan($data)
    {
        $this->db->select('id');
        $this->db->from('user_penjualan');
        $this->db->where($data);
        $query = $this->db->get();
        return $query->first_row();
    }

    public function Login_Admin($id,$data)
	{
        $this->db->where('id', $id);
		$this->db->update('user_admin', $data);
	    return;
    }

    public function Login_Agen($id,$data)
	{
        $this->db->where('id', $id);
		$this->db->update('user_agen', $data);
	    return;
    }

    public function Login_Keuangan($id,$data)
	{
        $this->db->where('id', $id);
		$this->db->update('user_keuangan', $data);
	    return;
    }

    public function Login_Penjualan($id,$data)
	{
        $this->db->where('id', $id);
		$this->db->update('user_penjualan', $data);
	    return;
    }

}