<?php
$conn = mysqli_connect("localhost","root","","thenu");

if(!$conn){
die("Connection Failed");
}


$sql="SELECT * FROM students WHERE class='Class II'";
$result=mysqli_query($conn,$sql);

$students=[];

while($row=mysqli_fetch_assoc($result)){
$students[]=$row;
}

echo json_encode($students);

?>