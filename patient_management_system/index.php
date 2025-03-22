<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Management System</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="#">Patient Management</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="pages/login.php">Login</a></li>
                <li class="nav-item"><a class="nav-link" href="pages/register.php">Register</a></li>
                <li class="nav-item"><a class="nav-link" href="pages/contact.php">Contact Us</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<header class="hero bg-light text-center py-5">
    <div class="container">
        <h1 class="display-4 text-primary">Welcome to Patient Management System</h1>
        <p class="lead">Effortlessly manage appointments, patient records, and billing with our system.</p>
        <a href="pages/login.php" class="btn btn-primary btn-lg me-2">Login</a>
        <a href="pages/register.php" class="btn btn-outline-primary btn-lg">Register</a>
    </div>
</header>

<!-- Features Section -->
<section class="container my-5">
    <div class="row text-center">
        <div class="col-md-4">
            <i class="bi bi-calendar-check" style="font-size: 3rem; color: blue;"></i>
            <h3>Easy Appointment Booking</h3>
            <p>Book appointments online with just a few clicks.</p>
        </div>
        <div class="col-md-4">
            <i class="bi bi-file-medical" style="font-size: 3rem; color: green;"></i>
            <h3>Manage Patient Records</h3>
            <p>Secure and organized patient record management.</p>
        </div>
        <div class="col-md-4">
            <i class="bi bi-cash-coin" style="font-size: 3rem; color: red;"></i>
            <h3>Billing & Payments</h3>
            <p>Hassle-free billing and payment processing.</p>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="bg-primary text-white text-center py-3">
    <p>© 2025 Patient Management System | All Rights Reserved</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
