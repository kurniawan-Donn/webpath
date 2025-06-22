<?php
$namaBuah = array("Nanas", "Mangga", "Jeruk", "Apel", "Melon", "Manggis");

echo "...saya suka ". $namaBuah[0] . ", " . $namaBuah[1] . " dan " . $namaBuah[2] . " <br>";

//tampilkan Mangga;

echo "saya suka ". $namaBuah[1] ."<br>";
echo "saya suka ". $namaBuah[2] ."<br>";
echo "saya suka ". $namaBuah[3] ."<br>";
echo "saya suka ". $namaBuah[4] ."<br>";

//array dengan spesifik index
$umur = array("Andi"=>35 . " Tahun", "Ben"=>37 ." tahun", "Joe"=>34 ." Tahun");
$umur['Ahmad']="50 tahun";
echo "umur andi adalah ". $umur['Andi'];
echo "<br> umur Ben adalah ". $umur['Ben'];
echo "<br> umur Joe adalah ". $umur['Joe'];
echo "<br> umur ahmad adalah ". $umur['Ahmad'];

?>