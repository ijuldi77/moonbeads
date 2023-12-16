<?php
require_once('Model.php');

class User extends Model
{
    protected $conn;
    protected $table;

    public function __construct()
    {
        parent::__construct();
        $this->table = 'users';
    }

    public function getUserByEmail($email)
    {
        $query = "SELECT * FROM {$this->table} WHERE email = :email";
        $this->query($query);
        $this->bind(':email', $email);
        return $this->single();
    }

    public function login($data)
    {
        $user = $this->getUserByEmail($data['email']);

        if ($user && password_verify($data['password'], $user['password'])) {
            // Password matches
            return $user;
        } else {
            // Invalid credentials
            return false;
        }
    }


    public function daftar($data)
    {
        // 1. Periksa apakah email sudah ada
        $checkQuery = "SELECT COUNT(*) as count FROM {$this->table} WHERE email = :email";
        $this->query($checkQuery);
        $this->bind(':email', $data['email']);
        $result = $this->single();

        if ($result['count'] > 0) {
            // Email sudah ada, hentikan program dan beri pesan
            die('Email sudah ada dalam database, Silahkan gunakan email lain');
        }

        // Email belum ada, lanjutkan proses pendaftaran

        // 2. Periksa ID produk yang telah ada untuk mendapatkan urutan maksimal.
        $queryMaxId = "SELECT MAX(SUBSTRING(id_user, 4)) as max_id FROM {$this->table}";
        $this->query($queryMaxId);
        $result = $this->single();

        $maxId = $result['max_id'];
        // 3. Tambahkan 1 ke urutan maksimal untuk mendapatkan urutan yang akan digunakan untuk produk baru.
        $nextOrder = $maxId + 1;
        // 4. Buat ID unik baru dengan format yang diinginkan.
        $prefix = 'US';
        $newIdUser = $prefix . '-' . $nextOrder;

        // 5. Sisanya dari metode daftar tetap sama
        $query = "INSERT INTO {$this->table} (id_user, email, password) VALUES (:id_user, :email, :hashPassword)";
        $this->query($query);
        $this->bind(':id_user', $newIdUser);
        $this->bind(':email', $data['email']);
        $this->bind(':hashPassword', $data['password']);
        $this->execute();
        // print_r($this->execute());
        // die;

        return $this->rowCount();
    }


}