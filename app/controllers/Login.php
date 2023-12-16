<?php

class Login extends Controller{
    public function index()
    {
        $data['judul']= 'Login';
        $this->view('templates/header_login_register', $data);
        $this->view('login/index');
        $this->view('templates/footer_login_register');
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
            $_SESSION['role'] = $result['role'];
            $_SESSION['email'] = $result['email'];
            echo "<script>
                alert('Login Sukses');
                window.location='" . BaseURL . "/home';
            </script>";
        } else {
            // Login failed, redirect or show error message
            echo "<script>
                alert('Login Gagal');
                window.location='" . BaseURL . "/login';
            </script>";
        }
    }


}