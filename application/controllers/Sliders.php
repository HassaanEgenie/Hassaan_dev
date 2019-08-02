<?php
defined("BASEPATH") or die("No direct script access allowed");

class Sliders extends CI_Controller
{

    public function index() //$slider_id

    {

        $this->load->model('Main_model');
      
       

        $this->form_validation->set_rules('action', 'action', 'required');

        if ($this->form_validation->run() == false) {
            $sliders=$this->Main_model->get_slider_data();
            foreach ($sliders as $key => $slider) {
                $slide_count=$this->Main_model->slide_count($slider['slider_id']);
                $sliders[$key]['slides_count'] = $slide_count;
          
            }

       
          
            $data['records'] = $sliders;
            $this->load->view("partial/header", $data);
            $this->load->view("sliders/index");
            $this->load->view("partial/footer");
        } else {
            $action = $this->input->post('action');
           
            if ($action == "delete") {
            
                $slider_id = $this->input->post('slider_id');
              
                $this->Main_model->delete_slider_data($slider_id);
                $record = $this->Main_model->get_slider_data();

                if (!empty($record)) {

                    $data['records'] = $record;

                    $this->load->view("partial/header");
                    $this->load->view("sliders/index", $data);
                    $this->load->view("partial/footer");

                } 
            } //delete

            else if ($action == "activate") {

                $slider_id = $this->input->post('slider_id');
                $update_status['slider_status'] = 1;
                $this->Main_model->activate_slider($slider_id, $update_status);
                redirect(base_url("sliders/index/"));

            } else if ($action == "deactivate") {

                $slider_id = $this->input->post('slider_id');
                $update_status['slider_status'] = 0;
                $this->Main_model->activate_slider($slider_id, $update_status);
                redirect(base_url("sliders/index/"));

            } else {

            }
        }

    }
   
    public function edit($slider_id)
    {
        $this->load->model('Main_model');
        $update_data = array();

        $user_data = $this->Main_model->get_sliderid_data($slider_id);
        $data['user_data'] = $user_data[0];

        $this->load->library("form_validation");
        $this->form_validation->set_rules('title', 'title', 'required');
        $this->form_validation->set_rules('description', 'description', 'required');
        $this->form_validation->set_rules('status', 'status', 'required');

        if ($this->form_validation->run() == false) {

            $this->load->view("partial/header");
            $this->load->view("sliders/edit", $data);
            $this->load->view("partial/footer");
        } else {

            $updated_title = $this->input->post('title');
            $updated_description = $this->input->post('description');
            $updated_status = $this->input->post('status');

            $data_to_update = array();
            $data_to_update['slider_title'] = $updated_title;
            $data_to_update['slider_description'] = $updated_description;
            $data_to_update['slider_status'] = $updated_status;

            $this->Main_model->update_slider_data($slider_id, $data_to_update);
            $data['records'] = $this->Main_model->get_slider_data();

        }
    }

    public function add()
    {
        $this->load->model('Main_model');
        $this->load->library("form_validation");
        $this->form_validation->set_rules('title', 'title', 'required');
        $this->form_validation->set_rules('description', 'description', 'required');
        $this->form_validation->set_rules('status', 'status', 'required');

        $this->form_validation->run();

        if ($this->form_validation->run() == false) {
            $this->load->view("partial/header");
            $this->load->view("add_new_slider");
            $this->load->view("partial/footer");
        } else {
            //handle post here

            $updated_title = $this->input->post('title');
            $updated_description = $this->input->post('description');
            $updated_status = $this->input->post('status');

            $data_to_insert = array();
            $data_to_insert['slider_title'] = $updated_title;
            $data_to_insert['slider_description'] = $updated_description;
            $data_to_insert['slider_status'] = $updated_status;

            $this->Main_model->insert_slider_into_DB($data_to_insert);

            $data['records'] = $this->Main_model->get_slider_data();
            $this->load->view("partial/header");
            $data['records'] = $this->Main_model->get_slider_data();
            $this->load->view("sliders/index", $data);
            $this->load->view("partial/footer");
        }

    }
}