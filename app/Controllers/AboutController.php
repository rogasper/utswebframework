<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AboutController extends BaseController
{
    public function index()
    {
        $data = [
            'nav' => 'about'
        ];
        return view('about/index', $data);
    }
}
