<?php
defined("BASEPATH") or die("No direct script access allowed");

class About_page_controller extends CI_Controller
{

    public function index()
    {
        $this->load->view('partial/header');
        $this->load->view('About.php');
        $this->load->view('partial/footer');

    }
}
