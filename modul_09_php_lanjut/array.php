<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php
$data = [
    ["nama" => "Ali", "umur" => 21],
    ["nama" => "Budi", "umur" => 22],
    ["nama" => "Citra", "umur" => 23],
    ["nama" => "Dina", "umur" => 20],
    ["nama" => "Eko", "umur" => 24],
    ["nama" => "Farah", "umur" => 22],
    ["nama" => "Gilang", "umur" => 25],
    ["nama" => "Hana", "umur" => 23],
    ["nama" => "Indra", "umur" => 21],
    ["nama" => "Joko", "umur" => 26],
    ["nama" => "Kiki", "umur" => 24],
    ["nama" => "Lina", "umur" => 25],
    ["nama" => "Mira", "umur" => 20],
    ["nama" => "Nina", "umur" => 21],
    ["nama" => "Oka", "umur" => 22]
];

$jsonData = json_encode($data, JSON_PRETTY_PRINT);

echo "<pre>$jsonData</pre>";
?>

</body>
</html>