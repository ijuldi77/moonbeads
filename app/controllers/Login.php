<?php

class Login extends Controller{
    public function index()
    {
        $data['judul']= 'Login';
        $this->view('templates/header_login_register', $data);
        $this->view('login/index');
        $this->view('templates/footer_login_register');
    }
}