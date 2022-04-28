<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class TechnologyController extends BaseController
{
    public function index()
    {
        $url = 'http://devel.crissad.com/api/nvidia'; 

        $client = \Config\Services::curlrequest();

        $response = $client->get($url, [
            "headers" => [
                "Accept" => "application/json"
            ]
        ]);
        $response = json_decode($response->getBody(), true);

        $technology = $response;

        $data = [
            'nav' => 'technology',
            'technology' => $technology
        ];
        return view('technology/index', $data);
    }
}
