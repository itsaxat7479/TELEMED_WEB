<?php
session_start();
if (!isset($_SESSION['user_name'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Management Dashboard</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>
    <h1>Patient Management System</h1>

    <div class="container">

        <div class="card appointment">
            <h2>Appointment Scheduling</h2>
            <form action="process_appointment.php" method="POST">
                <input type="text" name="name" placeholder="Patient Name" required>
                <input type="date" name="date" required>
                <input type="time" name="time" required>
                <button type="submit">Schedule Appointment</button>
            </form>
            <?php if (isset($_GET['appointment']) && $_GET['appointment'] == "success") {
                echo "<p class='success-message'>Appointment Scheduled Successfully!</p>";
            } ?>
        </div>

        <div class="card records">
            <h2>Patient Records Management</h2>
            <form action="process_record.php" method="POST">
                <input type="text" name="name" placeholder="Patient Name" required>
                <textarea name="record" placeholder="Record Details" required></textarea>
                <button type="submit">Add Record</button>
            </form>
            <?php if (isset($_GET['record']) && $_GET['record'] == "success") {
                echo "<p class='success-message'>Record Added Successfully!</p>";
            } ?>
        </div>

        <div class="card billing">
            <h2>Billing Processes</h2>
            <form action="process_payment.php" method="POST">
                <input type="text" name="name" placeholder="Patient Name" required>
                <input type="number" name="amount" placeholder="Enter Amount" required>
                <button type="submit">Process Payment</button>
            </form>
            <?php if (isset($_GET['payment']) && $_GET['payment'] == "success") {
                echo "<p class='success-message'>Payment Processed Successfully!</p>";
            } ?>
        </div>

    </div>
</body>
</html>
