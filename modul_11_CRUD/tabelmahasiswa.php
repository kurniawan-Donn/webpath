<?php
include 'koneksi.php'; // Memanggil file koneksi database

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
    <title>Tabel Data Mahasiswa</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f7f6;
            margin: 0;
            padding: 20px;
            color: #333;
        }
        h1 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 30px;
        }
        .container {
            max-width: 1000px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }
        .action-buttons {
            text-align: center;
            margin-bottom: 25px;
        }
        .action-buttons a {
            background-color: #28a745; /* Green for Add */
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }
        .action-buttons a:hover {
            background-color: #218838;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }
        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #007bff; /* Primary blue for header */
            color: white;
            text-transform: uppercase;
            font-weight: 600;
        }
        tr:nth-child(even) {
            background-color: #f8f9fa; /* Light grey for even rows */
        }
        tr:hover {
            background-color: #e2e6ea; /* Hover effect */
        }
        .action-links a {
            color: #007bff; /* Blue for edit */
            text-decoration: none;
            margin-right: 10px;
            transition: color 0.3s ease;
        }
        .action-links a:hover {
            text-decoration: underline;
            color: #0056b3;
        }
        .action-links a.delete {
            color: #dc3545; /* Red for delete */
        }
        .action-links a.delete:hover {
            color: #bd2130;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Tabel Data Mahasiswa</h1>
        <div class="action-buttons">
            <a href="inputmahasiswa.php">Input Data Mahasiswa Baru</a>
        </div>
        <table>
            <thead>
                <tr>
                    <th>NPM</th>
                    <th>Nama Mahasiswa</th>
                    <th>Prodi</th>
                    <th>Alamat</th>
                    <th>No HP</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Query untuk mengambil semua data dari tabel t_mahasiswa
                $query = "SELECT * FROM t_mahasiswa ORDER BY npm ASC";
                $result = mysqli_query($link, $query);

                // Periksa apakah query berhasil dijalankan
                if(!$result){
                    die("Query gagal dijalankan: " . mysqli_errno($link) .
                         " - " . mysqli_error($link));
                }

                // Loop untuk menampilkan setiap baris data
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($row['npm']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['namaMhs']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['prodi']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['alamat']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['noHP']) . "</td>";
                    echo "<td class='action-links'>";
                    // Anda perlu membuat file edit_mahasiswa.php dan delete_mahasiswa.php
                    echo "<a href='edit_mahasiswa.php?npm=" . htmlspecialchars($row['npm']) . "'>Edit</a> | ";
                    echo "<a href='delete_mahasiswa.php?npm=" . htmlspecialchars($row['npm']) . "' class='delete' onclick='return confirm(\"Yakin ingin menghapus data ini?\")'>Hapus</a>";
                    echo "</td>";
                    echo "</tr>";
                }

                // Tutup koneksi database setelah selesai mengambil data
                mysqli_close($link);
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>