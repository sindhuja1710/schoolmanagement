<?php
$conn = new mysqli("localhost","root","","thenu");

if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$father = $_POST['father'];
$mother = $_POST['mother'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$whatsapp = $_POST['whatsapp'];
$blood = $_POST['blood'];
$dob = $_POST['dob'];
$age = $_POST['age'];
$gender = $_POST['gender'];

$sql = "INSERT INTO class2_students
(name,father,mother,address,phone,whatsapp,blood,dob,age,gender)
VALUES
('$name','$father','$mother','$address','$phone','$whatsapp','$blood','$dob','$age','$gender')";

$conn->query($sql);

?>