<?php
require_once('Model.php');

class Keranjang extends Model
{
    protected $table;

    public function __construct()
    {
        parent::__construct();
        $this->table = 'keranjang_produk';
    }

    // public function addToCart($produk)
    // {
    //     print_r($produk);
    //     die;
    //     // Ambil id_user dari session user
    //     // Catatan: Anda perlu memastikan session user sudah dimulai sebelum menggunakan $_SESSION
    //     $id_user = $_SESSION['user']['id_user']; // Sesuaikan dengan struktur session yang digunakan

    //     // Ambil id_produk dari parameter $produk
    //     $id_produk = $produk;

    //     // Set qty_produk default ke 1
    //     $qty_produk = 1;

    //     // Masukkan data ke dalam database
    //     $data = [
    //         'id_user' => $id_user,
    //         'id_produk' => $id_produk,
    //         'qty_produk' => $qty_produk
    //     ];

    //     $this->insert($data);
    // }
    public function read()
    {
        if (isset($_SESSION['id_user'])) {
            $id_user = $_SESSION['id_user'];

            $query = "SELECT p.nama, p.harga, kp.qty_produk, (kp.qty_produk * p.harga) AS total_harga
             FROM $this->table kp
             JOIN produk p ON kp.id_produk = p.id_produk
             JOIN cart c ON kp.id_cart = c.id_cart
             JOIN users u ON c.id_user = u.id_user
             WHERE u.id_user = '$id_user'";


            $this->query($query);
            $a = $this->resultAll();
            // var_dump($a);
            // die;
            return $a;
        }
    }
}