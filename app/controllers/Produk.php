<?php

class Produk extends Controller{
    public function index()
    {
        $data['judul']= 'Produk';
        $data['produk'] = $this->model('Produk_model')->getAllProduk();
        $this->view('templates/header', $data);
        $this->view('produk/index', $data);
    }
}