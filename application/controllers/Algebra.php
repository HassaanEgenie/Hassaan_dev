<?php
defined("BASEPATH") or die("No direct script access allowed");

class Algebra extends CI_Controller
{

    public function index()
    {
        $this->form_validation->set_rules('a', 'a', 'required');
        $this->form_validation->set_rules('b', 'b', 'required');

        if ($this->form_validation->run() === false) {
            $this->load->view("partial/header");
            $this->load->view("Algebra/Algebra_inputs");
            $this->load->view("partial/footer");
        } else {
            $a = $this->input->post('a');

            $b = $this->input->post('b');

            $algebra = array();
            $algebra['a'] = $a;
            $algebra['b'] = $b;

            $data['algebra'] = $algebra;

            $this->load->view("partial/header");
            $this->load->view("Algebra/algebra_view", $data);
            $this->load->view("partial/footer");

        }
    }
}
