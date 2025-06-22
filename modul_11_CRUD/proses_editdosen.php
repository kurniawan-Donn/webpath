<?php
if (isset($_POST['edit'])) {
    include("koneksi.php");

    $id = $_POST['idDosen'];
    $namaDosen = $_POST['namaDosen'];
    $noHP = $_POST['noHP'];

    $query = "UPDATE t_dosen SET namaDosen = '$namaDosen', noHP = '$noHP' WHERE idDosen = '$id'";
    $result = mysqli_query($link, $query);

    if(!$result){
        die("Query gagal dijalankan: " . mysqli_errno($link) .
             " - " . mysqli_error($link));
    }
}

header("location:viewdosen.php");
?>