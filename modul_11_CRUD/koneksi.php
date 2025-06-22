<?php
$host = "localhost";
$user = "root";
$paswd = "";
$name = "db_akademik";
$port = 3308; 

$link = mysqli_connect($host,$user,$paswd,$name,$port);

if(!$link) {
    die ("koneksi dengan database gagal : " . mysqli_connect_errno() .
         " - " . mysqli_connect_error());
}
?>