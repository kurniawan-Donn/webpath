<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>

<?php
session_start();

try {
    // Pastikan data username dan password ada di POST
    if (!isset($_POST['username']) || !isset($_POST['password'])) {
        // Jika belum ada data POST, tidak perlu melempar exception,
        // biarkan kode eksekusi sampai ke bagian form di bawah.
        // Ini adalah case saat pertama kali membuka halaman login.
        // Kita hanya akan melanjutkan proses verifikasi jika ada data POST.
    } else {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $akun = [
            "admin" => "12345",
            "user" => "abcde"
        ];

        // Memeriksa apakah username ada dalam daftar akun
        if (!array_key_exists($username, $akun)) {
            throw new Exception("Username tidak ditemukan.");
        }

        // Memeriksa apakah password cocok
        if ($akun[$username] !== $password) { // Menggunakan !== untuk perbandingan ketat
            throw new Exception("Password salah.");
        }

        // Jika username dan password cocok, set sesi dan redirect
        $_SESSION['login'] = true;
        $_SESSION['user'] = $username;
        header("Location: dashboard.php");
        exit(); // Penting untuk menghentikan eksekusi script setelah redirect
    }

} catch (Exception $e) {
    // Tangani exception (error login)
    echo "<p style=\"color:red;\">Login gagal: " . $e->getMessage() . "</p>";
    echo "<a href=\"login.php\">Kembali ke Login</a>";
    // Tidak perlu exit di sini, biarkan form login tetap tampil
}

// Bagian ini akan ditampilkan setelah blok try-catch
// Jika pengguna sudah login, atau jika ada error saat login dan ingin menampilkan form lagi
if (isset($_SESSION['login']) && $_SESSION['login'] === true) {
    echo "Halo, " . $_SESSION['user'] . ". Selamat datang di dashboard!<br>";
    echo "<a href=\"logout.php\">Logout</a>";
} else {
    // Jika belum login atau login gagal, tampilkan form login
    echo "<h2>Halaman Login</h2>";
    echo "<form action=\"login.php\" method=\"post\">"; // Mengarahkan form ke halaman yang sama
    echo "Username: <input type=\"text\" name=\"username\" required><br>";
    echo "Password: <input type=\"password\" name=\"password\" required><br>";
    echo "<input type=\"submit\" value=\"Login\">";
    echo "</form>";
}
?>

</body>
</html>