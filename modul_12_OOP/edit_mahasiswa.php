<?php
require_once 'Mahasiswa.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$mahasiswaObj = new Mahasiswa();

$npm = "";
$namaMhs = "";
$prodi = "";
$alamat = "";
$noHP = "";

if (isset($_GET["npm"])) {
    $get_npm = $_GET["npm"];
    $data = $mahasiswaObj->getMahasiswaByNpm($get_npm);

    if ($data) {
        $npm = $data["npm"];
        $namaMhs = $data["namaMhs"];
        $prodi = $data["prodi"];
        $alamat = $data["alamat"];
        $noHP = $data["noHP"];
    } else {
        die("Data mahasiswa tidak ditemukan.");
    }
} else {
    header("location:viewmahasiswa.php");
    exit();
}

if (isset($_POST['edit'])) {
    $posted_npm = $_POST['npm'];
    $posted_namaMhs = $_POST['namaMhs'];
    $posted_prodi = $_POST['prodi'];
    $posted_alamat = $_POST['alamat'];
    $posted_noHP = $_POST['noHP'];

    if ($mahasiswaObj->updateMahasiswa($posted_npm, $posted_namaMhs, $posted_prodi, $posted_alamat, $posted_noHP)) {
        header("location:viewmahasiswa.php");
        exit();
    } else {
        echo "Gagal memperbarui data mahasiswa.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Mahasiswa</title>
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
    <h1>Edit Data Mahasiswa</h1>
    <div class="container">
        <form id="form_mahasiswa_edit" action="" method="post">
            <fieldset>
                <legend>Edit Data Mahasiswa</legend>
                <p>
                    <label for="npm">NPM : </label>
                    <input type="text" name="npm" id="npm" value="<?php echo htmlspecialchars($npm); ?>" readonly style="background-color: #eee;">
                </p>
                <p>
                    <label for="namaMhs">Nama Mahasiswa : </label>
                    <input type="text" name="namaMhs" id="namaMhs" value="<?php echo htmlspecialchars($namaMhs); ?>">
                </p>
                <p>
                    <label for="prodi">Prodi : </label>
                    <input type="text" name="prodi" id="prodi" value="<?php echo htmlspecialchars($prodi); ?>">
                </p>
                <p>
                    <label for="alamat">Alamat : </label>
                    <input type="text" name="alamat" id="alamat" value="<?php echo htmlspecialchars($alamat); ?>">
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