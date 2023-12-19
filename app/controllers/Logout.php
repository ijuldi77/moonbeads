<?php

class Logout extends Controller
{
    public function index()
    {
        // Flasher::flash();

        // Metode alternatif untuk menyimpan skrip dalam variabel
        // $sweetAlertScript = "
        //     Swal.fire({
        //         title: 'Apakah Anda yakin?',
        //         text: 'Anda akan keluar!',
        //         icon: 'warning',
        //         showCancelButton: true,
        //         confirmButtonColor: '#d33',
        //         cancelButtonColor: '#3085d6',
        //         confirmButtonText: 'Ya, logout!'
        //     }).then((result) => {
        //         if (result.isConfirmed) {
        //             // Lakukan logout dan redirect
        //             Flasher::flash();
        //             Flasher::setFlash('Berhasil', 'Berhasil Logout', 'success');
        //             session_destroy();
        //             window.location.href = '" . BaseURL . "/home';
        //         }
        //     });
        // ";

        // // Cetak skrip menggunakan echo di tempat yang sesuai dalam HTML
        // echo "<script>{$sweetAlertScript}</script>";

        session_destroy();

        echo "<script>
            alert('Logout Sukses');
            window.location='" . BaseURL . "/home';
        </script>";
    }
}
?>