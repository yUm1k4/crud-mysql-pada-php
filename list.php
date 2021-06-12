<?php

include('connection.php');

// utk select all dari tbl karyawan
$query = mysqli_query($connect, "SELECT * FROM karyawan");
// fetch all = mengambil data dari mysqli_query, mysqli_assoc bawaan dari php akan mengembalikan nilai association
$results = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penggunaan MySQL pada PHP</title>
</head>

<body>
    <a href="add.php">Tambah Data</a>
    <br><br>
    <form action="search.php" method="get">
        <input type="text" name="keyword" placeholder="Keyword">
        <button type="submit">Search</button>
    </form>
    <br>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Umur</th>
            <th>Action</th>
        </tr>
        <?php
        $no = 1;
        foreach ($results as $r) : ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $r['nama'] ?></td>
                <td><?= $r['alamat'] ?></td>
                <td><?= $r['umur'] ?></td>
                <td>
                    <a href="edit.php?id=<?= $r['id'] ?>">Edit</a>
                    <a href="delete.php?id=<?= $r['id'] ?>">Delete</a>
                </td>
            </tr>
        <?php endforeach ?>
    </table>
</body>

</html>