<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{
    public function get_adminid_data($user_id)
    {
        $this->db->where('id', $user_id);
        $query = $this->db->get('login');
        return $query->result_array();

    }
    public function insert_user_into_DB($data_to_insert)
    {

        $this->db->insert('login', $data_to_insert);
    }
}