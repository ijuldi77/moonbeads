<?php

class Register extends Controller{
    public function index()
    {
        $data['judul']= 'Register';
        $this->view('templates/header_login_register', $data);
        $this->view('register/index');
        $this->view('templates/footer_login_register');
    }
}