<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Data</title>
</head>

<body>
    <form action="insert.php" method="post">
        <label>Nama</label><br>
        <input type="text" name="nama" placeholder="Nama">
        <br><br>
        <label>Umur</label><br>
        <input type="number" name="umur" placeholder="Umur">
        <br><br>
        <label>Alamat</label><br>
        <textarea name="alamat" rows="3" placeholder="Alamat"></textarea>
        <br><br>
        <button type="submit">Tambah</button>
    </form>
</body>

</html>