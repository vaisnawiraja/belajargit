<?php
include "db.php";
$id = $_GET["id"];
$conn->query("DELETE FROM pelajar WHERE id=$id");
header("Location: dashboard.php");
?>
