<?php

require_once('kelas/Manusia.php');

$sandi = new Manusia();
$sandi->setNama("Deny");

$budi = new Manusia();
$budi->setNama("Dony");

echo($sandi->getNama());
echo("<br>");

$NIK = new Manusia();
echo($NIK->getNIK());
echo("<br>");

$adi = new Manusia();
$adi->setNama("Azis");

echo($adi->getNama());
echo("<br>");

$umurSaya = new Manusia();
$umurSaya->setUmur(20);
echo($umurSaya->getUmur());

?>