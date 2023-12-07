<?php

class Produk_model{
    private $table = 'produk';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllProduk()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function tambahProduk($data)
    {
        // 1. Periksa ID produk yang telah ada untuk mendapatkan urutan maksimal.
        $queryMaxId = "SELECT MAX(SUBSTRING(id_produk, 11)) as max_id FROM produk";
        $this->db->query($queryMaxId);
        $result = $this->db->single();
        $maxId = $result['max_id'];

        // 2. Tambahkan 1 ke urutan maksimal untuk mendapatkan urutan yang akan digunakan untuk produk baru.
        $nextOrder = $maxId + 1;

        // 3. Buat ID unik baru dengan format yang diinginkan.
        $prefix = 'AC';
        $tanggal = date('dmy'); // Format tanggal sebagai bagian dari ID
        $newIdProduk = $prefix . '-' . $tanggal . '-' . $nextOrder;

        // 4. Periksa apakah ID produk sudah ada di database
        $checkQuery = "SELECT id_produk FROM produk WHERE id_produk = :new_id_produk";
        $this->db->query($checkQuery);
        $this->db->bind('new_id_produk', $newIdProduk);
        $this->db->execute();

        if ($this->db->rowCount() > 0) {
            // Jika ID sudah ada, berikan pesan kesalahan atau lakukan penanganan yang sesuai
            die("<script>
                alert('ID produk sudah ada di database');
            </script>");
        }

        // Sisanya dari metode tambahProduk tetap sama
        $query = "INSERT INTO produk VALUES (:id_produk, :nama, :jenis, :harga, :foto)";
        $this->db->query($query);
        $this->db->bind('id_produk', $newIdProduk);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('jenis', $data['jenis']);
        $this->db->bind('harga', $data['harga']);
        $this->db->bind('foto', $data['foto']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusProduk($id_produk)
    {
        $query = "DELETE FROM produk WHERE id_produk = :id_produk";
        $this->db->query($query);
        $this->db->bind('id_produk', $id_produk);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function getProdukById($id_produk)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_produk=:id_produk ');
        $this->db->bind('id_produk', $id_produk);
        return $this->db->single();
    }


    // public function editProduk($data) {
    //     // Ambil ID produk dari data yang dikirim
    //     $id_produk = $data['id_produk'];

    //     // Update data produk berdasarkan ID
    //     $query = "UPDATE produk SET nama = :nama, jenis = :jenis, harga = :harga, foto = :foto WHERE id_produk = :id_produk";
    //     $this->db->query($query);
    //     $this->db->bind('id_produk', $id_produk);
    //     $this->db->bind('nama', $data['nama']);
    //     $this->db->bind('jenis', $data['jenis']);
    //     $this->db->bind('harga', $data['harga']);
    //     $this->db->bind('foto', $data['foto']);
    //     $this->db->execute();

    //     return $this->db->rowCount();
    // }
    public function editProduk($data)
    {
        // Ambil ID produk dari data yang dikirim
        $id_produk = $data['id_produk'];

        // Periksa apakah ID produk yang akan diedit benar-benar ada di database
        $checkQuery = "SELECT foto FROM produk WHERE id_produk = :id_produk";
        $this->db->query($checkQuery);
        $this->db->bind('id_produk', $id_produk);
        $result = $this->db->single();
        
        $foto = empty($data['foto']) ? $data['foto'] : $result['foto'];

        if ($result) {
            // Update data produk berdasarkan ID
            $query = "UPDATE produk SET nama = :nama, jenis = :jenis, harga = :harga, foto = :foto WHERE id_produk = :id_produk";
            $this->db->query($query);
            $this->db->bind('id_produk', $id_produk);
            $this->db->bind('nama', $data['nama']);
            $this->db->bind('jenis', $data['jenis']);
            $this->db->bind('harga', $data['harga']);
            $this->db->bind('foto', $foto);
            $this->db->execute();

            return $this->db->rowCount();
        } else {
            // Handle jika ID produk tidak ditemukan
            die("<script>
                alert('ID produk tidak ditemukan di database');
                window.location.href='" . BaseURL . "/produk';
            </script>");
        }
    }






}