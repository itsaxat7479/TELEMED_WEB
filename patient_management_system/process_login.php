<?php
session_start();
include '../php/db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE email=?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();

        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['name'];

            // ✅ Redirect to index.html after login
            header("Location: ../index.html");
            exit();
        } else {
            echo "<script>alert('Invalid email or password!'); window.location.href='login.php';</script>";
        }
    } else {
        echo "<script>alert('Invalid email or password!'); window.location.href='login.php';</script>";
    }
}
?>
