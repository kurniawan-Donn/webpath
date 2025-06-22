<?php
//contoh fungsi
function writeMsg($nama): void {
    echo "...selamat datang ". $nama ."<br>";
}

writeMsg(nama: "Ahmad");

function tambah(int $angka1, int $angka2): int {
    $a = $angka1 + $angka2;
    return $a;
}

$hasil = tambah(angka1: 5, angka2: 5);
echo ($hasil);

?>