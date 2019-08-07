<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users_model extends CI_Model
{
    public function insert_users_into_DB($data_to_insert)
    {

        $this->db->insert('login', $data_to_insert);
    }

    public function get_users_data()
    {
        $query = $this->db->get('login');
        return $query->result_array();
    }

    public function get_usersid_data($user_id)
    {
        $this->db->where('id', $user_id);
        $query = $this->db->get('login');
        return $query->result_array();

    }
    public function delete_users_data($id)
    {

        $this->db->where('id', $id);
        $this->db->delete('login');
    }
    public function update_users_data($id, $update_data)
    {

        $this->db->where('id', $id);
        $this->db->update('login', $update_data);
    }
    public function activate($pages_id, $update_status)
    {

        $this->db->where('id', $pages_id);
        $this->db->update('login', $update_status);

    }

}
