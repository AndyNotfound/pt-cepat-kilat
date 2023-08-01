<?php

namespace App\Controllers;

use App\Models\SiswaModel;

class Pengiriman extends BaseController
{
    public function __construct()
    {
        $this->SiswaModel = new SiswaModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Pengiriman | Barang',
            'siswa' => $this->SiswaModel->getSiswa()
        ];
        return view('pengiriman/pengiriman', $data);
    }
}
