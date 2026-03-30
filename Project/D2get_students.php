<?php
$conn = new mysqli("localhost","root","","thenu");

if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

$result = $conn->query("SELECT * FROM class2_students");

$students = [];

while($row = $result->fetch_assoc()){
    $students[] = $row;
}

echo json_encode($students);

?>