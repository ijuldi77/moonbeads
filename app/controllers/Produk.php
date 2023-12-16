<?php

class Produk extends Controller
{
    public function index($produk = [])
    {

        $data['judul'] = 'Produk';
        $data['produk'] = empty($produk) ? $this->model('Produk_model')->getAllProduk() : $produk;
        $data['jenis'] = $this->model('Jenis_model')->getAllJenis();

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
            $jenis = $_POST['jenis_id'];
            $harga = $_POST['harga'];

            // Penanganan unggah file
            $targetDirectory = $_SERVER['DOCUMENT_ROOT'] . '/moonbeads/public/img/produk/';
            $targetFile = $targetDirectory . basename($_FILES['foto']['name']);
            $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

            // Periksa apakah file adalah file gambar yang valid
            $allowedExtensions = ['jpg', 'jpeg', 'png'];
            if (!in_array($imageFileType, $allowedExtensions)) {
                Flasher::setFlash('Gagal', 'Gambar Harus jpg,jpeg,png', 'error');
                header('Location: ' . BaseURL . '/produk');
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
                    Flasher::setFlash('Berhasil', 'Data Produk Berhasil Ditambahkan', 'success');
                    header('Location: ' . BaseURL . '/produk');
                    exit;
                } else {
                    Flasher::setFlash('Gagal', 'Data Produk Gagal Ditambahkan', 'error');
                    header('Location: ' . BaseURL . '/produk');
                    exit;
                }

            } else {
                die("Maaf, ada kesalahan saat mengunggah file Anda.");
            }
        }
    }

    public function hapus($id_produk)
    {


        if ($this->model('Produk_model')->hapusProduk($id_produk) > 0) {
            Flasher::setFlash('Berhasil', 'Data Produk Berhasil Dihapus', 'success');
            header('Location: ' . BaseURL . '/produk');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'Data Produk Gagal Dihapus', 'error');
            header('Location: ' . BaseURL . '/produk');
            exit;
        }


    }

    public function getEdit()
    {
        echo json_encode($this->model('Produk_model')->getProdukById($_POST['id_produk']));
    }


    public function edit()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id_produk = $_POST['id_produk'];
            $nama = $_POST['nama'];
            $jenis = $_POST['jenis_id'];
            $harga = $_POST['harga'];
            $foto = $_FILES['foto'];
            $data = [
                'id_produk' => $id_produk,
                'nama' => $nama,
                'jenis_id' => $jenis,
                'harga' => $harga,
                'foto' => $foto
            ];
            // print_r($data);
            // die;
            if ($this->model('Produk_model')->editProduk($data) > 0) {
                Flasher::setFlash('Berhasil', 'Data Produk Berhasil Diubah', 'success');
                header('Location: ' . BaseURL . '/produk');
                exit;
            } else {
                Flasher::setFlash('Gagal', 'Data Produk Gagal Diubah', 'error');
                header('Location: ' . BaseURL . '/produk');
                exit;
            }
        }
    }

    public function cari()
    {
        $produk = $this->model('Produk_model')->cariProduk();
        // $this->view('templates/header', $data);
        // $this->view('produk/index', $data);
        // header('Location: ' . BaseURL . '/produk', $data);
        // Redirect with the encoded data in the query parameter
        $this->index($produk);
    }





}