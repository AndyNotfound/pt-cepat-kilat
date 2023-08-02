<?php

namespace App\Controllers;

use App\Models\PembayaranModel;

class Pelacakan extends BaseController
{
    // public function __construct()
    // {
    //     $this->PembayaranModel = new PembayaranModel();
    // }

    public function index()
    {
        $data = [
            'title' => 'Pelacakan | Barang'
        ];
        return view('pelacakan/pelacakan', $data);
    }
}
