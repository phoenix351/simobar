<?php

namespace App\Controllers;


use CodeIgniter\Controller;

class Login extends Controller
{
    public function index($page = 'login')
    {

        if (!is_file(APPPATH . '/Views/pages/' . $page . '.php')) {
            throw new \Codeigniter\Exceptions\PageNotFoundException($page);
        }

        $data = ['title' => 'Login'];

        echo view('pages/login', $data);
    }
    protected function isValid($user, $pass)
    {

        return true;
    }
    public function login($user, $pass)
    {
        $this->isValid($user, $pass);
        //
        return true;
    }
}
