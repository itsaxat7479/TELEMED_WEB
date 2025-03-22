<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection
    $conn = new mysqli("localhost", "root", "", "patient_db");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $name = $_POST['name'];
    $date = $_POST['date'];
    $time = $_POST['time'];

    $sql = "INSERT INTO appointments (name, date, time) VALUES ('$name', '$date', '$time')";

    if ($conn->query($sql) === TRUE) {
        header("Location: dashboard.php?appointment=success");
    } else {
        echo "Error: " . $conn->error;
    }
    $conn->close();
}
?>
