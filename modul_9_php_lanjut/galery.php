<!DOCTYPE html>
<html>
<head>
<title>Galeri Gambar</title>
<style>
.galeri {
    display: flex;
    flex-wrap: wrap;
}

.galeri img {
    width: 200px;
    height: 150px;
    object-fit: cover;
    margin: 10px;
    border: 2px solid #ccc;
    transition: 0.3s;
}

.galeri img:hover {
    border-color: #333;
}
</style>
</head>
<body>

<h2>Galeri Gambar</h2>
<div class="galeri">
    <?php
    $fileList = glob('uploads/*.{jpg,jpeg,png,gif}', GLOB_BRACE); // Perubahan di sini
    foreach ($fileList as $filename) {
        if (is_file($filename)) {
            echo '<img src="' . $filename . '" alt="Gambar">';
        }
    }
    ?>
</div>

</body>
</html>