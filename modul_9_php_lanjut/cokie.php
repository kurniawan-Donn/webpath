<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Memanfaatkan Cookie</title>
</head>
<body>

<?php
// Cek apakah cookie sudah diset
if (!isset($_COOKIE['nama'])) {
    // Set cookie untuk 1 jam
    setcookie("nama", "dany", time() + 3600);
    echo "Cookie 'nama' telah diset. Silakan <a href=\"\">refresh halaman</a>.<br>";
} else {
    echo "Halo, " . $_COOKIE['nama'];
}
?>

</body>
</html>