<?php
session_start(); // Start or resume the session

// Hardcoded login credentials
$valid_username = 'admin';
$valid_password = 'password123';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    // Validate credentials against the hardcoded values
    if ($username === $valid_username && $password === $valid_password) {
        // Set session variables for logged-in user
        $_SESSION['logged_in'] = true;
        $_SESSION['user'] = $username; // Store username in session

        // Redirect to the dashboard
        header('Location: dashboard.php');
        exit();
    } else {
        // Redirect back to login with an error message
        header('Location: ../index.php?error=Invalid%20username%20or%20password');
        exit();
    }
}
?>