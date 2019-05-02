<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agen_M extends CI_Model {

    public function Read_Data_Agen()
    {
        $this->db->select('data_user_agen.*, user_agen.email');
        $this->db->from('data_user_agen');
        $this->db->join('user_agen', 'data_user_agen.id_agen = user_agen.id');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function Read_Data_User_Agen($id)
    {
        $this->db->select('*');
        $this->db->from('data_user_agen');
        $this->db->where('id_agen',$id);
        $query = $this->db->get();
        return $query->first_row();
    }

    public function Update_Data_Agen($id, $data)
    {
        $this->db->where('id_agen', $id);
		$this->db->update('data_user_agen', $data);
	    return;
    }

    public function Delete_Data_Agen($id)
    {
        $this->db->delete('user_agen', array('id' => $id));
        $this->db->delete('data_user_agen', array('id_agen' => $id));
	    return;
    }

}