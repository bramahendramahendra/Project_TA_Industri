<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesanan_M extends CI_Model {

    public function Read_Data_Pesanan()
    {
        $this->db->select('data_pesanan.*, data_user_agen.first_name, data_user_agen.last_name, data_user_agen.npwp');
        $this->db->from('data_pesanan');
        $this->db->join('data_user_agen', 'data_user_agen.id_agen = data_pesanan.id_agen');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function Read_Data_Status_Pesanan()
    {
        $this->db->select('data_pesanan.*, data_user_agen.first_name, data_user_agen.last_name, data_user_agen.npwp');
        $this->db->from('data_pesanan');
        $this->db->join('data_user_agen', 'data_user_agen.id_agen = data_pesanan.id_agen');
        $this->db->where('status','pending');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function Create_Data_Pesanan($data)
    {
        $this->db->insert('data_pesanan', $data);
        return $this->db->insert_id();
    }

    public function Create_Notifikasi_Pesanan($data)
    {
        $this->db->insert('notifikasi_status_penjualan', $data);
        return ;
    }

    
    public function Read_Notifikasi_Penjualan_Pesanan()
    {
        $this->db->select('data_user_agen.first_name AS nama, data_pesanan.tanggal_pemesanan AS tanggal');
        $this->db->from('notifikasi_status_penjualan');
        $this->db->join('data_pesanan', 'notifikasi_status_penjualan.id_pesanan = data_pesanan.id');
        $this->db->join('data_user_agen', 'data_user_agen.id_agen = data_pesanan.id_agen');
        $this->db->where('notifikasi_status_penjualan.status',0);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function Read_Data_Pesanan_Agen($id)
    {
        $this->db->select('*');
        $this->db->from('data_pesanan');
        $this->db->where('id_agen',$id);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function Update_Data_Pesanan($id, $data)
    {
        $this->db->where('id', $id);
		$this->db->update('data_pesanan', $data);
	    return;
    }

    public function Update_Status_Pesanan($id, $data) 
    {
        $this->db->where('id', $id);
        $this->db->update('data_pesanan', $data);
        $this->db->where('id_pesanan', $id);
		$this->db->update('notifikasi_status_penjualan', array('status' => 1));
	    return;
    }
    
    public function Delete_Data_Pesanan($id)
    {
        $this->db->delete('data_pesanan', array('id' => $id));
        $this->db->delete('notifikasi_status_penjualan', array('id_pesanan' => $id));
	    return;
    }
}