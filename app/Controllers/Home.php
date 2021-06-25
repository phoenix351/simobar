<?php

namespace App\Controllers;

use App\Models\BarangModel;
use CodeIgniter\Controller;

class Home extends BaseController
{
	public function index($page = 'dashboard')
	{

		if (!is_file(APPPATH . '/Views/pages/' . $page . '.php')) {
			throw new \Codeigniter\Exceptions\PageNotFoundException($page);
		}
		$model = new BarangModel();
		$data = [
			'barang'  => $model->getBarang(),
			'title' => 'Daftar Barang',
		];


		echo view('templates/header', $data);
		echo view('pages/dashboard', $data);
		echo view('templates/footer', $data);
	}
}
