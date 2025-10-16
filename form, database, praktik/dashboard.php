<?php
include 'koneksi.php';

session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - Toko Amanah</title>
</head>
<body>
    <h2>Selamat datang, <?= $_SESSION['username']; ?> 👋</h2>
    <p>Level: <?= $_SESSION['level']; ?></p>
    <a href="logout.php">Logout</a>
</body>
</html>
