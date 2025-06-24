<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: index.php");
}
include "db.php";
$result = $conn->query("SELECT * FROM pelajar");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    <style>
        body { background: #f5f6fa; font-family: Arial; }
        .topbar { background: #6a11cb; color: white; padding: 15px 30px; }
    </style>
</head>
<body>
<div class="topbar d-flex justify-content-between align-items-center">
    <h4>Sistem Pelajar</h4>
    <a href="logout.php" class="btn btn-light btn-sm">Logout</a>
</div>
<div class="container mt-4">
    <a href="tambah.php" class="btn btn-success mb-3">+ Tambah Pelajar</a>
    <table class="table table-bordered table-hover">
        <thead class="table-dark">
            <tr><th>ID</th><th>Nama</th><th>IC</th><th>Kursus</th><th>Tindakan</th></tr>
        </thead>
        <tbody>
        <?php while($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?= $row["id"] ?></td>
                <td><?= $row["nama"] ?></td>
                <td><?= $row["ic"] ?></td>
                <td><?= $row["kursus"] ?></td>
                <td>
                    <a href="edit.php?id=<?= $row["id"] ?>" class="btn btn-warning btn-sm">Edit</a>
                    <a href="padam.php?id=<?= $row["id"] ?>" onclick="return confirm('Padam pelajar ini?')" class="btn btn-danger btn-sm">Padam</a>
                </td>
            </tr>
        <?php endwhile; ?>
        </tbody>
    </table>
</div>
</body>
</html>
