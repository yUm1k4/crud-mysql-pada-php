<?php

include('connection.php');

//karena form menggunakan method post kita gunakan $_POST
$nama = $_POST['nama']; //index didalamnya sesuai dengan input name yang ada di form
$umur = $_POST['umur'];
$alamat = $_POST['alamat'];

$insert = mysqli_query($connect, "INSERT INTO karyawan SET nama='$nama', alamat='$alamat', umur='$umur' ");

if ($insert)
    header('Location:list.php'); //Jika berhasil akan di arahkan ke halaman list.php
else
    echo 'Input data gagal'; //jika gagal akan keluar pesan tersebut