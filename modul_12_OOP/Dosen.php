<?php
// Pastikan Database.php sudah di-include
require_once 'Database.php';

class Dosen {
    private $db;
    private $table_name = "t_dosen";

    public function __construct() {
        $this->db = new Database();
    }

    // Metode untuk mendapatkan semua data dosen
    public function getAllDosen() {
        $sql = "SELECT * FROM " . $this->table_name . " ORDER BY idDosen ASC";
        $stmt = $this->db->query($sql);
        $result = $stmt->get_result();
        $dosen_data = [];
        while ($row = $result->fetch_assoc()) {
            $dosen_data[] = $row;
        }
        $stmt->close();
        return $dosen_data;
    }

    // Metode untuk mendapatkan data dosen berdasarkan ID
    public function getDosenById($idDosen) {
        $sql = "SELECT * FROM " . $this->table_name . " WHERE idDosen = ?";
        $stmt = $this->db->query($sql, [$idDosen], "i"); // "i" for integer type
        $result = $stmt->get_result();
        $dosen = $result->fetch_assoc();
        $stmt->close();
        return $dosen;
    }

    // Metode untuk menambah data dosen
    public function addDosen($namaDosen, $noHP) {
        // idDosen adalah AUTO_INCREMENT, jadi kita tidak memasukkannya ke query INSERT
        $sql = "INSERT INTO " . $this->table_name . " (namaDosen, noHP) VALUES (?, ?)";
        $stmt = $this->db->query($sql, [$namaDosen, $noHP], "ss"); // "ss" for string, string
        $success = $stmt->affected_rows > 0;
        $stmt->close();
        return $success;
    }

    // Metode untuk update data dosen
    public function updateDosen($idDosen, $namaDosen, $noHP) {
        $sql = "UPDATE " . $this->table_name . " SET namaDosen = ?, noHP = ? WHERE idDosen = ?";
        $stmt = $this->db->query($sql, [$namaDosen, $noHP, $idDosen], "ssi"); // "ssi" for string, string, integer
        $success = $stmt->affected_rows > 0;
        $stmt->close();
        return $success;
    }

    // Metode untuk menghapus data dosen
    public function deleteDosen($idDosen) {
        $sql = "DELETE FROM " . $this->table_name . " WHERE idDosen = ?";
        $stmt = $this->db->query($sql, [$idDosen], "i"); // "i" for integer
        $success = $stmt->affected_rows > 0;
        $stmt->close();
        return $success;
    }
}

?>