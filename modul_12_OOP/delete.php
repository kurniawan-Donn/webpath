<?php
require_once 'Dosen.php'; // Ganti include koneksi.php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$dosenObj = new Dosen(); // Buat objek Dosen

if (isset($_GET["idDosen"])) {
    $id = $_GET["idDosen"];
    if ($dosenObj->deleteDosen($id)) {
        header("location:viewdosen.php");
        exit();
    } else {
        die("Gagal menghapus data dosen.");
    }
} else {
    header("location:viewdosen.php");
    exit();
}
?>