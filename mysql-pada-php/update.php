<?php

include('connection.php');

//karena form menggunakan method post kita gunakan $_POST
$id = $_POST['id'];
$nama = $_POST['nama'];
$umur = $_POST['umur'];
$alamat = $_POST['alamat'];

$update = mysqli_query($connect, "UPDATE karyawan SET nama='$nama', alamat='$alamat', umur='$umur' WHERE id='$id' ");

if ($update)
    header('Location:list.php'); //Jika berhasil akan di arahkan ke halaman list.php
else
    echo 'Update data gagal'; //jika gagal akan keluar pesan tersebut