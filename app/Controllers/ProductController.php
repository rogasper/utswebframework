<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductModel;

class ProductController extends BaseController
{
    public function index()
    {
        $pager = \Config\Services::pager();
        $productModel = new ProductModel();
        $kunci = $this->request->getVar('cari');
        if($kunci){
            $query = $productModel->pencarian($kunci);
            $jumlah = "Pencarian dengan nama <b>$kunci</b> ditemukan ". $query->affectedRows(). " Data";

        }else{
            $query = $productModel;
            $jumlah = "";
        }
        $data = [
            'nav' => 'product',
            'list' => $query->paginate(3),
            'pager' => $productModel->pager,
            'page' => $this->request->getVar('page') ? $this->request->getVar('page') : 1,
            'kunci' => $kunci,
            'jumlah' => $jumlah
        ];

        return view('products/index', $data);
    }

    public function detail($id)
    {
        $productModel = new ProductModel();
        $data = [
            'nav' => 'Detail Produk',
            'list' => $productModel->where(['id' => $id])->first()
        ];

        return view('products/detail', $data);
    }
}
