<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Charts_M extends CI_Model {

    Public function Read_Select_Chart_Barang_Tipe() {
        $this->db->distinct();
        $this->db->select('tipe_barang');
        $this->db->from('data_pesanan');
        $this->db->order_by('tipe_barang', 'ASC');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function Read_Data_Chart_Barang_Tipe($tipe)
    {
        $this->db->select('data_user_agen.first_name AS nama_agen,
        SUM(IF(tipe_barang = "'.$tipe.'", jumlah_barang, 0)) AS jumlah');
        $this->db->from('data_pesanan');
        $this->db->join('data_user_agen', 'data_user_agen.id_agen = data_pesanan.id_agen');
        $this->db->where('status', 'approve');
        $this->db->group_by('nama_agen');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function Read_Data_Chart_Barang_Tipe_Agen($tahun, $id)
    {
        $this->db->select('data_pesanan.tipe_barang AS nama,
        SUM(IF(YEAR(tanggal_pemesanan) = '.$tahun.', jumlah_barang, 0)) AS jumlah');
        $this->db->from('data_pesanan');
        $this->db->where('id_agen', $id);
        $this->db->where('status', 'approve');
        $this->db->group_by('tipe_barang');
        $query = $this->db->get();
        return $query->result_array();
        // echo $id;
        // echo('<br>');
        // foreach ($jumlah as $value) { 
        //     echo $value['tipe_barang'];
        //     echo('=');
        //     echo $value['jumlah'];
        //     echo('<br>');
        // }
        // die;            
    }

    public function Read_Data_Chart_Barang_Bulanan($bulan, $tahun)
    {
        $this->db->select('data_user_agen.first_name AS nama_agen,
        SUM(IF(YEAR(tanggal_pemesanan) = '.$tahun.' and MONTH(tanggal_pemesanan) = '.$bulan.', jumlah_barang, 0)) AS jumlah');
        $this->db->from('data_pesanan');
        $this->db->join('data_user_agen', 'data_user_agen.id_agen = data_pesanan.id_agen');
        $this->db->where('status', 'approve');
        $this->db->group_by('nama_agen');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function Read_Data_Chart_Barang_Bulanan_Agen($id, $tahun)
    {
        $this->db->select('MONTH(tanggal_pemesanan) AS nama,
        SUM(IF(YEAR(tanggal_pemesanan) = '.$tahun.', jumlah_barang, 0)) AS jumlah');
        $this->db->from('data_pesanan');
        $this->db->where('id_agen', $id);
        $this->db->where('status', 'approve');
        $this->db->group_by('MONTH(tanggal_pemesanan)');
        $query = $this->db->get();
        return $query->result_array();

        

        // echo $id;
        // echo('<br>');
        // foreach ($coba as $value) { 
        //     if ($value['nama'] = 5) {
        //         echo ('mei');
        //     }
        //     echo('=');
        //     echo $value['jumlah'];
        //     echo('<br>');
        // }
        // die; 
    }

    public function Read_Data_Chart_Barang_Tahunan($tahun)
    {
        $this->db->select('data_user_agen.first_name AS nama_agen,
        SUM(IF(YEAR(tanggal_pemesanan) = '.$tahun.', jumlah_barang, 0)) AS jumlah');
        $this->db->from('data_pesanan');
        $this->db->join('data_user_agen', 'data_user_agen.id_agen = data_pesanan.id_agen');
        $this->db->where('status', 'approve');
        $this->db->group_by('nama_agen');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function Read_Data_Chart_Barang_Tahunan_Agen($id)
    {
        $this->db->select('YEAR(tanggal_pemesanan) AS nama,
        SUM(jumlah_barang) AS jumlah');
        $this->db->from('data_pesanan');
        $this->db->where('id_agen', $id);
        $this->db->where('status', 'approve');
        $this->db->group_by('YEAR(tanggal_pemesanan)');
        $query = $this->db->get();
        return $query->result_array();
    }
}