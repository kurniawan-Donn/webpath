<?php
require_once 'Mahasiswa.php'; // Ganti include koneksi.php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (isset($_POST['input'])) {
    $mahasiswaObj = new Mahasiswa(); // Buat objek Mahasiswa
    $npm = $_POST['npm'];
    $namaMhs = $_POST['namaMhs'];
    $prodi = $_POST['prodi'];
    $alamat = $_POST['alamat'];
    $noHP = $_POST['noHP'];

    if ($mahasiswaObj->addMahasiswa($npm, $namaMhs, $prodi, $alamat, $noHP)) {
        header("location:viewmahasiswa.php");
        exit();
    } else {
        echo "Gagal menambahkan data mahasiswa.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Mahasiswa</title>
    <style>
        h1 { text-align: center; }
        .container { width: 450px; margin: auto; border: 1px solid #ccc; padding: 20px; border-radius: 8px; box-shadow: 2px 2px 10px rgba(0,0,0,0.1); }
        fieldset { border: 1px solid #ddd; padding: 15px; border-radius: 5px; margin-bottom: 20px; }
        legend { font-weight: bold; padding: 0 10px; }
        p { margin-bottom: 10px; }
        label { display: inline-block; width: 120px; margin-right: 10px; text-align: right; vertical-align: top; padding-top: 5px; }
        input[type="text"] { width: calc(100% - 140px); padding: 8px; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box; }
        input[type="submit"] { background-color: #007bff; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; font-size: 16px; margin-left: 130px; }
        input[type="submit"]:hover { background-color: #0056b3; }
        a { display: block; text-align: center; margin-top: 20px; color: #007bff; text-decoration: none; }
        a:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <h1>Input Data Mahasiswa</h1>
    <div class="container">
        <form id="form_mahasiswa" action="" method="post">
            <fieldset>
                <legend>Input Data Mahasiswa</legend>
                <p>
                    <label for="npm">NPM : </label>
                    <input type="text" name="npm" id="npm" required>
                </p>
                <p>
                    <label for="namaMhs">Nama Mahasiswa : </label>
                    <input type="text" name="namaMhs" id="namaMhs" required>
                </p>
                <p>
                    <label for="prodi">Prodi : </label>
                    <input type="text" name="prodi" id="prodi">
                </p>
                <p>
                    <label for="alamat">Alamat : </label>
                    <input type="text" name="alamat" id="alamat">
                </p>
                <p>
                    <label for="noHP">No HP : </label>
                    <input type="text" name="noHP" id="noHP" placeholder="Contoh: 081234567890">
                </p>
            </fieldset>
            <p>
                <input type="submit" name="input" value="Simpan">
            </p>
        </form>
    </div>
    <a href="viewmahasiswa.php">Lihat Data Mahasiswa</a>
</body>
</html>