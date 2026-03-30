<?php
$conn = mysqli_connect("localhost","root","","thenu");

if(!$conn){
die("Connection Failed");
}

$name=$_POST['name'];
$roll=$_POST['roll'];

$sql="INSERT INTO students(name,roll_number,class)
VALUES('$name','$roll','Class II')";

mysqli_query($conn,$sql);

?>