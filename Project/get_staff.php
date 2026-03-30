<?php
$conn = new mysqli("localhost","root","","thenu");

if($conn->connect_error){
die("Connection failed: ".$conn->connect_error);
}

$result = $conn->query("SELECT * FROM staff");

$staff = [];

while($row = $result->fetch_assoc()){
$staff[] = $row;
}

echo json_encode($staff);
?>