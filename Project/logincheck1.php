<?php
$con=mysqli_connect("localhost:3306","root","","thenu");
	$name=$_POST['name'];
	$username=$_POST['username'];
	$password=$_POST['password'];

$sql="INSERT INTO login(name,username,password)values('$name','$username','$password')";
$r=mysqli_query($con,$sql);
if($r)
{
 header("Location: success.html");
        exit();
}
else{
	echo "user Details Not Added ";
}
?>