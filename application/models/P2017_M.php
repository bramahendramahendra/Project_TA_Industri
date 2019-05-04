<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class P2017_M extends CI_Model {

    public function Read_Data_Pesanan()
    {
        $this->db->select('*');
        $this->db->from('data_p2017');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function Create_Data_Pesanan($data)
    {
        $this->db->insert('data_p2017', $data);
        return ;
    }


    public function Update_Data_Pesanan($id, $data)
    {
        $this->db->where('id', $id);
		$this->db->update('data_p2017', $data);
	    return;
    }
    
    public function Delete_Data_Pesanan($id)
    {
        $this->db->delete('data_p2017', array('id' => $id));
	    return;
    }

    public function Read_Data_Chart_Barang_Bulanan($bulan)
    {
        $this->db->select('data_p2017.nama_agen, data_p2017.'.$bulan.' AS jumlah');
        $this->db->from('data_p2017');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function Read_Data_Chart_Barang_Tahunan()
    {
        $this->db->select('data_p2017.nama_agen, data_p2017.total AS jumlah');
        $this->db->from('data_p2017');
        $query = $this->db->get();
        return $query->result_array();
    }
}