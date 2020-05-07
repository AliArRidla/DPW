<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "praktikumdb";

$koneksi = mysqli_connect($server, $username, $password, $database);
if ($koneksi) {
    echo "koneksi berhasil";
} else {
    echo "koneksi gagal" . mysqli_error($koneksi);
}

$sql = "CREATE TABLE mahasiswa (
    id INT PRIMARY KEY NOT NULL,
    nama VARCHAR(30) NOT NULL,
    alamat VARCHAR(50) NOT NULL)";

if (mysqli_query($koneksi, $sql)) {
    echo "Tabel mahasiswa berhasil dibuat";
} else {
    echo "Tabel mahasiswa gagal dibuat" . mysqli_error($koneksi);
}

mysqli_close($koneksi);
