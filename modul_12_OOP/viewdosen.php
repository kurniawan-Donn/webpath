<?php
require_once 'Dosen.php'; // Ganti include koneksi.php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$dosenObj = new Dosen(); // Buat objek Dosen
$dosen_data = $dosenObj->getAllDosen(); // Ambil semua data dosen
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Data Dosen</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f4f7f6; margin: 0; padding: 20px; color: #333; }
        h1 { text-align: center; color: #2c3e50; margin-bottom: 30px; }
        .container { max-width: 840px; margin: 0 auto; background-color: #ffffff; padding: 30px; border-radius: 10px; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1); }
        .action-buttons { text-align: center; margin-bottom: 25px; }
        .action-buttons a { background-color: #28a745; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px; font-size: 16px; transition: background-color 0.3s ease; }
        .action-buttons a:hover { background-color: #218838; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05); }
        th, td { padding: 12px 15px; text-align: left; border-bottom: 1px solid #ddd; }
        th { background-color: #007bff; color: white; text-transform: uppercase; font-weight: 600; }
        tr:nth-child(even) { background-color: #f8f9fa; }
        tr:hover { background-color: #e2e6ea; }
        .action-links a { color: #007bff; text-decoration: none; margin-right: 10px; transition: color 0.3s ease; }
        .action-links a:hover { text-decoration: underline; color: #0056b3; }
        .action-links a.delete { color: #dc3545; }
        .action-links a.delete:hover { color: #bd2130; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Tabel Data Dosen</h1>
        <div class="action-buttons">
            <a href="input.php">Input Data Dosen Baru</a>
        </div>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Dosen</th>
                    <th>No HP</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (!empty($dosen_data)) {
                    foreach ($dosen_data as $row) {
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($row['idDosen']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['namaDosen']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['noHP']) . "</td>";
                        echo "<td class='action-links'>";
                        echo "<a href='edit.php?idDosen=" . htmlspecialchars($row['idDosen']) . "'>Edit</a> | ";
                        echo "<a href='delete.php?idDosen=" . htmlspecialchars($row['idDosen']) . "' class='delete' onclick='return confirm(\"Yakin ingin menghapus data ini?\")'>Hapus</a>";
                        echo "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>Tidak ada data dosen.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>