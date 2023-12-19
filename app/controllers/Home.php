<?php

class Home extends Controller{
    public function index()
    {
        $data['judul']= 'Home';
        $data['keranjang'] = $this->model('Keranjang')->read();
        // $data['total_checkout'] = $data['keranjang']['total_harga'];
        // print_r($data['total_checkout']);
        // die;
        $this->view('templates/header', $data);
        $this->view('home/index');
        $this->view('templates/footer');
    }
}