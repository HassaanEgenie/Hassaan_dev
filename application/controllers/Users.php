<?php
defined("BASEPATH") or die("No direct script access allowed");

class Users extends CI_Controller
{

    public function index() //$slider_id

    {

        $this->load->model('Users_model');
        $action = $this->input->post('action');

        $this->form_validation->set_rules('action', 'action', 'required');

        if ($this->form_validation->run() == false) {
            $users = $this->Users_model->get_users_data();
            $data['records'] = $users;
            $this->load->view("partial/header", $data);
            $this->load->view("users/index_users");
            $this->load->view("partial/footer");

        } else {

            if ($action == "delete") {

                $users_id = $this->input->post('users_id');

                $this->Users_model->delete_users_data($users_id);

                $record = $this->Users_model->get_users_data();

                if (!empty($record)) {

                    $data['records'] = $record;

                    $this->load->view("partial/header", $data);
                    $this->load->view("users/index_users");
                    $this->load->view("partial/footer");

                }
                // } //delete

            }

        }
    }

    public function edit($users_id)
    {
        $this->load->model('Users_model');
        $update_data = array();

        $user_data = $this->Users_model->get_usersid_data($users_id);
        $data['user_data'] = $user_data[0];

        $this->form_validation->set_rules('Name', 'Name', 'required');
        $this->form_validation->set_rules('Email', 'Email', 'required');

        if ($this->form_validation->run() == false) {

            $this->load->view("partial/header", $data);
            $this->load->view("users/users_edit");
            $this->load->view("partial/footer");
        } else {

            $updated_name = $this->input->post('Name');
            $updated_email = $this->input->post('Email');
            $updated_password = $this->input->post('password');

            $data_to_update = array();
            $data_to_update['name'] = $updated_name;
            $data_to_update['email'] = $updated_email;
            $data_to_update['password'] = $updated_password;

            $this->Users_model->update_users_data($users_id, $data_to_update);
            redirect(base_url("Users/index"));

        }
    }

    public function add()
    {
        $this->load->model('Users_model');
        $this->load->library("form_validation");

        $this->form_validation->set_rules('Name', 'Name', 'required');
        $this->form_validation->set_rules('Email', 'Email', 'required');

        $this->form_validation->run();

        if ($this->form_validation->run() == false) {
            $this->load->view("partial/header");
            $this->load->view("users/add_users");
            $this->load->view("partial/footer");
        } else {
            //handle post here

            $updated_name = $this->input->post('Name');
            $updated_email = $this->input->post('Email');
            $updated_password = $this->input->post('password');

            $data_to_update = array();
            $data_to_update['name'] = $updated_name;
            $data_to_update['email'] = $updated_email;
            $data_to_update['password'] = $updated_password;

            $this->Users_model->insert_users_into_DB($data_to_update);
            redirect(base_url("users/index"));

        }

    }
}