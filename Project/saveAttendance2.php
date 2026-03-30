<?php
$conn = mysqli_connect("localhost","root","","thenu");

if(!$conn){
die("Connection Failed");
}


$student_id=$_POST['student_id'];
$status=$_POST['status'];
$date=date("Y-m-d");

$sql="INSERT INTO attendance(student_id,status,date)
VALUES('$student_id','$status','$date')";

mysqli_query($conn,$sql);

?>