<?php
$connect = mysqli_connect('localhost', 'root', 'root', 'codepolitan_mysql_php');

if (!$connect) {
    exit('Gagal koneksi database...');
}
