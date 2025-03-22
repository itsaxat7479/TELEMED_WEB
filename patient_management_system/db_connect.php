<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "patient_db";  // ✅ Ensure this database exists in phpMyAdmin

$conn = mysqli_connect($server, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
