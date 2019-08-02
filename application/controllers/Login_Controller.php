<?php
defined("BASEPATH") or die("No direct script access allowed");

class Login_Controller extends CI_Controller
{

    public function index()
    {
        $this->load->model('Main_model');
        $this->load->library("form_validation");
        $this->form_validation->set_rules('Name', 'Name', 'required');
        $this->form_validation->set_rules('Email', 'Country', 'required');
        $this->form_validation->set_rules('password', 'Email', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->helper('form');
            $this->load->view('partial/header');
            $this->load->view('Loginview.php');
            $this->load->view('partial/footer');

        } else {
            $Name = $this->input->post('Name');
            $Email = $this->input->post('Email');
            $password = $this->input->post('password');

            $data_to_insert = array();
            $data_to_insert['Name'] = $Name;
            $data_to_insert['password'] = $password;
            $data_to_insert['Email'] = $Email;

            $this->Main_model->insert_user_into_DB($data_to_insert);
            redirect("User_controller");
            // $this->load->view('partial/header');
            // $this->load->view('Loginview.php');
            // $this->load->view('partial/footer');

        }

    }

}