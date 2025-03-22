<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = new mysqli("localhost", "root", "", "patient_db");
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $name = $_POST['name'];
    $record = $_POST['record'];

    $sql = "INSERT INTO records (name, record) VALUES ('$name', '$record')";

    if ($conn->query($sql) === TRUE) {
        header("Location: dashboard.php?record=success");
    } else {
        echo "Error: " . $conn->error;
    }
    $conn->close();
}
?>
