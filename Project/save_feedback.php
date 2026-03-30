<?php

$conn = new mysqli("localhost","root","","thenu");

if($conn->connect_error){
die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$student = $_POST['student'];
$teacher = $_POST['teacher'];
$rating = $_POST['rating'];
$feedback = $_POST['feedback'];

$sql = "INSERT INTO feedback(parent_name,student_name,teacher_name,rating,feedback)
VALUES('$name','$student','$teacher','$rating','$feedback')";

$conn->query($sql);

header("Location: contact.php");

?>