<?php
defined("BASEPATH") or die("No direct script access allowed");

class Socialmedia extends CI_Controller
{

    public function index()
    {

        $this->load->model('social_media_model');
        $social = $this->social_media_model->get_social_data();

        if (!empty($social)) {

            $this->form_validation->set_rules('title', 'title', 'required');

            if ($this->input->server('REQUEST_METHOD') == 'POST') {
                $var1 = $this->input->post('fb_type');
                if ($var1 != 0) {
                    $this->form_validation->set_rules('facebook', 'facebook', 'required');

                }
            }

            if ($this->input->server('REQUEST_METHOD') == 'POST') {
                $var2 = $this->input->post('gm_type');
                if ($var2 != 0) {
                    $this->form_validation->set_rules('gmail', 'gmail', 'required');
                }
            }

            if ($this->input->server('REQUEST_METHOD') == 'POST') {
                $var3 = $this->input->post('tw_type');
                if ($var3 != 0) {
                    $this->form_validation->set_rules('twitter', 'twitter', 'required');
                }
            }

            if ($this->input->server('REQUEST_METHOD') == 'POST') {
                $var4 = $this->input->post('in_type');
                if ($var4 != 0) {
                    $this->form_validation->set_rules('instagram', 'instagram', 'required');
                }
            }

            if ($this->input->server('REQUEST_METHOD') == 'POST') {
                $var5 = $this->input->post('ln_type');
                if ($var5 != 0) {
                    $this->form_validation->set_rules('linkedin', 'linkedin', 'required');
                }
            }

            if ($this->input->server('REQUEST_METHOD') == 'POST') {
                $var6 = $this->input->post('wa_type');
                if ($var6 != 0) {
                    $this->form_validation->set_rules('whatsapp', 'whatsapp', 'required');
                }
            }

            if ($this->form_validation->run() === false) {

                $data['user_data'] = $social[0];

                $this->load->view("partial/header", $data);
                $this->load->view("Socialmedia/edit");
                $this->load->view("partial/footer");

            } else {

                $social_id = $this->input->post('social_id');
                $updated_title = $this->input->post('title');
                $updated_favicon = $this->input->post('favicon');
                $updated_logo = $this->input->post('logo');

                $data_to_update = array();
                $updated_fb_type = $this->input->post('fb_type');
                if (empty($updated_fb_type)) {

                    $updated_facebook = $this->input->post('facebook');
                    if ($updated_facebook != '') {
                        $data_to_update['facebook'] = $updated_facebook;
                    }

                }

                $updated_gm_type = $this->input->post('gm_type');
                if (empty($updated_gm_type)) {
                    $updated_gmail = $this->input->post('gmail');
                    if ($updated_gmail != '') {
                        $data_to_update['gmail'] = $updated_gmail;
                    }

                }
                $updated_in_type = $this->input->post('in_type');
                if (empty($updated_in_type)) {
                    $updated_instagram = $this->input->post('instagram');
                    if ($updated_instagram != '') {
                        $data_to_update['instagram'] = $updated_instagram;
                    }
                }
                $updated_ln_type = $this->input->post('ln_type');
                if (empty($updated_ln_type)) {
                    $updated_linkedin = $this->input->post('linkedin');
                    if ($updated_linkedin != '') {
                        $data_to_update['linkedin'] = $updated_linkedin;
                    }

                }
                $updated_wa_type = $this->input->post('wa_type');
                if (empty($updated_wa_type)) {
                    $updated_whatsapp = $this->input->post('whatsapp');
                    if ($updated_whatsapp != '') {
                        $data_to_update['whatsapp'] = $updated_whatsapp;
                    }

                }
                $updated_tw_type = $this->input->post('tw_type');
                if (empty($updated_gm_type)) {
                    $updated_twitter = $this->input->post('twitter');
                    if ($updated_twitter != '') {
                        $data_to_update['twitter'] = $updated_twitter;

                    }
                }

                if (isset($_FILES['logo']) && !empty($_FILES['logo']['name'])) {
                    $errors = array();
                    $logo_name = $_FILES['logo']['name'];
                    $file_tmp = $_FILES['logo']['tmp_name'];

                    move_uploaded_file($file_tmp, "assets/img/" . $logo_name);
                    $data_to_update['logo'] = $logo_name;
                }
                if (isset($_FILES['favicon']) && !empty($_FILES['favicon']['name'])) {
                    $errors = array();
                    $favicon_name = $_FILES['favicon']['name'];
                    $file_tmp = $_FILES['favicon']['tmp_name'];

                    move_uploaded_file($file_tmp, "assets/img/" . $favicon_name);
                    $data_to_update['favicon'] = $favicon_name;
                }

                $data_to_update['title'] = $updated_title;

                $data_to_update['fb_type'] = $updated_fb_type;
                $data_to_update['ln_type'] = $updated_ln_type;
                $data_to_update['gm_type'] = $updated_gm_type;
                $data_to_update['wa_type'] = $updated_wa_type;
                $data_to_update['tw_type'] = $updated_tw_type;
                $data_to_update['in_type'] = $updated_in_type;
                // die(print_r($data_to_update));
                $this->social_media_model->update_social_data($social_id, $data_to_update);
                redirect(base_url("Socialmedia/index"));

            }

        } else {

            $this->form_validation->set_rules('title', 'title', 'required');

            $this->form_validation->set_rules('facebook', 'facebook', 'required');

            $this->form_validation->set_rules('twitter', 'twitter', 'required');

            $this->form_validation->set_rules('linkedin', 'linkedin', 'required');

            $this->form_validation->set_rules('gmail', 'gmail', 'required');

            $this->form_validation->set_rules('whatsapp', 'whatsapp', 'required');

            $this->form_validation->set_rules('instagram', 'instagram', 'required');

            if ($this->form_validation->run() == false) {

                $this->load->view("partial/header");
                $this->load->view("Socialmedia/add");
                $this->load->view("partial/footer");
            } else {

                $updated_facebook = $this->input->post('facebook');
                $updated_gmail = $this->input->post('gmail');
                $updated_instagram = $this->input->post('instagram');
                $updated_linkedin = $this->input->post('linkedin');
                $updated_favicon = $this->input->post('favicon');
                $updated_title = $this->input->post('title');
                $updated_logo = $this->input->post('logo');
                $updated_whatsapp = $this->input->post('whatsapp');
                $updated_twitter = $this->input->post('twitter');

                $updated_fb_type = $this->input->post('fb_type');
                $updated_gm_type = $this->input->post('gm_type');
                $updated_in_type = $this->input->post('in_type');
                $updated_ln_type = $this->input->post('ln_type');
                $updated_wa_type = $this->input->post('wa_type');
                $updated_tw_type = $this->input->post('tw_type');

                if (isset($_FILES['logo'])) {
                    $errors = array();
                    $logo_name = $_FILES['logo']['name'];
                    $file_tmp = $_FILES['logo']['tmp_name'];

                    move_uploaded_file($file_tmp, "assets/img/" . $logo_name);
                }
                if (isset($_FILES['favicon'])) {
                    $errors = array();
                    $favicon_name = $_FILES['favicon']['name'];
                    $file_tmp = $_FILES['favicon']['tmp_name'];

                    move_uploaded_file($file_tmp, "assets/img/" . $favicon_name);
                }

                $data_to_update = array();

                $data_to_update['facebook'] = $updated_facebook;
                $data_to_update['gmail'] = $updated_gmail;
                $data_to_update['instagram'] = $updated_instagram;
                $data_to_update['linkedin'] = $updated_linkedin;
                $data_to_update['favicon'] = $favicon_name;
                $data_to_update['title'] = $updated_title;
                $data_to_update['logo'] = $logo_name;
                $data_to_update['whatsapp'] = $updated_whatsapp;
                $data_to_update['twitter'] = $updated_twitter;

                $data_to_update['fb_type'] = $updated_fb_type;
                $data_to_update['ln_type'] = $updated_ln_type;
                $data_to_update['gm_type'] = $updated_gm_type;
                $data_to_update['wa_type'] = $updated_wa_type;
                $data_to_update['tw_type'] = $updated_tw_type;
                $data_to_update['in_type'] = $updated_in_type;

                $this->social_media_model->insert_social_into_DB($data_to_update);
                redirect(base_url("Socialmedia/index"));
            }

        }

    }

}