<?php 
session_start();
session_destroy();
echo "<script>alert('Anda telah logout!');window.location='index.php';</script>";
?>
