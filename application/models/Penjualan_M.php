<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penjualan_M extends CI_Model {

    public function Read_Data_User_Penjualan($id)
    {
        $this->db->select('*');
        $this->db->from('data_pesanan');
        $this->db->where('id_agen',$id);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function Create_Data_Penjualan($data)
    {
        $this->db->insert('user_penjualan', $data);
        return ;
    }

    public function Read_Data_Penjualan()
    {
        $this->db->select('*');
        $this->db->from('user_penjualan');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function Update_Data_Penjualan($id, $data)
    {
        $this->db->where('id', $id);
		$this->db->update('user_penjualan', $data);
	    return;
    }
    
    public function Delete_Data_Penjualan($id)
    {
        $this->db->delete('user_penjualan', array('id' => $id));
	    return;
    }
}