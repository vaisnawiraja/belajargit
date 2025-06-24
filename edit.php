<?php
include "db.php";
$id = $_GET["id"];
$result = $conn->query("SELECT * FROM pelajar WHERE id=$id");
$data = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $ic = $_POST["ic"];
    $kursus = $_POST["kursus"];
    $conn->query("UPDATE pelajar SET nama='$nama', ic='$ic', kursus='$kursus' WHERE id=$id");
    header("Location: dashboard.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Pelajar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-4">
<div class="container">
    <h3>Edit Maklumat Pelajar</h3>
    <form method="post" class="bg-white p-4 shadow rounded">
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" value="<?= $data['nama'] ?>" required>
        </div>
        <div class="mb-3">
            <label>IC</label>
            <input type="text" name="ic" class="form-control" value="<?= $data['ic'] ?>" required>
        </div>
        <div class="mb-3">
            <label>Kursus</label>
            <input type="text" name="kursus" class="form-control" value="<?= $data['kursus'] ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Kemas Kini</button>
        <a href="dashboard.php" class="btn btn-secondary">Kembali</a>
    </form>
</div>
</body>
</html>
