<?php
$conn = new mysqli("localhost","root","","sindhu");

if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}


$student_id = $_POST['student_id'];
$status = $_POST['status'];

$sql = "INSERT INTO attendance(student_id,status,date)
        VALUES('$student_id','$status',CURDATE())";

$conn->query($sql);
?>