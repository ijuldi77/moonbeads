<?php

class Logout extends Controller
{
    public function index()
    {
        // Lakukan aksi logout
        session_destroy();

        // Redirect ke halaman login atau halaman lain yang diinginkan setelah logout
        echo "<script>
            alert('Logout Sukses');
            window.location='" . BaseURL . "/home';
        </script>";
    }
}