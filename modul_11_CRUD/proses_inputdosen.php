<?php
include 'koneksi.php';

if (isset($_POST['input'])) {
    $namaDosen = $_POST['namaDosen'];
    $noHP = $_POST['noHP'];

    $query = "INSERT INTO t_dosen VALUES (NULL, '$namaDosen', '$noHP')";
    $result = mysqli_query($link, $query);

    if(!$result){
        die("Query gagal dijalankan: " . mysqli_errno($link) .
             " - " . mysqli_error($link));
    }
}

header("location:viewdosen.php");
?>