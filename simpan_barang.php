<?php
include 'koneksi.php';

$nama_barang = $_POST['nama_barang'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];

$sql = "INSERT INTO barang (nama_barang, harga, stok) VALUES ('$nama_barang', '$harga', '$stok')";

if (mysqli_query($conn, $sql)) {
    echo " Data berhasil disimpan ke tabel barang!<br>";
    echo "<a href='form_barang.php'>Kembali</a> | <a href='daftar_barang.php'>Lihat Barang</a>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
