<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Barang - Toko Amanah</title>
</head>
<body>
    <h2>Tambah Barang Baru</h2>

    <form action="simpan_barang.php" method="post">
        <label>Nama Barang:</label><br>
        <input type="text" name="nama_barang" required><br><br>

        <label>Harga:</label><br>
        <input type="number" name="harga" required><br><br>

        <label>Stok:</label><br>
        <input type="number" name="stok" required><br><br>

        <button type="submit">Simpan</button>
    </form>

    <br><a href="daftar_barang.php">Lihat Daftar Barang</a>
</body>
</html>

