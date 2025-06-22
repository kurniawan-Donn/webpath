<?php
require_once 'Mahasiswa.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$mahasiswaObj = new Mahasiswa();

if (isset($_GET["npm"])) {
    $npm_to_delete = $_GET["npm"];
    if ($mahasiswaObj->deleteMahasiswa($npm_to_delete)) {
        header("location:viewmahasiswa.php");
        exit();
    } else {
        die("Gagal menghapus data mahasiswa.");
    }
} else {
    header("location:viewmahasiswa.php");
    exit();
}
?>