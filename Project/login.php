<?php
$conn = mysqli_connect("localhost","root","","thenu");

if(!$conn){
die("Database connection failed");
}

$username=$_POST['username'];
$password=$_POST['password'];

$sql="SELECT * FROM users1 WHERE username='$username' AND password='$password'";

$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0)
{
    header("Location: About.html");
echo "Login Successful";
}
else 
{
echo "Invalid Username or Password";
}
?>