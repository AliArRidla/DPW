<?php
include "koneksi.php";
$id = $_GET['id'];
$nama = $_GET['nama'];
$alamat = $_GET['alamat'];

$query = "UPDATE mahasiswa SET nama='$nama',alamat='$alamat' WHERE id='$id'";
$result = mysqli_query($koneksi, $query);

if ($result) {
    echo "Berhasil update data ke database";
?>
    <a href="homeCRUD.php">Lihat data tabel</a>
<?php
} else {
    echo "Gagal update data" . mysqli_error($koneksi);
}
?>