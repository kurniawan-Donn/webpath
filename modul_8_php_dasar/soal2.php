<?php
$tabungan = 1387500;
$pecahan = [100000,50000,20000,10000,5000,2000,500];

echo "total tabungan adalah Rp. $tabungan <br>";

foreach($pecahan as $total){
    $jumlahPecahan = intdiv(num1: $tabungan ,num2: $total);
    $tabungan = $tabungan % $total;

    echo "Pecahan Rp. $total adalah $jumlahPecahan<br>";
}

?>