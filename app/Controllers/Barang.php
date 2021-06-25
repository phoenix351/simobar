<?php

namespace App\Controllers;

use App\Models\BarangModel;
use CodeIgniter\Controller;

class Barang extends Controller
{
    public function index()
    {
        $model = new BarangModel();
        $data = [
            'barang'  => $model->getBarang(),
            'title' => 'Daftar Barang',
        ];

        echo view('templates/header', $data);
        echo view('pages/dashboard', $data);
        echo view('templates/footer', $data);
    }

    public function view($nip = null)
    {
        $model = new BarangModel();

        $data['barang'] = $model->getBarang($nip);
    }
}
