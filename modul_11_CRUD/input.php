<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1 {
            text-align: center;
        }

        .container {
            width: 400px;
            margin: auto;
        }
    </style>
</head>
<body>
    <h1>Input Data</h1>
    <div class="container">
        <form id="form_dosen" action="proses_inputdosen.php" method="post">
            <fieldset>
                <legend>Input data Dosen</legend>
                <p>
                    <label for="nama">Nama Dosen : </label>
                    <input type="text" name="namaDosen" id="namaDosen">
                </p>
                <p>
                    <label for="ipk">No HP : </label>
                    <input type="text" name="noHP" placeholder="Contoh: 08111222333">
                </p>
            </fieldset>
            <p>
                <input type="submit" name="input" value="simpan">
            </p>
        </form>
    </div>
</body>
</html>