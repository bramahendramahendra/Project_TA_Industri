<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register_M extends CI_Model {

    public function Cek_Duplikat_Admin($data)
    {
        $this->db->where($data);
        $query = $this->db->get('user_admin');
        return $query->first_row();
    }

    public function Cek_Duplikat_Agen($data)
    {
        $this->db->where($data);
        $query = $this->db->get('user_agen');
        return $query->first_row();
    }
    
    public function Register_Admin($data)
	{
        $this->db->insert('user_admin', $data);
        return $this->db->insert_id();
    }

    public function Register_Agen($data)
	{
        $this->db->insert('user_agen', $data);
        return $this->db->insert_id();
    }

    public function Register_Data_Admin($data)
    {
        $this->db->insert('data_user_admin', $data);
        return ;
    }

    public function Register_Data_Agen($data)
    {
        $this->db->insert('data_user_agen', $data);
        return ;
    }

}