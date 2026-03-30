<?php
$conn = new mysqli("localhost","root","","thenu");

if($conn->connect_error){
die("Connection failed: ".$conn->connect_error);
}

$staff_id = $_POST['staff_id'];
$status = $_POST['status'];
$date = date("Y-m-d");

$sql = "INSERT INTO staff_attendance (staff_id,status,date)
VALUES ('$staff_id','$status','$date')";

$conn->query($sql);

?>