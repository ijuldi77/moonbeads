<?php

class Keranjang extends Controller
{
    public function index()
    {

    }

    // Controller
    // controllers/Keranjang.php




    public function getAdd()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id_produk'])) {
            $id_produk = $_POST['id_produk'];
            $produk = $this->model('Produk_model')->getProdukById($id_produk);

            // Check if the product is found
            if ($produk) {
                // Memasukkan informasi produk ke dalam database
                $inserted = $this->model('Keranjang_model')->addToCart($produk);

                if ($inserted) {
                    echo json_encode(['success' => 'Product added to cart successfully']);
                } else {
                    echo json_encode(['error' => 'Failed to add product to cart']);
                }
            } else {
                echo json_encode(['error' => 'Product not found']);
            }
        } else {
            echo json_encode(['error' => 'Invalid request']);
        }
    }



    public function delete()
    {

    }
}