<?php
defined("BASEPATH") or die("No direct script access allowed");

class Fetch_photos extends CI_Controller
{

    public function index()
    {
        $this->load->model('fetch_api_model');
        $url = "https://jsonplaceholder.typicode.com/photos";
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

        foreach ($records as $record) {
            $albumId = $record->albumId;
            $id = $record->id;
            $title = $record->title;
            $url = $record->url;
            $thumbnailUrl = $record->thumbnailUrl;

            $data_to_insert = array();
            $data_to_insert['albumId'] = $albumId;
            $data_to_insert['id_photos'] = $id;
            $data_to_insert['title'] = $title;
            $data_to_insert['url'] = $url;
            $data_to_insert['thumbnailUrl'] = $thumbnailUrl;

            $this->fetch_api_model->insert_photos_data($data_to_insert);

            echo "<pre>";
            print_r($data_to_insert);
        }

    }
}