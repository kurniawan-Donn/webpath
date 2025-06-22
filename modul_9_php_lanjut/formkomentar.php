<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php
$name = $email = $comment = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["nama"];
    $email = $_POST["email"];
    $comment = $_POST["komentar"];

    echo "Nama : " . $name . "<br>";
    echo "Email : " . $email . "<br>";
    echo "Komentar : " . $comment . "<br>";
    echo "<hr>";
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Nama: <input type="text" name="nama"><br>
    E-mail: <input type="text" name="email"><br>
    Komentar: <textarea name="comment" rows="5" cols="40"></textarea><br>
    <input type="submit" value="simpan">
    <input type="reset" value="bersihkan">
</form>

</body>
</html>