<?php

class About extends Controller{
    public function index($nama = 'Monkfish', $hobi = 'Ngoding')
    {
        $data['judul'] = 'Contact';
        $data['keranjang'] = $this->model('Keranjang')->read();

        $this->view('templates/header', $data);
        $this->view('about/index');
        $this->view('templates/footer');
    }
    // public function page()
    // {
    //     $this->view('about/page');
    // }
}