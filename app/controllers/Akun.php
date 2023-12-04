<?php

class Akun extends Controller{
    public function index()
    {
        $data['judul']= 'Akun';
        $this->view('templates/header', $data);
        $this->view('akun/index');
    }
}