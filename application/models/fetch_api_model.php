<?php
defined('BASEPATH') or exit('No direct script access allowed');

class fetch_api_model extends CI_Model
{
    public function insert_posts_data($data)
    {
        $this->db->insert('jsonplaceholder_posts', $data);
    }
    public function insert_comments_data($data)
    {
        $this->db->insert('jsonplaceholder_comments', $data);
    }
    public function insert_albums_data($data)
    {
        $this->db->insert('jsonplaceholder_albums', $data);
    }
    public function insert_photos_data($data)
    {
        $this->db->insert('jsonplaceholder_photos', $data);
    }
    public function insert_todos_data($data)
    {
        $this->db->insert('jsonplaceholder_todos', $data);
    }
    public function insert_users_data($data)
    {
        $this->db->insert('jsonplaceholder_users', $data);
    }
    public function insert_company_data($data)
    {
        $this->db->insert('jsonplaceholder_users', $data);
    }
}