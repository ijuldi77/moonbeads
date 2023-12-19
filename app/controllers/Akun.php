<?php

class Akun extends Controller{
    public function index()
    {
        $data['judul']= 'Akun';
        $data['keranjang'] = $this->model('Keranjang')->read();

        $this->view('templates/header', $data);
        $this->view('akun/index');
    }
}