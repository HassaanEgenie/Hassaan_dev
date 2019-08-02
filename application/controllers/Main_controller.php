<?php
defined("BASEPATH") or die("No direct script access allowed");

class Main_controller extends CI_Controller
{
    public function index()
    {

        $this->load->view('mainpage');
        // $this->load->view('partial/header');
        // $this->load->view('About');
        // $this->load->view('partial/footer');

    }

}