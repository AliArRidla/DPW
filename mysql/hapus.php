<?php
include "koneksi.php";
$id = $_GET['id'];
$query = "DELETE FROM mahasiswa WHERE id='$id'";
$result = mysqli_query($koneksi, $query);

if ($result) {
    echo "Data berhasil dihapus";
?>
<?php
} else {
    echo "Data gagal dihapus" . mysqli_error($koneksi);
}
?>
