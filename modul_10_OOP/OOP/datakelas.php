<?php

require_once('kelas/Mahasiswa.php');

$mhs1 = new Mahasiswa(nama: "Dony Kurniawan");
$mhs1->setNIM(243307072);
$mhs1->setKelas("2C-TI");
$mhs1->setJurusan("Teknologi Informasi");

echo "<h1>Mahasiswa 1</h1>";
echo "Nama: " . $mhs1->getNama() . "<br>";
echo "NIM: " . $mhs1->getNIM() . "<br>";
echo "kelas: " . $mhs1->getKelas() . "<br>";
echo "jurusan: " . $mhs1->getJurusan() . "<br><br>";

$mhs2 = new Mahasiswa("nicholas putra");
$mhs2->setNIM(243307083);
$mhs2->setKelas("2C-TI");
$mhs2->setJurusan("Teknologi Informasi");
echo "<h1>Mahasiswa 2</h1>";
echo "Nama: " . $mhs2->getNama() . "<br>";
echo "NIM: " . $mhs2->getNIM() . "<br>";
echo "kelas: " . $mhs2->getKelas() . "<br>";
echo "jurusan: " . $mhs2->getJurusan() . "<br>";

?>