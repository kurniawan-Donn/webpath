<?php
//variable dalam php
$txt = "Selamat datang";
$txt2 = "Politeknik Negeri Madiun";
$x = 5;
$y = 10.5;
echo "<p> isi variable txt adalah : $txt</p>";
echo "<p> isi variable x : $x</p>";
echo "<p> isi variable y adalah : $y</p>";
echo "... Belajar PHP di " . $txt2 . ". <br>";
echo $x + $y;

//PHP konstanta
define(constant_name: "nama_konstanta", value: "Dony Kurniawan");
echo "<br>".nama_konstanta;

?>