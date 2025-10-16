<?php
include 'koneksi.php';
$result = mysqli_query($conn, "SELECT * FROM barang");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Barang - Toko Amanah</title>
</head>
<body>
    <h2>Daftar Barang</h2>
    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Stok</th>
        </tr>
        <?php
        $no = 1;
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                <td>{$no}</td>
                <td>{$row['nama_barang']}</td>
                <td>{$row['harga']}</td>
                <td>{$row['stok']}</td>
            </tr>";
            $no++;
        }
        ?>
    </table>
    <br><a href="form_barang.php">Tambah Barang Baru</a>
</body>
</html>
