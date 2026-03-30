<?php
$con=mysqli_connect("localhost:3306","root","","thenu");
	$username=$_POST['username'];
	$password=$_POST['password'];
$sql = "UPDATE login SET password='$password' WHERE username='$username'";
$r=mysqli_query($con,$sql);
if ($password != "") {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}
?>

