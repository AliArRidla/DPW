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
$sql = "INSERT INTO mahasiswa(id,nama,alamat) VALUES
    ('0001','George','malang'),
    ('0002','Charlotte','malang'),
    ('0003','Louis','surabaya')";

if (mysqli_query($koneksi, $sql)) {
    echo "Record berhasil ditambahkan";
} else {
    echo "Record gagal ditambahkan" . mysqli_error($koneksi);
}

mysqli_close($koneksi);
