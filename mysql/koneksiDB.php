<?php
$server = "localhost";
$username = "root";
$password = "";

$koneksi = mysqli_connect($server, $username, $password);
if ($koneksi) {
    echo "koneksi berhasil";
} else {
    echo "koneksi gagal" . mysqli_connect_error();
}
$sql = "CREATE DATABASE praktikumdb";
if (mysqli_query($koneksi, $sql)) {
    echo "Database berhasil dibuat";
} else {
    echo "Database gagal dibuat" . mysqli_connect_error();
}
mysqli_close($koneksi);
