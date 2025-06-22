<?php

require_once('kelas/akunBank.php');

$data1 = new akunBank("001", 10000, "Initial Name 1");
$data2 = new akunBank("002", 10000, "Initial Name 2");

$data1->setNama("Dancoww");
$data1->tambahUang(10000);
echo "<h1>Akun 1</h1>";
echo "Nomor Akun: " . $data1->getAccountNumber() . "<br>";
echo "Nama: " . $data1->getNama() . "<br>";
echo "Saldo: Rp " . $data1->tampilJumlahUang() . "<br>";
echo "Pajak: Rp " . $data1->hitungPajak() . "<br><br>";

$data2->setNama("heroo");
$data2->tambahUang(5000);
echo "<h1>Akun 2</h1>";
echo "Nomor Akun: " . $data2->getAccountNumber() . "<br>";
echo "Nama: " . $data2->getNama() . "<br>";
echo "Saldo: Rp " . $data2->tampilJumlahUang() . "<br>";
echo "Pajak: Rp " . $data2->hitungPajak() . "<br><br>";

$data1->kurangiUang(5000);
$data2->kurangiUang(5000);

echo "<h2>Saldo Setelah Pengurangan</h2>";
echo "Saldo akun 1 sekarang adalah: Rp " . $data1->tampilJumlahUang() . "<br>";
echo "Saldo akun 2 sekarang adalah: Rp " . $data2->tampilJumlahUang();

?>