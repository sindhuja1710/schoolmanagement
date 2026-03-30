<?php
$conn = mysqli_connect("localhost","root","","thenu");

if(!$conn){
die("Database connection failed");
}

$result=mysqli_query($conn,"SELECT * FROM admissions");

while($row=mysqli_fetch_assoc($result)){

echo $row['name']." - ";
echo $row['class']." - ";
echo $row['phone']."<br>";

}
?>