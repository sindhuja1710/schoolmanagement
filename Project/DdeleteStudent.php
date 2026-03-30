<?php
$conn = mysqli_connect("localhost","root","","thenu");

if(!$conn){
    die("Database connection failed");
}


$id=$_POST['id'];

mysqli_query($conn,"DELETE FROM students_class1 WHERE id=$id");

?>