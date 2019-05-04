<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Charts_M extends CI_Model {

    public function Read_Data_Chart_Barang_Bulanan($bulan, $tahun)
    {
        $this->db->select('data_user_agen.first_name AS nama_agen,
        SUM(IF(YEAR(tanggal_pemesanan) = '.$tahun.' and MONTH(tanggal_pemesanan) = '.$bulan.', jumlah_barang, 0)) AS jumlah');
        $this->db->from('data_pesanan');
        $this->db->join('data_user_agen', 'data_user_agen.id_agen = data_pesanan.id_agen');
        $this->db->group_by('nama_agen');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function Read_Data_Chart_Barang_Tahunan($tahun)
    {
        $this->db->select('data_user_agen.first_name AS nama_agen,
        SUM(IF(YEAR(tanggal_pemesanan) = '.$tahun.', jumlah_barang, 0)) AS jumlah');
        $this->db->from('data_pesanan');
        $this->db->join('data_user_agen', 'data_user_agen.id_agen = data_pesanan.id_agen');
        $this->db->group_by('nama_agen');
        $query = $this->db->get();
        return $query->result_array();
    }
}