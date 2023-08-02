<?php

namespace App\Controllers;

use App\Models\PembayaranModel;

class Pengembalian extends BaseController
{
    // public function __construct()
    // {
    //     $this->PembayaranModel = new PembayaranModel();
    // }

    public function index()
    {
        $data = [
            'title' => 'Pengembalian | Barang'
        ];
        return view('pengembalian/pengembalian', $data);
    }
}
