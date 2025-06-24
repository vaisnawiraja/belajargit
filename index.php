<?php 
session_start();
include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = md5($_POST["password"]);

    $sql = "SELECT * FROM pengguna WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $_SESSION["login"] = true;
        header("Location: dashboard.php");
    } else {
        $error = "Login gagal!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - Sistem Pelajar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            height: 100vh;
            display: flex;
            font-family: 'Poppins', sans-serif;
        }
        .left-panel {
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            color: white;
            width: 50%;
            padding: 100px 50px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .right-panel {
            background: #f9f9f9;
            width: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .login-box {
            background: white;
            padding: 40px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            border-radius: 12px;
            width: 100%;
            max-width: 350px;
        }
    </style>
</head>
<body>

<div class="left-panel">
    <h1>Selamat Datang</h1>
    <p>Sistem Pengurusan Pelajar</p>
</div>

<div class="right-panel">
    <div class="login-box">
        <h4 class="mb-4 text-center">Log Masuk Akaun</h4>
        <?php if (isset($error)): ?>
            <div class="alert alert-danger"><?= $error ?></div>
        <?php endif; ?>
        <form method="post">
            <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" name="username" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Login</button>
        </form>
    </div>
</div>

</body>
</html>
