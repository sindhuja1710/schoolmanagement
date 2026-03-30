<?php
// Database connection
$conn = mysqli_connect("localhost", "root", "", "thenu");

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

if (isset($_POST['signup'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Insert user into DB
    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Signup Successful! You can now login.');window.location.href='index.html';</script>";
    } else {
        echo "<script>alert('Error: Username may already exist.');window.location.href='signup.php';</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Signup - Vidhya Sagar Global School</title>

<style>
body {
    margin:0;
    font-family: Arial;
    background:#f4f6f9;
}

/* HEADER */
.header{
    background:#8ebbee;
    color:white;
    padding:10px;
    text-align:center;
}

.header h1{
    margin:0;
    font-size:28px;
}

.header p{
    margin:0;
    font-size:16px;
}

/* SIGNUP FORM */
.overlay {
    background: rgba(0,0,0,0.7);
    padding: 40px;
    border-radius: 10px;
    width: 350px;
    margin: 50px auto;
    color: white;
    text-align: center;
}

.overlay h2 {
    margin-bottom: 20px;
}

.overlay input[type="text"],
.overlay input[type="password"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: none;
    border-radius: 5px;
    font-size:16px;
}

.overlay input[type="submit"] {
    width: 100%;
    padding: 10px;
    background: #004080;
    color: white;
    border: none;
    border-radius: 5px;
    font-size:16px;
    cursor: pointer;
    transition: 0.3s;
}

.overlay input[type="submit"]:hover {
    background:#0066cc;
}

.signup_link {
    margin-top: 15px;
}

.signup_link a {
    color: yellow;
    text-decoration: none;
}

/* FOOTER */
footer{
    background:#002147;
    color:white;
    text-align:center;
    padding:15px;
    position: fixed;
    bottom:0;
    width:100%;
}
</style>

</head>
<body>

<header class="header">
    <h1>Vidhya Sagar Global School</h1>
    <p>School Management System</p>
</header>

<div class="overlay">
    <h2>Signup Form</h2>
    <form method="POST" action="">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="submit" name="signup" value="Signup">
    </form>
    <div class="signup_link">
        Already a member? <a href="index.html">Login</a>
    </div>
</div>

<footer>
    © 2026 Vidhya Sagar Global School | All Rights Reserved
</footer>

</body>
</html>