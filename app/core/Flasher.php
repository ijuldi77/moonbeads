<?php

class Flasher
{
  public static function setFlash($pesan, $aksi, $tipe)
  {
    $_SESSION['flash'] = [
      'pesan' => $pesan,
      'aksi' => $aksi,
      'tipe' => $tipe
    ];
  }

  public static function flash()
  {
    if (isset($_SESSION['flash'])) {
      $pesan = $_SESSION['flash']['pesan'];
      $aksi = $_SESSION['flash']['aksi'];
      $tipe = $_SESSION['flash']['tipe'];

      echo "<script>
            Swal.fire({
              title: '$pesan',
              text: 'Data Produk $pesan $aksi',
              icon: '$tipe'
            });
          </script>";

      unset($_SESSION['flash']);
    }
  }
  // public static function flashHapus()
  // {
  //   if (isset($_SESSION['flash'])) {
  //     $pesan = $_SESSION['flash']['pesan'];
  //     $aksi = $_SESSION['flash']['aksi'];
  //     $tipe = $_SESSION['flash']['tipe'];

  //     echo "<script>
  //     Swal.fire({
  //       title: "Are you sure?",
  //       text: "You won't be able to revert this!",
  //       icon: "warning",
  //       showCancelButton: true,
  //       confirmButtonColor: "#3085d6",
  //       cancelButtonColor: "#d33",
  //       confirmButtonText: "Yes, delete it!"
  //     }).then((result) => {
  //       if (result.isConfirmed) {
  //         Swal.fire({
  //           title: "Deleted!",
  //           text: "Your file has been deleted.",
  //           icon: "success"
  //         });
  //       }
  //     });
  //     </script>";

  //     unset($_SESSION['flash']);

  // }
}