<?php
session_start();

// Connect to DB
$conn = mysqli_connect("localhost", "root", "", "thenu");

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Check credentials
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $_SESSION['username'] = $username;
        header("Location: about.html"); // Redirect to About page
        exit();
    } else {
        echo "<script>alert('Invalid username or password');window.location.href='index.html';</script>";
    }
}
?>