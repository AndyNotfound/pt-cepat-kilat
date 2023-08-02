<?php

namespace App\Controllers;

use App\Models\PembayaranModel;

class Pembayaran extends BaseController
{
    public function __construct()
    {
        $this->PembayaranModel = new PembayaranModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Pembayaran | Barang',
            'pembayaran' => $this->PembayaranModel->getPembayaran()
        ];
        return view('pembayaran/pembayaran', $data);
    }
}
