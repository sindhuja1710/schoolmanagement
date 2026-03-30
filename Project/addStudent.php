<?php

$conn = new mysqli("localhost","root","","sindhu");

if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}


$name = $_POST['name'];
$roll = $_POST['roll'];

$sql = "INSERT INTO students(name, roll_number, class)
        VALUES('$name','$roll','Class A')";

if($conn->query($sql)){
    echo "Student Added";
}else{
    echo "Error";
}
?>