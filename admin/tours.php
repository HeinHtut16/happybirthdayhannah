<?php
session_start();
if (!isset($_SESSION['admin'])) { header('Location: login.php'); exit(); }
// Placeholder for tour list
echo '<h1>Manage Tours</h1>';
?>