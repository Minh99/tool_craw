<?php
session_start();

// Kiểm tra xem session có tồn tại không
if (isset($_SESSION['fullName'], $_SESSION['email'], $_SESSION['phone'], $_SESSION['password1'])) {
    echo '<pre>';
    echo 'Full Name: ' . $_SESSION['fullName'] . "\n";
    echo 'Email: ' . $_SESSION['email'] . "\n";
    echo 'Phone: ' . $_SESSION['phone'] . "\n";
    echo 'Password 1: ' . $_SESSION['password1'] . "\n";
    echo '</pre>';
} else {
    echo 'No session data found.';
}
?>
