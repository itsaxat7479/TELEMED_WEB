<?php
session_start();
include('../php/db_connect.php');

if (isset($_POST['book_appointment'])) {
    $patient_id = $_SESSION['patient_id'];
    $doctor = $_POST['doctor'];
    $date = $_POST['date'];
    $time = $_POST['time'];

    $query = "INSERT INTO appointments (patient_id, doctor, date, time) VALUES ('$patient_id', '$doctor', '$date', '$time')";
    mysqli_query($conn, $query);
    echo "<script>alert('Appointment booked successfully');</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Book Appointment</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container">
        <h2>Book Appointment</h2>
        <form action="" method="POST">
            <input type="text" name="doctor" placeholder="Doctor Name" required>
            <input type="date" name="date" required>
            <input type="time" name="time" required>
            <button type="submit" name="book_appointment">Book Appointment</button>
        </form>
    </div>
</body>
</html>
