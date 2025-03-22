<?php
session_start();
include("../php/db_connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $query = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) == 1) {
        $user = mysqli_fetch_assoc($result);
        
        if (password_verify($password, $user['password'])) { // ✅ Check hashed password
            $_SESSION['user_name'] = $user['username']; // ✅ Store username in session
            echo "<script>window.location.href = 'dashboard.php';</script>"; // ✅ Redirect using JavaScript
            exit();
        } else {
            echo "<script>alert('Invalid password!'); window.location.href='login.php';</script>";
        }
    } else {
        echo "<script>alert('No user found with this email!'); window.location.href='login.php';</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Patient Management System</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <form action="login.php" method="POST">
            <div class="input-box">
                <input type="email" name="email" placeholder="Enter your Email" required>
            </div>
            <div class="input-box">
                <input type="password" name="password" placeholder="Enter your Password" required>
            </div>
            <button type="submit">Login</button>
        </form>
        <p>Don't have an account? <a href="register.php">Register</a></p>
    </div>
</body>
</html>
