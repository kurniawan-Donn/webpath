<?php
$x = 5;
$y = 10;

//arithmetic operators
echo "Penambahan ". $x + $y . "<br>";
echo "Pengurangan ". $x - $y . "<br>";
echo "Perkalian ". $x * $y . "<br>";
echo "Pembagian ". $x / $y . "<br>";
echo "Modulus ". $x % $y . "<br>";
echo "Eponensial ". $x**$y . "<br>";
echo ("<br>");

//Assignment operators
$x += 2; //$x = $x + 2
$y *= 2; //$y = $y * 2
echo "Penambahan x ". $x . "<br>";
echo "Perkalian y ". $y . "<br>";
echo ("<br>");

//increment/decrement operators

echo "isi ++x = ".++$x."<br>";
echo "isi x++ = ".$x++."<br>";
echo "isi --y = ".--$y."<br>";
echo "isi y-- = ".$y--."<br>";
echo "...isi y = ".$y."<br>";
echo ("<br>");

//conditional assignment operators
$user = "Andi darmawan";

//<kondisi> ? <nilai_jika_kondisi_true> : <nilai_jika_kondisi_false>
$status = (empty($user)) ? "kosong" : "ada isi";
echo $status."<br>";

//variable $color diisi dengan "red" jika $color tidak ada atau null
echo $color = $color ?? "red";

?>