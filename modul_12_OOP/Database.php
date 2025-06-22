<?php

class Database {
    private $host = "localhost";
    private $user = "root";
    private $paswd = "";
    private $name = "db_akademik";
    private $port = 3308; // Pastikan ini sesuai dengan konfigurasi MySQL XAMPP Anda
    private $conn;

    public function __construct() {
        // Buat koneksi database
        $this->conn = new mysqli($this->host, $this->user, $this->paswd, $this->name, $this->port);

        // Periksa koneksi
        if ($this->conn->connect_error) {
            die("Koneksi database gagal: " . $this->conn->connect_error);
        }
    }

    public function getConnection() {
        return $this->conn;
    }

    // Metode untuk menjalankan query dengan prepared statement
    public function query($sql, $params = [], $types = "") {
        $stmt = $this->conn->prepare($sql);

        if ($stmt === false) {
            die("Error preparing statement: " . $this->conn->error);
        }

        if (!empty($params) && !empty($types)) {
            // Bind parameter secara dinamis
            // Parameter pertama bind_param adalah string tipe data (e.g., "ssi" untuk string, string, integer)
            // Parameter berikutnya adalah variabel-variabel yang akan di-bind
            $stmt->bind_param($types, ...$params);
        }

        if (!$stmt->execute()) {
            die("Error executing statement: " . $stmt->error);
        }

        return $stmt;
    }

    public function __destruct() {
        // Tutup koneksi saat objek dihancurkan
        if ($this->conn) {
            $this->conn->close();
        }
    }
}

?>