<?php
defined('BASEPATH') or exit('No direct script access allowed');

class social_media_model extends CI_Model
{
    public function insert_social_into_DB($data_to_insert)
    {

        $this->db->insert('social', $data_to_insert);
    }

    public function get_social_data()
    {
        $this->db->select('*');
        $query = $this->db->get('social');
        return $query->result_array();

    }

    public function get_socialid_data($user_id)
    {
        $this->db->where('id', $user_id);
        $query = $this->db->get('social');
        return $query->result_array();

    }
    public function delete_social_data($id)
    {

        $this->db->where('id', $id);
        $this->db->delete('social');
    }
    public function update_social_data($id, $update_data)
    {

        $this->db->where('id', $id);
        $this->db->update('social', $update_data);
    }
    public function activate($pages_id, $update_status)
    {

        $this->db->where('id', $pages_id);
        $this->db->update('pages', $update_status);

    }

}
