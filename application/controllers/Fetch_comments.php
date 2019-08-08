<?php
defined("BASEPATH") or die("No direct script access allowed");

class Fetch_comments extends CI_Controller
{

    public function index()
    {
        $this->load->model('fetch_api_model');
        $url = "https://jsonplaceholder.typicode.com/comments";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 4);
        $json = curl_exec($ch);
        if (!$json) {
            echo curl_error($ch);
        }
        curl_close($ch);
        $records = array();
        $records = json_decode($json);
        print_r($records);

        foreach ($records as $record) {
            $postId = $record->postId;
            $id = $record->id;
            $name = $record->name;
            $email = $record->email;
            $body = $record->body;

            $data_to_insert = array();
            $data_to_insert['postId'] = $postId;
            $data_to_insert['id_comments'] = $id;
            $data_to_insert['name'] = $name;
            $data_to_insert['email'] = $email;
            $data_to_insert['body'] = $body;

            $this->fetch_api_model->insert_comments_data($data_to_insert);

            echo "<pre>";
            print_r($data_to_insert);
        }

    }
}