<?php

class Register extends Controller
{

    private $userModel;
    public function index()
    {
        $data['judul'] = 'Register';
        $this->view('templates/header_login_register', $data);
        $this->view('register/index');
        $this->view('templates/footer_login_register');
        Flasher::flash();
    }

    public function daftar()
    {
        // Handle the registration form submission
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirmPassword'];

        // Validate input
        if ($password != $confirmPassword) {
            // Passwords do not match, handle accordingly (redirect or show error)
            echo "Passwords do not match.";
            die;
        }

        // Hash the password before storing it
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);


        $data = ['email' => $email,
            'password' => $hashedPassword];

        // Call the registerUser method to attempt registration
        if ($this->model('User')->daftar($data) > 0) {
            // Registration successful, redirect or show success message
            // echo "<script>
            //     alert('Pendaftaran Sukses');
            //     window.location='" . BaseURL . "/login';
            // </script>";
            Flasher::setFlash('Berhasil', 'Pendaftaran Berhasil', 'success');
            header('Location: ' . BaseURL . '/login');
            exit;
        } else {
            // Registration failed, redirect or show error message
            Flasher::setFlash('Gagal', 'Pendaftaran Gagal', 'error');
            header('Location: ' . BaseURL . '/register');
            exit;
            //     echo "<script>
            //     alert('Pendaftaran Gagal');
            //     window.location='" . BaseURL . "/register';
            // </script>";
        }
    }
}