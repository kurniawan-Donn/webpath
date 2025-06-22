<?php
require_once 'Dosen.php'; // Ganti include koneksi.php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (isset($_POST['input'])) {
    $dosenObj = new Dosen(); // Buat objek Dosen
    $namaDosen = $_POST['namaDosen'];
    $noHP = $_POST['noHP'];

    if ($dosenObj->addDosen($namaDosen, $noHP)) {
        header("location:viewdosen.php");
        exit();
    } else {
        echo "Gagal menambahkan data dosen.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Dosen</title>
    <style>
        h1 { text-align: center; }
        .container { width: 400px; margin: auto; }
        fieldset { border: 1px solid #ddd; padding: 15px; border-radius: 5px; margin-bottom: 20px; }
        legend { font-weight: bold; padding: 0 10px; }
        p { margin-bottom: 10px; }
        label { display: inline-block; width: 120px; margin-right: 10px; text-align: right; vertical-align: top; padding-top: 5px; }
        input[type="text"] { width: calc(100% - 140px); padding: 8px; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box; }
        input[type="submit"] { background-color: #4CAF50; color: white; padding: 10px 15px; border: none; border-radius: 4px; cursor: pointer; font-size: 16px; margin-left: 130px; }
        input[type="submit"]:hover { background-color: #45a049; }
        a { display: block; text-align: center; margin-top: 20px; color: #007bff; text-decoration: none; }
        a:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <h1>Input Data Dosen</h1>
    <div class="container">
        <form id="form_dosen" action="" method="post">
            <fieldset>
                <legend>Input Data Dosen</legend>
                <p>
                    <label for="namaDosen">Nama Dosen : </label>
                    <input type="text" name="namaDosen" id="namaDosen" required>
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
    <a href="viewdosen.php">Lihat Data Dosen</a>
</body>
</html>