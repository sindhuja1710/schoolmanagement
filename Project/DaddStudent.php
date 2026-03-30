<?php
$conn = mysqli_connect("localhost","root","","thenu");

if(!$conn){
    die("Database connection failed");
}


$name=$_POST['name'];
$father=$_POST['father'];
$mother=$_POST['mother'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$whatsapp=$_POST['whatsapp'];
$blood=$_POST['blood'];
$dob=$_POST['dob'];
$age=$_POST['age'];
$gender=$_POST['gender'];

$sql="INSERT INTO students_class1
(name,father,mother,address,phone,whatsapp,blood,dob,age,gender)
VALUES('$name','$father','$mother','$address','$phone','$whatsapp','$blood','$dob','$age','$gender')";

mysqli_query($conn,$sql);

?>