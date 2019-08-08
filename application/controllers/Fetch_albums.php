<?php
defined("BASEPATH") or die("No direct script access allowed");

class Fetch_albums extends CI_Controller
{

    public function index()
    {
        $this->load->model('fetch_api_model');
        $url = "https://jsonplaceholder.typicode.com/albums";
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
            $userId = $record->userId;
            $id = $record->id;
            $title = $record->title;

            $data_to_insert = array();
            $data_to_insert['userId'] = $userId;
            $data_to_insert['id_albums'] = $id;
            $data_to_insert['title'] = $title;

            $this->fetch_api_model->insert_albums_data($data_to_insert);

            echo "<pre>";
            print_r($data_to_insert);
        }

    }
}