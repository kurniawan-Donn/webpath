<?php
$gajiPokok = 325000;
$tunjangan = 120000;

$gajiKotor = $gajiPokok + $tunjangan;

$pajak = 0.10 * $gajiKotor;

$gajibersih = $gajiKotor - $pajak;

echo "gaji pokok adalah $gajiPokok <br>";
echo "tunjangan adalah $tunjangan <br>";
echo "pajaknya adalah $pajak <br>";
echo "total gaji bersih adalah $gajibersih <br>";

?>