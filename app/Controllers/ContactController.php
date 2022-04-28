<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ContactController extends BaseController
{
    public function index()
    {
        $data = [
            'nav' => 'contact'
        ];
        return view('contact/index', $data);
    }
}
