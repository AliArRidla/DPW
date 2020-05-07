<?php
include "koneksi.php";

$username = $_POST['username'];
$password = md5($_POST['password']);

$query = "SELECT * FROM users WHERE username='$username' and password ='$password'";
$result = mysqli_query($koneksi, $query);
$cek = mysqli_num_rows($result);

if ($cek) {
    echo "Anda Berhasil Login Silahkan Menuju"; ?>
    <a href="homeAdmin.html">Halaman Home</a>
<?php
} else {
    echo "Anda Gagal Login"; ?>
    <a href="loginForm.html">Login Kembali </a>
<?php
    echo mysqli_error($koneksi);
}
?>