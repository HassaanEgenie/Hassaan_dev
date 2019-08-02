<?php
defined("BASEPATH") or die("No direct script access allowed");

class Contact_page_controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library("session");
    }

    public function index()
    {
        $this->load->helper('form');
        $this->load->view('partial/header');
        $this->load->view('contact.php');
        $this->load->view('partial/footer');

    }
    public function send_mail()
    {
        $whitelist = array(
            '127.0.0.11  ',
            '::1',
        );

        if (!in_array($_SERVER['REMOTE_ADDR'], $whitelist)) {

            $this->session->set_flashdata("email_sent", "Cannot send email");

            $this->load->helper('form');
            $this->load->view('partial/header');
            $this->load->view('contact.php');
            $this->load->view('partial/footer');
        } else {
            $from_email = $this->input->post('email');
            $to_email = "hassaanishere@gmail.com";
            //Load email library
            $this->load->library('email');
            $this->email->from($from_email, 'Identification');
            $this->email->to($to_email);
            $this->email->subject('Send Email Codeigniter');
            $this->email->message('The email send using codeigniter library' . 'My name' . $this->input->post('Name'));
            //Send mail
            if ($this->email->send()) {
                $this->session->set_flashdata("email_sent", "Congragulation Email Send Successfully.");
            } else {
                $this->session->set_flashdata("email_sent", "You have encountered an error");
            }

            $this->load->helper('form');
            $this->load->view('partial/header');
            $this->load->view('contact.php');
            $this->load->view('partial/footer');
        }
    }

}
