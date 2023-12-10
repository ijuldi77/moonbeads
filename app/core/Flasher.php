<?php

class Flasher
{
  public static function setFlash($title, $pesan, $tipe)
  {
    $_SESSION['flash'] = [
      'title' => $title,
      'pesan' => $pesan,
      'tipe' => $tipe
    ];
  }

  public static function flash()
  {
    if (isset($_SESSION['flash'])) {
      $title = $_SESSION['flash']['title'];
      $pesan = $_SESSION['flash']['pesan'];
      $tipe = $_SESSION['flash']['tipe'];

      echo "<script>
            Swal.fire({
              title: '$title',
              text: '$pesan',
              icon: '$tipe'
            });
          </script>";

      unset($_SESSION['flash']);
    }
  }
  
}