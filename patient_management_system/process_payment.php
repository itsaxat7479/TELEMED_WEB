<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = new mysqli("localhost", "root", "", "patient_db");
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $name = $_POST['name'];
    $amount = $_POST['amount'];

    $sql = "INSERT INTO payments (name, amount) VALUES ('$name', '$amount')";

    if ($conn->query($sql) === TRUE) {
        header("Location: dashboard.php?payment=success");
    } else {
        echo "Error: " . $conn->error;
    }
    $conn->close();
}
?>
