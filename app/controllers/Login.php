<?php

class Login extends Controller{
    public function index()
    {
        $data['judul']= 'Login';
        $this->view('templates/header_login_register', $data);
        $this->view('login/index');
        $this->view('templates/footer_login_register');
        Flasher::flash();
    }

    public function masuk()
    {
        // Handle the login form submission
        $email = $_POST['email'];
        $password = $_POST['password'];
        $data = [
            'email' => $email,
            'password' => $password
        ];

        // Call the loginUser method to attempt login
        $userModel = $this->model('User');
        $result = $userModel->login($data);

        if ($result != false) {
            // Login successful, redirect to home or show success message
            $_SESSION['id_user'] = $result['id_user'];
            $_SESSION['role'] = $result['role'];
            $_SESSION['email'] = $result['email'];
            Flasher::setFlash('Berhasil', 'Berhasil Login', 'success');
            header('Location: ' . BaseURL . '/home');
            exit;
        } else {
            // Login failed, redirect or show error message
            Flasher::setFlash('Gagal', 'Gagal Login', 'error');
            header('Location: ' . BaseURL . '/login');
            exit;
            // var_dump($_SESSION['flash']);
            // die;
            // echo "<script>
            //     alert('Login Gagal');
            //     window.location='" . BaseURL . "/login';
            // </script>";
        }
    }


}