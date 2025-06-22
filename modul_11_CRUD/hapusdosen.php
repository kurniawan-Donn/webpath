<?php
include("koneksi.php");

if (isset($_GET["idDosen"])) {
    $id = $_GET["idDosen"];
    $query = "DELETE FROM t_dosen WHERE idDosen='$id'";
    $hasil_query = mysqli_query($link, $query);

    if(!$hasil_query) {
        die("Gagal menghapus data: " . mysqli_errno($link) .
            " - " . mysqli_error($link));
    }
}
header("location:viewdosen.php");
?>