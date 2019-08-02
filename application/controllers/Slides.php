<?php
defined("BASEPATH") or die("No direct script access allowed");

class Slides extends CI_Controller
{

    public function index($slider_id)
    {

        $this->load->model('Main_model');

        $this->form_validation->set_rules('slide_id', 'slide_id', 'required');

        if ($this->form_validation->run() == false) {

            $record = $this->Main_model->checkslide($slider_id);

            $data['records'] = $record;

            $this->load->view("partial/header", $data);
            $this->load->view("slides/index_slides");
            $this->load->view("partial/footer");

        } else {

            $action = $this->input->post('action');
         
            if ($action == "delete") {
                //delete
                $slide_id = $this->input->post('slide_id');
                $this->Main_model->delete_slide_data($slide_id);
                $record = $this->Main_model->get_slide_data();

                if (!empty($record)) {

                    $data['records'] = $record;

                    $this->load->view("partial/header");
                    $this->load->view("slides/index_slides", $data);
                    $this->load->view("partial/footer");

                } else {

                    $this->load->view("partial/header");
                    $this->load->view("slides/slide_empty");
                    $this->load->view("partial/footer");
                }
            } //delete

            else if ($action == "activate") {

                $slider_id = $this->input->post('slider_id');
                $update_status['slide_status'] = 1;
                $this->Main_model->activate($slide_id, $slider_id, $update_status);
                redirect(base_url("slides/index/" . $slider_id));

            } else if ($action == "deactivate") {

                $slider_id = $this->input->post('slider_id');
                $update_status['slide_status'] = 0;
                $this->Main_model->activate($slide_id, $slider_id, $update_status);
                redirect(base_url("slides/index/" . $slider_id));

            } else {

            }

        }

    }

    public function edit($slide_id, $slider_id)
    {
        $this->load->model('Main_model');
        $update_data = array();

        $user_data = $this->Main_model->get_slideid_data($slide_id, $slider_id);
        $data['user_data'] = $user_data[0];

        $this->load->library("form_validation");
        $this->form_validation->set_rules('title', 'title', 'required');
        $this->form_validation->set_rules('slide_description', 'slide_description', 'required');
        $this->form_validation->set_rules('status', 'status', 'required');
        $this->form_validation->set_rules('slide_video', 'slide_video', 'required');
        $this->form_validation->set_rules('slide_content', 'slide_content', 'required');
        $this->form_validation->set_rules('slide_type', 'slide_type', 'required');

        if ($this->form_validation->run() == false) {

            $this->load->view("partial/header");
            $this->load->view("slides/slide_edit", $data);
            $this->load->view("partial/footer");
        } else {

            $updated_title = $this->input->post('title');
            $updated_description = $this->input->post('slide_description');
            $updated_status = $this->input->post('status');
            $updated_image = $this->input->post('slide_image');
            $updated_video = $this->input->post('slide_video');
            $updated_content = $this->input->post('slide_content');
            $updated_type = $this->input->post('slide_type');

            $data_to_update = array();

            if (isset($_FILES['slide_image']) && !empty($_FILES['slide_image']['name'])) {
                $errors = array();
                $file_name = $_FILES['slide_image']['name'];
                $file_tmp = $_FILES['slide_image']['tmp_name'];

                move_uploaded_file($file_tmp, "assets/img/" . $file_name);
                $data_to_update['slide_image'] = $file_name; //"images/" . $file_name
            }

            $data_to_update['slide_title'] = $updated_title;
            $data_to_update['slide_description'] = $updated_description;
            $data_to_update['slide_status'] = $updated_status;
            $data_to_update['slide_video'] = $updated_video;
            $data_to_update['slide_content'] = $updated_content;
            $data_to_update['slider_id'] = $slider_id;
            $data_to_update['slide_type'] = $updated_type;

            $this->Main_model->update_slide_data($slide_id, $slider_id, $data_to_update);

            redirect(base_url("slides/index/" . $slider_id));
        }
    }

    public function add($slider_id) //$slider_id

    {
        //$slider_id = $this->uri->segment(3);

        // $view_data = [];
        $this->load->model('Main_model');
        $this->load->library("form_validation");
        $this->form_validation->set_rules('title', 'title', 'required');
        $this->form_validation->set_rules('slide_description', 'slide_description', 'required');
        $this->form_validation->set_rules('status', 'status', 'required');
        $this->form_validation->set_rules('slide_video', 'slide_video', 'required');
        $this->form_validation->set_rules('slide_content', 'slide_content', 'required');
        $this->form_validation->set_rules('slide_type', 'slide_type', 'required');
        $this->form_validation->run();

        // $view_data['slider_id'] = $slide_id;
        if ($this->form_validation->run() == false) {
            $this->load->view("partial/header"); //$view_data
            $this->load->view("slides/add_slide");
            $this->load->view("partial/footer");
        } else {
            //handle post here

            $updated_title = $this->input->post('title');
            $updated_description = $this->input->post('slide_description');
            $updated_status = $this->input->post('status');
            $updated_image = $this->input->post('slide_image');
            $updated_video = $this->input->post('slide_video');
            $updated_content = $this->input->post('slide_content');
            $updated_type = $this->input->post('slide_type');

            if (isset($_FILES['slide_image'])) {
                $errors = array();
                $file_name = $_FILES['slide_image']['name'];
                $file_tmp = $_FILES['slide_image']['tmp_name'];

                move_uploaded_file($file_tmp, "assets/img/" . $file_name);
            }

            $data_to_insert = array();
            $data_to_update['slide_title'] = $updated_title;
            $data_to_update['slide_description'] = $updated_description;
            $data_to_update['slide_status'] = $updated_status;
            $data_to_update['slide_image'] = $file_name; //"images/" . $file_name
            $data_to_update['slide_video'] = $updated_video;
            $data_to_update['slide_content'] = $updated_content;
            $data_to_update['slider_id'] = $slider_id;
            $data_to_update['slide_type'] = $updated_type;

            $this->Main_model->insert_slide_into_DB($slider_id, $data_to_update);

            redirect(base_url("slides/index/" . $slider_id));
        }

    }
}

// public function index($slider_id)
//     {

//         $this->load->model('Main_model');
//         $slide_id = $this->input->post('slide_id');
//         $record = $this->Main_model->checkslide($slider_id);
//         $this->Main_model->delete_slide_data($slide_id);
//         if (!empty($record)) {
//             $data['records'] = $record;
//             $this->load->view("partial/header");
//             $this->load->view("slides/index_slides", $data);
//             $this->load->view("partial/footer");

//         } else {

//             $this->load->view("partial/header");
//             $this->load->view("slides/slide_empty");
//             $this->load->view("partial/footer");
//         }

//     }

// $this->form_validation->set_rules('slide_id', 'Slide Id', 'required');
// if ($this->form_validation->run() == false) {
//     $data['records'] = $this->Main_model->get_slide_data();
//     //Get
//     $this->load->view("partial/header", $data);
//     $this->load->view("slides/index_slides");
//     $this->load->view("partial/footer");
// } else {
//     //Post
// }

// public function delete()
// {
//     $slide_id = $this->input->post('slide_id');

//     $this->load->model('Main_model');

//     $this->Main_model->delete_slide_data($slide_id);

//     $this->load->view("partial/header");
//     $data['records'] = $this->Main_model->get_slide_data();
//     $this->load->view("slides/index_slides", $data);
//     $this->load->view("partial/footer");
// }
