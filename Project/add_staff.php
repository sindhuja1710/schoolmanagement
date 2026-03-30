<?php
$conn = new mysqli("localhost","root","","thenu");

if($conn->connect_error){
die("Connection failed: ".$conn->connect_error);
}

$name = $_POST['name'];
$staff_id = $_POST['staff_id'];
$degree = $_POST['degree'];

$sql = "INSERT INTO staff (name,staff_id,degree)
VALUES ('$name','$staff_id','$degree')";

$conn->query($sql);

echo "success";
?>