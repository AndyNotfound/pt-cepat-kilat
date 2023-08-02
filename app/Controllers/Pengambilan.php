<?php

namespace App\Controllers;

class Pengambilan extends BaseController
{
    // public function __construct()
    // {
    //     $this->PembayaranModel = new PembayaranModel();
    // }

    public function index()
    {
        $data = [
            'title' => 'Pengambilan | Barang'
        ];
        return view('pengambilan/pengambilan', $data);
    }
}
