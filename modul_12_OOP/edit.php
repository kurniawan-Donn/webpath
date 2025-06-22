<?php
require_once 'Dosen.php'; // Ganti include koneksi.php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$dosenObj = new Dosen(); // Buat objek Dosen

$idDosen = "";
$namaDosen = "";
$noHP = "";

// Bagian ini untuk mengambil data yang akan diedit SAAT HALAMAN PERTAMA KALI DIBUKA
if (isset($_GET["idDosen"])) {
    $id = $_GET["idDosen"];
    $data = $dosenObj->getDosenById($id);

    if ($data) {
        $idDosen = $data["idDosen"];
        $namaDosen = $data["namaDosen"];
        $noHP = $data["noHP"];
    } else {
        die("Data dosen tidak ditemukan.");
    }
} else {
    header("location:viewdosen.php");
    exit();
}

// Bagian ini untuk MEMPROSES DATA SETELAH FORM DI SUBMIT (Tombol Update Data diklik)
if (isset($_POST['edit'])) {
    $id = $_POST['idDosen'];
    $namaDosen = $_POST['namaDosen'];
    $noHP = $_POST['noHP'];

    if ($dosenObj->updateDosen($id, $namaDosen, $noHP)) {
        header("location:viewdosen.php");
        exit();
    } else {
        echo "Gagal memperbarui data dosen.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Dosen</title>
    <style>
        h1 { text-align: center; }
        .container { width: 400px; margin: auto; }
        fieldset { padding: 20px; border: 1px solid #ccc; border-radius: 5px; margin-bottom: 20px; }
        legend { font-weight: bold; padding: 0 10px; }
        p { margin-bottom: 10px; }
        label { display: inline-block; width: 120px; margin-right: 10px; text-align: right; }
        input[type="text"] { width: 200px; padding: 5px; border: 1px solid #ddd; border-radius: 3px; }
        input[type="submit"] { background-color: #4CAF50; color: white; padding: 10px 15px; border: none; border-radius: 4px; cursor: pointer; font-size: 16px; margin-left: 130px; }
        input[type="submit"]:hover { background-color: #45a049; }
    </style>
</head>
<body>
    <h1>Edit Data Dosen</h1>
    <div class="container">
        <form id="form_dosen_edit" action="" method="post">
            <fieldset>
                <legend>Edit Data Dosen</legend>
                <p>
                    <label for="idDosen">ID Dosen : </label>
                    <input type="text" name="idDosen" id="idDosen" value="<?php echo htmlspecialchars($idDosen); ?>" readonly style="background-color: #eee;">
                </p>
                <p>
                    <label for="namaDosen">Nama Dosen : </label>
                    <input type="text" name="namaDosen" id="namaDosen" value="<?php echo htmlspecialchars($namaDosen); ?>">
                </p>
                <p>
                    <label for="noHP">No HP : </label>
                    <input type="text" name="noHP" id="noHP" value="<?php echo htmlspecialchars($noHP); ?>">
                </p>
            </fieldset>
            <p>
                <input type="submit" name="edit" value="Update Data">
            </p>
        </form>
    </div>
</body>
</html>