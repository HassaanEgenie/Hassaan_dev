<?php
defined("BASEPATH") or die("No direct script access allowed");

class Pythagoras extends CI_Controller
{

    public function index()
    {
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $a = $this->input->post('a');
            if ($a != '') {
                $this->form_validation->set_rules('a', 'a', 'required');
            }
        }
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $b = $this->input->post('b');
            if ($b != '') {
                $this->form_validation->set_rules('b', 'b', 'required');
            }
        }
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $z = $this->input->post('z');
            if ($z != '') {
                $this->form_validation->set_rules('z', 'z', 'required');
            }
        }
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $y = $this->input->post('y');
            if ($y != '') {
                $this->form_validation->set_rules('y', 'y', 'required');
            }
        }
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $l = $this->input->post('l');
            if ($l != '') {
                $this->form_validation->set_rules('l', 'l', 'required');
            }
        }
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $m = $this->input->post('m');
            if ($m != '') {
                $this->form_validation->set_rules('m', 'm', 'required');
            }
        }

        if ($this->form_validation->run() === false) {

            $this->load->view("partial/header");
            $this->load->view("Pythagoras/Py_inputs");
            $this->load->view("partial/footer");
        } else {

            $pythagoras = array();

            if ($a != '') {

                $pythagoras['a'] = $a;
            }

            if ($b != '') {

                $pythagoras['b'] = $b;
            }

            if ($z != '') {

                $pythagoras['z'] = $z;
            }
            if ($y != '') {

                $pythagoras['y'] = $y;
            }
            if ($l != '') {

                $pythagoras['l'] = $l;
            }
            if ($m != '') {

                $pythagoras['m'] = $m;
            }

            $data['pythagoras'] = $pythagoras;

            $this->load->view("partial/header");
            $this->load->view("pythagoras/Py_view", $data);
            $this->load->view("partial/footer");

        }
    }
}