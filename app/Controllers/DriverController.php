<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DriverModel;
use Config\Services;

class DriverController extends BaseController
{
    public function index()
    {
        $data = [
            'nav' => 'driver'
        ];
        return view('drivers/index', $data);
    }

    public function ajaxList()
    {
        $request = Services::request();
        $datatable = new DriverModel($request);

        if ($request->getMethod(true) === 'POST') {
            $lists = $datatable->getDatatables();
            $data = [];
            $no = $request->getPost('start');

            foreach ($lists as $list) {
                $no++;
                $row = [];
                $row[] = $no;
                $row[] = $list->tipe_driver;
                $row[] = $list->nama_driver;
                $row[] = $list->informasi_tambahan;
                $row[] = $list->versi_driver;
                $row[] = $list->created_at;
                $row[] = '<a href="'. $list->link_download .'" class="btn btn-success btn-icon-split ml-3">Download</a>';
                $data[] = $row;
            }

            $output = [
                'draw' => $request->getPost('draw'),
                'recordsTotal' => $datatable->countAll(),
                'recordsFiltered' => $datatable->countFiltered(),
                'data' => $data
            ];

            echo json_encode($output);
        }
    }
}
