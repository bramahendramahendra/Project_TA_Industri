<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keuangan_M extends CI_Model {

    public function Read_Data_User_Keuangan($id)
    {
        $this->db->select('*');
        $this->db->from('data_pesanan');
        $this->db->where('id_agen',$id);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function Create_Data_Keuangan($data)
    {
        $this->db->insert('user_keuangan', $data);
        return ;
    }

    public function Read_Data_Keuangan()
    {
        $this->db->select('*');
        $this->db->from('user_keuangan');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function Update_Data_Keuangan($id, $data)
    {
        $this->db->where('id', $id);
		$this->db->update('user_keuangan', $data);
	    return;
    }
    
    public function Delete_Data_Keuangan($id)
    {
        $this->db->delete('user_keuangan', array('id' => $id));
	    return;
    }
}