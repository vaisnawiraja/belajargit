<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "sistem_pelajar";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Sambungan gagal: " . $conn->connect_error);
}
?>
