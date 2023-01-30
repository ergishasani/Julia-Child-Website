<?php
session_start();
require 'connect.php';

if(isset($_POST['login'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    // Check if user is an admin or regular user
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
        $row = mysqli_fetch_assoc($results);
        if ($row['user_type'] == 'admin') {
            // Admin is logged in
            include 'list_users.php';
        } else {
            // Regular user is logged in
            $_SESSION['username'] = $row['username'];
            header('Location: welcome.php');
        }
    } else {
        // Invalid username or password
        echo "<script>alert('Invalid username or password');</script>";
        echo "<script>window.location.href='index.php';</script>";
    }
}
?>