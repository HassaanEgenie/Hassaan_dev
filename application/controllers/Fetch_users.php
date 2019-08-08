<?php
defined("BASEPATH") or die("No direct script access allowed");

class Fetch_users extends CI_Controller
{

    public function index()
    {
        $this->load->model('fetch_api_model');
        $url = "https://jsonplaceholder.typicode.com/users";
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
            $name = $record->name;
            $id = $record->id;
            $username = $record->username;
            $email = $record->email;
            $phone = $record->phone;
            $website = $record->website;

            $company = $record->company;
            foreach ($company as $comp) {
                $name = $company->name;
                $catchPhrase = $company->catchPhrase;
                $bs = $company->bs;
                $data_to_put = array();
                $data_to_put['name'] = $name;
                $data_to_put['catchPhrase'] = $catchPhrase;
                $data_to_put['bs'] = $bs;

                $this->fetch_api_model->insert_company_data($data_to_put);
            }
            $addresses = $record->address;
            foreach ($addresses as $address) {
                // if (is_string($address)) {
                $street = $addresses->street;
                $suite = $addresses->suite;
                $city = $addresses->city;
                $zipcode = $addresses->zipcode;
                // } else {
                $geos = $addresses->geo;
                foreach ($geos as $geo) {

                    $lat = $geos->lat;
                    echo $lat;
                    $lng = $geos->lng;
                }

            }
            $data_to_insert = array();
            $data_to_insert['name'] = $name;
            $data_to_insert['id_users'] = $id;
            $data_to_insert['username'] = $username;
            $data_to_insert['email'] = $email;
            $data_to_insert['phone'] = $phone;
            $data_to_insert['website'] = $website;
            $this->fetch_api_model->insert_users_data($data_to_insert);

        }
        // $data_to_insert = array();
        // $data_to_insert['userId'] = $userId;
        // $data_to_insert['id_todos'] = $id;
        // $data_to_insert['title'] = $title;
        // $data_to_insert['completed'] = $completed;

        // $this->fetch_api_model->insert_todos_data($data_to_insert);

        // echo "<pre>";
        // print_r($data_to_insert);
    }

}
