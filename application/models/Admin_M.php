<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_M extends CI_Model {

    public function Read_Data_User_Admin($id)
    {
        $this->db->select('*');
        $this->db->from('data_user_admin');
        $this->db->where('id_admin',$id);
        $query = $this->db->get();
        return $query->first_row();
    }

    public function Update_Profile_Admin($id, $data)
    {
        $this->db->where('id_admin', $id);
		$this->db->update('data_user_admin', $data);
	    return;
    }

}