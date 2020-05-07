<html>

<head></head>

<body>
    <?php
    include "koneksi.php";
    $id = $_GET['id'];
    $query = "SELECT * FROM mahasiswa WHERE id='$id'";
    $result = mysqli_query($koneksi, $query);
    ?>
    <form method="GET" action="prosesEdit.php">
        <table>
            <?php
            while ($row = mysqli_fetch_array($result)) {
            ?>
                <tr>
                    <td>Id :</td>
                    <td><input type="text" name="id" value="<?php echo $row['id']; ?>"></td>
                </tr>
                <tr>
                    <td>Nama :</td>
                    <td><input type="text" name="nama" value="<?php echo $row['nama']; ?>"></td>
                </tr>
                <tr>
                    <td>Alamat :</td>
                    <td><textarea rows="5" cols="20" name="alamat"><?php echo $row['alamat']; ?></textarea></td>
                </tr>
                <tr>
                    <td><input type="submit" name="kirim" value="kirim"></td>
                </tr>
            <?php
            }
            ?>
    </form>
    </table>
</body>

</html>