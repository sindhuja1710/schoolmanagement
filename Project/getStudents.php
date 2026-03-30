<?php
$conn = new mysqli("localhost","root","","sindhu");

if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}


$result = $conn->query("SELECT * FROM students WHERE class='Class A'");

$students = array();

while($row = $result->fetch_assoc()){
    $students[] = $row;
}

echo json_encode($students);
?>