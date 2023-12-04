<?php

class Produk extends Controller{
    public function index()
    {
        $data['judul']= 'Produk';
        $this->view('templates/header', $data);
        $this->view('produk/index');
    }
}