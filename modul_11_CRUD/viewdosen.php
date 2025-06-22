<?php
include 'koneksi.php';

// Aktifkan laporan error PHP untuk debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Dosen</title>
    <style>
        table {
            width: 840px;
            margin: auto;
            border-collapse: collapse; /* Untuk tampilan border yang rapi */
        }
        table, th, td {
            border: 1px solid black; /* Border untuk tabel dan sel */
            padding: 8px; /* Ruang dalam sel */
            text-align: left; /* Teks rata kiri */
        }
        h1 {
            text-align: center;
        }
        center {
            margin-bottom: 20px; /* Sedikit jarak di bawah tombol input */
        }
    </style>
</head>
<body>
    <h1>Tabel Dosen</h1>
    <center><a href="input.php">Input Data</a></center>
    <br>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Dosen</th>
                <th>No HP</th>
                <th>Pilihan</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = "SELECT * FROM t_dosen ORDER BY idDosen ASC";
            $result = mysqli_query($link, $query);

            // Periksa apakah query berhasil dijalankan
            if(!$result){
                die("Query gagal dijalankan: " . mysqli_errno($link) .
                     " - " . mysqli_error($link));
            }

            // Loop untuk menampilkan setiap  baris data
            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($row['idDosen']) . "</td>";
                echo "<td>" . htmlspecialchars($row['namaDosen']) . "</td>";
                echo "<td>" . htmlspecialchars($row['noHP']) . "</td>";
                echo "<td>";
                echo "<a href='editdosen.php?idDosen=" . htmlspecialchars($row['idDosen']) . "'>Edit</a> | ";
                echo "<a href='hapusdosen.php?idDosen=" . htmlspecialchars($row['idDosen']) . "' onclick='return confirm(\"Yakin ingin menghapus data ini?\")'>Hapus</a>";
                echo "</td>";
                echo "</tr>";
            }

            // Tutup koneksi database setelah selesai mengambil data
            mysqli_close($link);
            ?>
        </tbody>
    </table>
</body>
</html>