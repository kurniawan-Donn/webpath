<?php
$t = date("H"); // Ambil jam sekarang dalam format 24

echo "Contoh If:<br>";
if ($t < 16) {
    echo "Selamat siang!";
}

echo "<br><br>Contoh If dan Else:<br>";
if ($t < 20) {
    echo "Selamat siang!";
} else {
    echo "Selamat malam!";
}

echo "<br><br>Contoh Nested If:<br>";
if ($t < 12) {
    echo "Selamat pagi!";
} elseif ($t < 16) {
    echo "Selamat sore!";
} else {
    echo "Selamat malam!";
}

?>