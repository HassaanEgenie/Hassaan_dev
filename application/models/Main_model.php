<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main_model extends CI_Model
{
    public function insert_user_into_DB($data_to_insert)
    {

        $this->db->insert('login', $data_to_insert);
    }

    public function insert_slider_into_DB($data_to_insert)
    {

        $this->db->insert('slider', $data_to_insert);
    }

    public function insert_slide_into_DB($slider_id, $data_to_insert)
    {
        $this->db->insert('slides', $data_to_insert);
    }

    public function get_slider_data()
    {
        $query = $this->db->get('slider');
        return $query->result_array();
    }
    public function get_slide_data()
    {
        $query = $this->db->get('slides');
        return $query->result_array();
    }

    public function get_sliderid_data($user_id)
    {
        $this->db->where('slider_id', $user_id);
        $query = $this->db->get('slider');
        return $query->result_array();

    }
    public function get_slideid_data($slide_id, $slider_id)
    {
        $this->db->select('*');
        $this->db->where('slider_id', $slider_id);
        $this->db->where('slide_id', $slide_id);
        $query = $this->db->get('slides');
        return $query->result_array();

    }

    public function delete_slider_data($id)
    {
        $this->db->where('slider_id', $id);
        $this->db->delete('slider');
    }
    public function delete_slide_data($id)
    {
        $this->db->where('slide_id', $id);
        $this->db->delete('slides');
    }

    public function update_slider_data($id, $update_data)
    {

        $this->db->where('slider_id', $id);
        $this->db->update('slider', $update_data);
    }
    public function update_slide_data($slide_id, $slider_id, $update_data)
    {

        $this->db->where('slide_id', $slide_id);
        $this->db->where('slider_id', $slider_id);
        $this->db->update('slides', $update_data);
    }
    public function checkslide($id)
    {

        $this->db->select('*');
        $this->db->where('slider_id', $id);
        $query = $this->db->get('slides');

        return $query->result_array();
    }
    public function activate($slide_id, $slider_id, $update_status)
    {
        $this->db->where('slide_id', $slide_id);
        $this->db->where('slider_id', $slider_id);
        $this->db->update('slides', $update_status);

    }
    public function activate_slider( $slider_id, $update_status)
    {
      
        $this->db->where('slider_id', $slider_id);
        $this->db->update('slider', $update_status);

    }
    public function slide_count($slider_id)
    { 
        $this->db->select('*');
        $this->db->where('slider_id',$slider_id);
        return $this->db->count_all_results("slides");
    }
}