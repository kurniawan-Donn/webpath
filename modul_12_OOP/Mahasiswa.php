<?php
// Pastikan Database.php sudah di-include
require_once 'Database.php';

class Mahasiswa {
    private $db;
    private $table_name = "t_mahasiswa";

    public function __construct() {
        $this->db = new Database();
    }

    // Metode untuk mendapatkan semua data mahasiswa
    public function getAllMahasiswa() {
        $sql = "SELECT * FROM " . $this->table_name . " ORDER BY npm ASC";
        $stmt = $this->db->query($sql);
        $result = $stmt->get_result();
        $mahasiswa_data = [];
        while ($row = $result->fetch_assoc()) {
            $mahasiswa_data[] = $row;
        }
        $stmt->close();
        return $mahasiswa_data;
    }

    // Metode untuk mendapatkan data mahasiswa berdasarkan NPM
    public function getMahasiswaByNpm($npm) {
        $sql = "SELECT * FROM " . $this->table_name . " WHERE npm = ?";
        $stmt = $this->db->query($sql, [$npm], "i"); // "i" for integer type (assuming NPM is INT)
        $result = $stmt->get_result();
        $mahasiswa = $result->fetch_assoc();
        $stmt->close();
        return $mahasiswa;
    }

    // Metode untuk menambah data mahasiswa
    public function addMahasiswa($npm, $namaMhs, $prodi, $alamat, $noHP) {
        $sql = "INSERT INTO " . $this->table_name . " (npm, namaMhs, prodi, alamat, noHP) VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->db->query($sql, [$npm, $namaMhs, $prodi, $alamat, $noHP], "issss"); // "issss" for int, string, string, string, string
        $success = $stmt->affected_rows > 0;
        $stmt->close();
        return $success;
    }

    // Metode untuk update data mahasiswa
    public function updateMahasiswa($npm, $namaMhs, $prodi, $alamat, $noHP) {
        $sql = "UPDATE " . $this->table_name . " SET namaMhs = ?, prodi = ?, alamat = ?, noHP = ? WHERE npm = ?";
        $stmt = $this->db->query($sql, [$namaMhs, $prodi, $alamat, $noHP, $npm], "ssssi"); // "ssssi" for string, string, string, string, int
        $success = $stmt->affected_rows > 0;
        $stmt->close();
        return $success;
    }

    // Metode untuk menghapus data mahasiswa
    public function deleteMahasiswa($npm) {
        $sql = "DELETE FROM " . $this->table_name . " WHERE npm = ?";
        $stmt = $this->db->query($sql, [$npm], "i"); // "i" for integer
        $success = $stmt->affected_rows > 0;
        $stmt->close();
        return $success;
    }
}

?>