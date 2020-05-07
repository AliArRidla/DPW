<html>

<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
        <?php
        include "koneksi.php";
        $query = "SELECT * FROM mahasiswa";
        $result = mysqli_query($koneksi, $query);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {

        ?>
                <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['nama'] ?></td>
                    <td><?php echo $row['alamat'] ?></td>
                    <td>
                        <a href="editForm.php?id=<? echo $row['id']; ?>">Edit</a>
                        <a href="hapus.php?id=<? echo $row['id']; ?>">Hapus</a>
                    </td>
            <?php
            }
        } else {
            echo "0 results";
        }
            ?>
                </tr>
    </table>
</body>

</html>