<?php
defined("BASEPATH") or die("No direct script access allowed");

class Table extends CI_Controller
{

    public function index()
    {
        $this->form_validation->set_rules('num', 'num', 'required');
        $this->form_validation->set_rules('start', 'start', 'required');
        $this->form_validation->set_rules('end', 'end', 'required');

        if ($this->form_validation->run() === false) {
            $this->load->view("partial/header");
            $this->load->view("Table/inputs");
            $this->load->view("partial/footer");
        } else {
            $num = $this->input->post('num');

            $start = $this->input->post('start');

            $end = $this->input->post('end');
            $table = array();
            $table['num'] = $num;
            $table['start'] = $start;
            $table['end'] = $end;
            $data['table'] = $table;

            $this->load->view("partial/header");
            $this->load->view("Table/table", $data);
            $this->load->view("partial/footer");

        }
    }
}
