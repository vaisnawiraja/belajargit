<?php
include "db.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $ic = $_POST["ic"];
    $kursus = $_POST["kursus"];

    $conn->query("INSERT INTO pelajar (nama, ic, kursus) VALUES ('$nama', '$ic', '$kursus')");

    // Papar alert dan redirect ke dashboard
    echo "<script>alert('Pelajar berjaya ditambah!'); window.location='dashboard.php';</script>";
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Pelajar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-4">
<div class="container">
    <h3>Tambah Pelajar</h3>
    <form method="post" class="bg-white p-4 shadow rounded">
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>IC</label>
            <input type="text" name="ic" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Kursus</label>
            <input type="text" name="kursus" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="dashboard.php" class="btn btn-secondary">Kembali</a>
    </form>
</div>
</body>
</html>
