<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    Selamat datang <b><?php echo $_POST["nama"]; ?></b><br>
    NIM : <?php echo $_POST["nim"]; ?><br>
    Email : <?php echo $_POST["email"]; ?><br>
    Tempat, tanggal lahir : <?php echo $_POST["tempat"]; ?>, <?php echo $_POST["ttl"]; ?><br>
    Alamat : <?php echo $_POST["alamat"]; ?><br>
    Jenis Kelamin : <?php echo $_POST["gender"]; ?><br>
</body>
</html>