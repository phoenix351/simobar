<?php

namespace App\Controllers;

use App\Models\PenggunaModel;
use CodeIgniter\Controller;
use CodeIgniter\HTTP\IncomingRequest;



class Admin extends Controller
{


    public function index($page = 'admin')
    {

        if (!is_file(APPPATH . '/Views/pages/' . $page . '.php')) {
            throw new \Codeigniter\Exceptions\PageNotFoundException($page);
        }
        $model = new PenggunaModel();
        $data = [
            'title' => 'Aplikasi Admin Pengelolaan Barang',
            'users' => $model->getPegawai()
        ];

        echo view('admin/header', $data);
        echo view('admin/users', $data);
        echo view('admin/footer', $data);
    }
    public function tambahPegawai()
    {
        $request = service('request');
        $model = new PenggunaModel();

        $nama = $request->getPost('nama');
        $nip = $request->getPost('nip');
        $jabatan = $request->getPost('jabatan');
        $bidang = $request->getPost('bidang');
        $katasandi = $request->getPost('katasandi');

        $res = $model->tambahPegawai($nama, $nip, $jabatan, $bidang, $katasandi);
        $data = ["feedback" => $res->getMessage()];

        return $data;
    }
}
