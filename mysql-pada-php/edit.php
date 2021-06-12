<?php

include('connection.php');

$id = $_GET['id'];

// query get data berdasarkan id
$query = mysqli_query($connect, "SELECT * FROM karyawan WHERE id='$id' LIMIT 1");
// menampung hasil dari query
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
</head>

<body>
    <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?= $id ?>">
        <label>Nama</label><br>
        <input type="text" name="nama" placeholder="Nama" value="<?= $result[0]['nama'] ?>">
        <br><br>
        <label>Umur</label><br>
        <input type="number" name="umur" placeholder="Umur" value="<?= $result[0]['umur'] ?>">
        <br><br>
        <label>Alamat</label><br>
        <textarea name="alamat" rows="3" placeholder="Alamat"><?= $result[0]['alamat'] ?></textarea>
        <br><br>
        <button type="submit">Update</button>
    </form>
</body>

</html>