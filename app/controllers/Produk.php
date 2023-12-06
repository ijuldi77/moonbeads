<?php

class Produk extends Controller{
    public function index()
    {
        $data['judul']= 'Produk';
        $data['produk'] = $this->model('Produk_model')->getAllProduk();
        $this->view('templates/header', $data);
        $this->view('produk/index', $data);
        Flasher::flash();
    }

    // public function tambah()
    // {
    //     if ($this->model('Produk_model')->tambahProduk($_POST) > 0) {
    //         header('Location: ' . BaseURL . '/produk');
    //         exit;
    //     }
    // }
    public function tambah()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nama = $_POST['nama'];
            $jenis = $_POST['jenis'];
            $harga = $_POST['harga'];
            $IntiUrl = BaseURL;

            // Penanganan unggah file
            $targetDirectory = $_SERVER['DOCUMENT_ROOT'] . '/moonbeads/public/img/produk/';
            $targetFile = $targetDirectory . basename($_FILES['foto']['name']);
            $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

            // Periksa apakah file adalah file gambar yang valid
            $allowedExtensions = ['jpg', 'jpeg', 'png'];
            if (!in_array($imageFileType, $allowedExtensions)) {
                echo "<script>
                alert('Harap Upload dengan ekstensi jpg, jpeg, atau png');
                window.location.href='" . BaseURL . "/produk';
            </script>";
                die;
            }

            // Pindahkan file yang diunggah ke direktori target
            if (move_uploaded_file($_FILES['foto']['tmp_name'], $targetFile)) {
                $data = [
                    'nama' => $nama,
                    'jenis' => $jenis,
                    'harga' => $harga,
                    'foto' => basename($_FILES['foto']['name'])
                ];

                if ($this->model('Produk_model')->tambahProduk($data) > 0) {
                    Flasher::setFlash('Berhasil', 'ditambahkan', 'success');
                    header('Location: ' . BaseURL . '/produk');
                    exit;
                } else {
                    Flasher::setFlash('Gagal', 'ditambahkan', 'error');
                    header('Location: ' . BaseURL . '/produk');
                    exit;
                }
                
            } else {
                die("Maaf, ada kesalahan saat mengunggah file Anda.");
            }
        }
    }

}