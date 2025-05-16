<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header('Location: login.php');
    exit();
}
echo '<h1>Admin Dashboard</h1><a href="bookings.php">Manage Bookings</a> | <a href="tours.php">Manage Tours</a> | <a href="logout.php">Logout</a>';
?>