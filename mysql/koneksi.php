<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "praktikumdb";

$koneksi = mysqli_connect($server, $username, $password, $database);
if ($koneksi) {
    echo "koneksi berhasil<br>";
} else {
    echo "koneksi gagal" . mysqli_error($koneksi);
}
