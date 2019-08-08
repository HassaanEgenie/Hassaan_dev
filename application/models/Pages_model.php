<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pages_model extends CI_Model
{
    public function insert_pages_into_DB($data_to_insert)
    {

        $this->db->insert('pages', $data_to_insert);
    }

    public function get_pages_data()
    {

        $query = $this->db->get('pages');
        return $query->result_array();
    }

    public function get_pagesid_data($user_id)
    {
        $this->db->where('id', $user_id);
        $query = $this->db->get('pages');
        return $query->result_array();

    }
    public function delete_pages_data($id)
    {

        $this->db->where('id', $id);
        $this->db->delete('pages');
    }
    public function update_pages_data($id, $update_data)
    {

        $this->db->where('id', $id);
        $this->db->update('pages', $update_data);
    }
    public function activate($pages_id, $update_status)
    {

        $this->db->where('id', $pages_id);
        $this->db->update('pages', $update_status);

    }

}
