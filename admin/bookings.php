<?php
session_start();
if (!isset($_SESSION['admin'])) { header('Location: login.php'); exit(); }
// Placeholder for booking list
echo '<h1>All Bookings</h1>';
?>