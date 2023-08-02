<?php

namespace App\Controllers;

use App\Models\PengirimanModel;

class Pengiriman extends BaseController
{
    public function __construct()
    {
        $this->PengirimanModel = new PengirimanModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Pengiriman | Barang',
            'pengiriman' => $this->PengirimanModel->getPengiriman()
        ];
        return view('pengiriman/pengiriman', $data);
    }
}
