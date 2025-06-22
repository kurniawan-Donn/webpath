<!DOCTYPE html>
<html>
<head>
<title>Upload File Gambar</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_FILES["gambar"]) && $_FILES["gambar"]["error"] == 0) {
        $tmpName = $_FILES["gambar"]["tmp_name"];
        $namaFile = basename($_FILES["gambar"]["name"]);
        $tipeFile = strtolower(pathinfo($namaFile, PATHINFO_EXTENSION));
        $allowed = ["jpg", "jpeg", "png", "gif"];

        if (in_array($tipeFile, $allowed)) {
            $tujuan = "uploads/"; // Folder tujuan upload
            if (!is_dir($tujuan)) {
                mkdir($tujuan, 0777, true); // Buat folder jika belum ada
            }

            $targetFile = $tujuan . $namaFile;

            if (file_exists($targetFile)) {
                echo "❌ Maaf, file dengan nama yang sama sudah ada.<br>";
            } else {
                if (move_uploaded_file($tmpName, $targetFile)) {
                    echo "✅ File berhasil diupload ke <strong>" . $targetFile . "</strong>.<br>";
                } else {
                    echo "❌ Gagal memindahkan file.<br>";
                }
            }
        } else {
            echo "❌ Hanya file JPG, JPEG, PNG, atau GIF yang diperbolehkan.<br>";
        }
    } else {
        echo "❌ Tidak ada file yang dipilih atau terjadi kesalahan.<br>";
    }
}
?>

<form action="" method="post" enctype="multipart/form-data">
    <label>Pilih Gambar yang akan diupload:</label><br>
    <input type="file" name="gambar" required><br><br>
    <input type="submit" value="Upload Image">
</form>

</body>
</html>