<?php
defined("BASEPATH") or die("No direct script access allowed");

class Pages extends CI_Controller
{

    public function index() //$slider_id

    {

        $this->load->model('pages_model');

        $this->form_validation->set_rules('action', 'action', 'required');

        if ($this->form_validation->run() == false) {
            $pages = $this->pages_model->get_pages_data();
            $data['records'] = $pages;
            $this->load->view("partial/header", $data);
            $this->load->view("pages/index");
            $this->load->view("partial/footer");

        } else {
            $action = $this->input->post('action');

            if ($action == "delete") {

                $pages_id = $this->input->post('pages_id');

                $this->pages_model->delete_pages_data($pages_id);

                $record = $this->pages_model->get_pages_data();

                if (!empty($record)) {

                    $data['records'] = $record;

                    $this->load->view("partial/header");
                    $this->load->view("pages/index", $data);
                    $this->load->view("partial/footer");

                }
            } //delete

            else if ($action == "activate") {

                $pages_id = $this->input->post('pages_id');
                $update_status['status'] = 1;
                $this->pages_model->activate($pages_id, $update_status);
                redirect(base_url("pages/index"));

            } else if ($action == "deactivate") {

                $pages_id = $this->input->post('pages_id');
                $update_status['status'] = 0;
                $this->pages_model->activate($pages_id, $update_status);

            } else {

            }
        }

    }

    public function edit($pages_id)
    {
        $this->load->model('Pages_model');
        $update_data = array();

        $user_data = $this->Pages_model->get_pagesid_data($pages_id);
        $data['user_data'] = $user_data[0];

        $this->load->library("form_validation");
        if ($this->input->post('slug') == $this->input->post('oldslug')) {
            $this->form_validation->set_rules('slug', 'slug', 'required');
        } else {
            $this->form_validation->set_rules('slug', 'slug', 'required|is_unique[pages.slug]');
        }
        $this->form_validation->set_rules('title', 'title', 'required');
        $this->form_validation->set_rules('status', 'status', 'required');

        if ($this->form_validation->run() == false) {

            $this->load->view("partial/header");
            $this->load->view("pages/edit_pages", $data);
            $this->load->view("partial/footer");
        } else {

            $updated_id = $this->input->post('id');
            $updated_title = $this->input->post('title');
            $updated_name = $this->input->post('name');
            $updated_slug = $this->input->post('slug');
            $updated_status = $this->input->post('status');
            $updated_content = $this->input->post('content');
            $updated_copyright = $this->input->post('meta_copyright');
            $updated_description = $this->input->post('meta_description');
            $updated_keywords = $this->input->post('meta_keywords');
            $updated_robots = $this->input->post('meta_robots');
            $updated_dc_title = $this->input->post('meta_dc_title');

            $data_to_update = array();
            $data_to_update['id'] = $updated_id;
            $data_to_update['title'] = $updated_title;
            $data_to_update['name'] = $updated_name;
            $data_to_update['slug'] = $updated_slug;
            $data_to_update['status'] = $updated_status;
            $data_to_update['content'] = $updated_content;
            $data_to_update['meta_copyright'] = $updated_copyright;
            $data_to_update['meta_description'] = $updated_description;
            $data_to_update['meta_keywords'] = $updated_keywords;
            $data_to_update['meta_robots'] = $updated_robots;
            $data_to_update['meta_dc_title'] = $updated_dc_title;

            $this->Pages_model->update_pages_data($pages_id, $data_to_update);
            redirect(base_url("pages/index"));

        }
    }

    public function add()
    {
        $this->load->model('Pages_model');
        $this->load->library("form_validation");
        $this->form_validation->set_rules('slug', 'slug', 'required|is_unique[pages.slug]');
        $this->form_validation->set_rules('title', 'title', 'required');
        $this->form_validation->set_rules('status', 'status', 'required');

        $this->form_validation->run();

        if ($this->form_validation->run() == false) {
            $this->load->view("partial/header");
            $this->load->view("pages/add_pages");
            $this->load->view("partial/footer");
        } else {
            //handle post here

            $updated_id = $this->input->post('id');
            $updated_title = $this->input->post('title');
            $updated_name = $this->input->post('name');
            $updated_slug = $this->input->post('slug');
            $updated_status = $this->input->post('status');
            $updated_content = $this->input->post('content');
            $updated_copyright = $this->input->post('meta_copyright');
            $updated_description = $this->input->post('meta_description');
            $updated_keywords = $this->input->post('meta_keywords');
            $updated_robots = $this->input->post('meta_robots');
            $updated_dc_title = $this->input->post('meta_dc_title');

            $data_to_update = array();
            $data_to_update['id'] = $updated_id;
            $data_to_update['title'] = $updated_title;
            $data_to_update['name'] = $updated_name;
            $data_to_update['slug'] = $updated_slug;
            $data_to_update['status'] = $updated_status;
            $data_to_update['content'] = $updated_content;
            $data_to_update['meta_copyright'] = $updated_copyright;
            $data_to_update['meta_description'] = $updated_description;
            $data_to_update['meta_keywords'] = $updated_keywords;
            $data_to_update['meta_robots'] = $updated_robots;
            $data_to_update['meta_dc_title'] = $updated_dc_title;

            $this->Pages_model->insert_pages_into_DB($data_to_update);
            redirect(base_url("pages/index"));

        }

    }
}
