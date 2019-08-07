<?php
defined("BASEPATH") or die("No direct script access allowed");

class Admin_controller extends CI_Controller
{

    public function index()
    {
        $this->load->view('partial/header');
        $this->load->view('Admin_view');
        $this->load->view('partial/footer');

    }
}