<?php
$conn = mysqli_connect("localhost","root","","thenu");

if(!$conn){
    die("Database connection failed");
}


$result=mysqli_query($conn,"SELECT * FROM students_class1");

$students=[];

while($row=mysqli_fetch_assoc($result)){
$students[]=$row;
}

echo json_encode($students);

?>