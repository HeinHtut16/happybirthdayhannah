<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($username === 'admin' && $password === 'admin123') {
        $_SESSION['admin'] = true;
        header('Location: dashboard.php');
        exit();
    } else {
        echo 'Invalid credentials';
    }
}
?>
<form method='POST'><input name='username' /><input type='password' name='password' /><button type='submit'>Login</button></form>