<?php
defined("BASEPATH") or die("No direct script access allowed");

class Login_Controller extends CI_Controller
{

    public function index()
    {

        $this->load->model('Admin_model');
        $this->load->library('session');
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
            $admin_data = $this->Admin_model->get_adminid_data('1'); // $user_data['slug']
            $data['admin_data'] = $admin_data[0];

            $Name = $this->input->post('Name');
            $Email = $this->input->post('Email');
            $password = $this->input->post('password');

            if ($Name == $admin_data[0]['name']) {
                if ($password == $admin_data[0]['password']) {
                    redirect("Admin_controller");
                } else {
                    $this->session->set_flashdata('password_error', 'Enter correct password');
                    redirect("Login_Controller");
                }

            } else {
                $this->session->set_flashdata('name_error', 'Enter correct username');
                //$this->session->flashdata('message_name');
                redirect("Login_Controller");

            }

        }

    }

}